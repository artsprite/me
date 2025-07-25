<?php

namespace Mautic\DynamicContentBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Events;
use Doctrine\ORM\Mapping as ORM;
use Mautic\ApiBundle\Serializer\Driver\ApiMetadataDriver;
use Mautic\CoreBundle\Doctrine\Mapping\ClassMetadataBuilder;
use Mautic\CoreBundle\Entity\FiltersEntityTrait;
use Mautic\CoreBundle\Entity\FormEntity;
use Mautic\CoreBundle\Entity\TranslationEntityInterface;
use Mautic\CoreBundle\Entity\TranslationEntityTrait;
use Mautic\CoreBundle\Entity\UuidInterface;
use Mautic\CoreBundle\Entity\UuidTrait;
use Mautic\CoreBundle\Entity\VariantEntityInterface;
use Mautic\CoreBundle\Entity\VariantEntityTrait;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ApiResource(
 *   attributes={
 *     "security"="false",
 *     "normalization_context"={
 *       "groups"={
 *         "dynamicContent:read"
 *        },
 *       "swagger_definition_name"="Read",
 *       "api_included"={"category", "translationChildren"}
 *     },
 *     "denormalization_context"={
 *       "groups"={
 *         "dynamicContent:write"
 *       },
 *       "swagger_definition_name"="Write"
 *     }
 *   }
 * )
 */
class DynamicContent extends FormEntity implements VariantEntityInterface, TranslationEntityInterface, UuidInterface
{
    use TranslationEntityTrait;
    use VariantEntityTrait;
    use FiltersEntityTrait;
    use UuidTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \Mautic\CategoryBundle\Entity\Category|null
     **/
    private $category;

    /**
     * @var \DateTimeInterface
     */
    private $publishUp;

    /**
     * @var \DateTimeInterface
     */
    private $publishDown;

    /**
     * @var string|null
     */
    private $content;

    /**
     * @var array|null
     */
    private $utmTags = [];

    /**
     * @var int
     */
    private $sentCount = 0;

    /**
     * @var ArrayCollection<Stat>
     */
    private $stats;

    /**
     * @var bool
     */
    private $isCampaignBased = true;

    /**
     * @var string|null
     */
    private $slotName;

    public function __construct()
    {
        $this->stats               = new ArrayCollection();
        $this->translationChildren = new ArrayCollection();
        $this->variantChildren     = new ArrayCollection();
    }

    /**
     * Clone method.
     */
    public function __clone()
    {
        $this->id                  = null;
        $this->sentCount           = 0;
        $this->stats               = new ArrayCollection();
        $this->translationChildren = new ArrayCollection();
        $this->variantChildren     = new ArrayCollection();

        parent::__clone();
    }

    /**
     * Clear stats.
     */
    public function clearStats(): void
    {
        $this->stats = new ArrayCollection();
    }

    public static function loadMetadata(ORM\ClassMetadata $metadata): void
    {
        $builder = new ClassMetadataBuilder($metadata);

        $builder->setTable('dynamic_content')
            ->addIndex(['is_campaign_based'], 'is_campaign_based_index')
            ->addIndex(['slot_name'], 'slot_name_index')
            ->setCustomRepositoryClass(DynamicContentRepository::class)
            ->addLifecycleEvent('cleanSlotName', Events::prePersist)
            ->addLifecycleEvent('cleanSlotName', Events::preUpdate);

        $builder->addIdColumns();

        $builder->addCategory();

        $builder->addPublishDates();

        $builder->createField('sentCount', 'integer')
            ->columnName('sent_count')
            ->build();

        $builder->createField('content', 'text')
            ->columnName('content')
            ->nullable()
            ->build();

        $builder->createField('utmTags', Types::JSON)
            ->columnName('utm_tags')
            ->nullable()
            ->build();

        $builder->createOneToMany('stats', 'Stat')
            ->setIndexBy('id')
            ->mappedBy('dynamicContent')
            ->cascadePersist()
            ->fetchExtraLazy()
            ->build();

        self::addTranslationMetadata($builder, self::class);
        self::addVariantMetadata($builder, self::class);
        self::addFiltersMetadata($builder);

        $builder->createField('isCampaignBased', 'boolean')
                ->columnName('is_campaign_based')
                ->option('default', 1)
                ->build();

        $builder->createField('slotName', 'string')
                ->columnName('slot_name')
                ->nullable()
                ->build();

        static::addUuidField($builder);
    }

    /**
     * @throws \Symfony\Component\Validator\Exception\ConstraintDefinitionException
     * @throws \Symfony\Component\Validator\Exception\InvalidOptionsException
     * @throws \Symfony\Component\Validator\Exception\MissingOptionsException
     */
    public static function loadValidatorMetaData(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('name', new NotBlank(['message' => 'mautic.core.name.required']));

        $metadata->addConstraint(new Callback([
            'callback' => function (self $dwc, ExecutionContextInterface $context): void {
                if (!$dwc->getIsCampaignBased()) {
                    $validator  = $context->getValidator();
                    $violations = $validator->validate(
                        $dwc->getSlotName(),
                        [
                            new NotBlank(
                                [
                                    'message' => 'mautic.dynamicContent.slot_name.notblank',
                                ]
                            ),
                        ]
                    );
                    foreach ($violations as $violation) {
                        $context->buildViolation($violation->getMessage())
                                ->atPath('slotName')
                                ->addViolation();
                    }
                    $violations = $validator->validate(
                        $dwc->getFilters(),
                        [
                            new Count(
                                [
                                    'minMessage' => 'mautic.dynamicContent.filter.options.empty',
                                    'min'        => 1,
                                ]
                            ),
                        ]
                    );
                    foreach ($violations as $violation) {
                        $context->buildViolation($violation->getMessage())
                                ->atPath('filters')
                                ->addViolation();
                    }
                }
            },
        ]));
    }

    public static function loadApiMetadata(ApiMetadataDriver $metadata): void
    {
        $metadata->setGroupPrefix('dwc')
            ->addListProperties([
                'id',
                'name',
                'category',
            ])
            ->addProperties([
                'publishUp',
                'publishDown',
                'sentCount',
                'variantParent',
                'variantChildren',
                'content',
                'utmTags',
                'filters',
                'isCampaignBased',
                'slotName',
            ])
            ->setMaxDepth(1, 'variantParent')
            ->setMaxDepth(1, 'variantChildren')
            ->build();
    }

    protected function isChanged($prop, $val)
    {
        $getter  = 'get'.ucfirst($prop);
        $current = $this->$getter();

        if ('variantParent' == $prop || 'translationParent' == $prop || 'category' == $prop) {
            $currentId = ($current) ? $current->getId() : '';
            $newId     = ($val) ? $val->getId() : null;
            if ($currentId != $newId) {
                $this->changes[$prop] = [$currentId, $newId];
            }
        } else {
            parent::isChanged($prop, $val);
        }
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->isChanged('name', $name);
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \Mautic\CategoryBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \Mautic\CategoryBundle\Entity\Category $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->isChanged('category', $category);
        $this->category = $category;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPublishUp()
    {
        return $this->publishUp;
    }

    /**
     * @param \DateTime $publishUp
     *
     * @return $this
     */
    public function setPublishUp($publishUp)
    {
        $this->isChanged('publishUp', $publishUp);
        $this->publishUp = $publishUp;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPublishDown()
    {
        return $this->publishDown;
    }

    /**
     * @param \DateTime $publishDown
     *
     * @return $this
     */
    public function setPublishDown($publishDown)
    {
        $this->isChanged('publishDown', $publishDown);
        $this->publishDown = $publishDown;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->isChanged('content', $content);
        $this->content = $content;

        return $this;
    }

    /**
     * @param bool $includeVariants
     *
     * @return mixed
     */
    public function getSentCount($includeVariants = false)
    {
        return $includeVariants ? $this->getAccumulativeTranslationCount('getSentCount') : $this->sentCount;
    }

    /**
     * @return $this
     */
    public function setSentCount($sentCount)
    {
        $this->sentCount = $sentCount;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @return bool
     */
    public function getIsCampaignBased()
    {
        return $this->isCampaignBased;
    }

    /**
     * @param bool $isCampaignBased
     *
     * @return $this
     */
    public function setIsCampaignBased($isCampaignBased)
    {
        $this->isChanged('isCampaignBased', $isCampaignBased);
        $this->isCampaignBased = $isCampaignBased;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlotName()
    {
        return $this->slotName;
    }

    /**
     * @param string $slotName
     *
     * @return $this
     */
    public function setSlotName($slotName)
    {
        $this->isChanged('slotName', $slotName);
        $this->slotName = $slotName;

        return $this;
    }

    /**
     * Lifecycle callback to clear the slot name if is_campaign is true.
     */
    public function cleanSlotName(): void
    {
        if ($this->getIsCampaignBased()) {
            $this->setSlotName('');
        }
    }

    /**
     * @return DynamicContent
     */
    public function setUtmTags(array $utmTags)
    {
        $this->isChanged('utmTags', $utmTags);
        $this->utmTags = $utmTags;

        return $this;
    }

    /**
     * @return array
     */
    public function getUtmTags()
    {
        return $this->utmTags;
    }
}
