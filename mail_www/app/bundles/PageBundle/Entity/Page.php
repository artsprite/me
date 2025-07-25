<?php

namespace Mautic\PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mautic\ApiBundle\Serializer\Driver\ApiMetadataDriver;
use Mautic\CategoryBundle\Entity\Category;
use Mautic\CoreBundle\Doctrine\Mapping\ClassMetadataBuilder;
use Mautic\CoreBundle\Entity\FormEntity;
use Mautic\CoreBundle\Entity\TranslationEntityInterface;
use Mautic\CoreBundle\Entity\TranslationEntityTrait;
use Mautic\CoreBundle\Entity\UuidInterface;
use Mautic\CoreBundle\Entity\UuidTrait;
use Mautic\CoreBundle\Entity\VariantEntityInterface;
use Mautic\CoreBundle\Entity\VariantEntityTrait;
use Mautic\CoreBundle\Validator\EntityEvent;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ApiResource(
 *   attributes={
 *     "security"="false",
 *     "normalization_context"={
 *       "groups"={
 *         "page:read"
 *        },
 *       "swagger_definition_name"="Read",
 *       "api_included"={"category", "translationChildren"}
 *     },
 *     "denormalization_context"={
 *       "groups"={
 *         "page:write"
 *       },
 *       "swagger_definition_name"="Write"
 *     }
 *   }
 * )
 */
class Page extends FormEntity implements TranslationEntityInterface, VariantEntityInterface, UuidInterface
{
    use TranslationEntityTrait;
    use VariantEntityTrait;
    use UuidTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var string|null
     */
    private $template;

    /**
     * @var string|null
     */
    private $customHtml;

    /**
     * @var array
     */
    private $content = [];

    /**
     * @var \DateTimeInterface
     */
    private $publishUp;

    /**
     * @var \DateTimeInterface
     */
    private $publishDown;

    /**
     * @var int
     */
    private $hits = 0;

    /**
     * @var int
     */
    private $uniqueHits = 0;

    /**
     * @var int
     */
    private $variantHits = 0;

    /**
     * @var int
     */
    private $revision = 1;

    /**
     * @var string|null
     */
    private $metaDescription;

    /**
     * @var string|null
     */
    private $headScript;

    /**
     * @var string|null
     */
    private $footerScript;

    /**
     * @var string|null
     */
    private $redirectType;

    /**
     * @var string|null
     */
    private $redirectUrl;

    /**
     * @var Category|null
     **/
    private $category;

    /**
     * @var bool|null
     */
    private $isPreferenceCenter;

    /**
     * @var bool|null
     */
    private $noIndex;

    /**
     * Used to identify the page for the builder.
     */
    private $sessionId;

    public function __clone()
    {
        $this->id = null;
        $this->clearTranslations();
        $this->clearVariants();

        parent::__clone();
    }

    public function __construct()
    {
        $this->translationChildren = new \Doctrine\Common\Collections\ArrayCollection();
        $this->variantChildren     = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public static function loadMetadata(ORM\ClassMetadata $metadata): void
    {
        $builder = new ClassMetadataBuilder($metadata);

        $builder->setTable('pages')
            ->setCustomRepositoryClass(PageRepository::class)
            ->addIndex(['alias'], 'page_alias_search');

        $builder->addId();

        $builder->addField('title', 'string');

        $builder->addField('alias', 'string');

        $builder->addNullableField('template', 'string');

        $builder->createField('customHtml', 'text')
            ->columnName('custom_html')
            ->nullable()
            ->build();

        $builder->createField('content', 'array')
            ->nullable()
            ->build();

        $builder->addPublishDates();

        $builder->addField('hits', 'integer');

        $builder->createField('uniqueHits', 'integer')
            ->columnName('unique_hits')
            ->build();

        $builder->createField('variantHits', 'integer')
            ->columnName('variant_hits')
            ->build();

        $builder->addField('revision', 'integer');

        $builder->createField('metaDescription', 'string')
            ->columnName('meta_description')
            ->nullable()
            ->build();

        $builder->createField('headScript', 'text')
            ->columnName('head_script')
            ->nullable()
            ->build();

        $builder->createField('footerScript', 'text')
            ->columnName('footer_script')
            ->nullable()
            ->build();

        $builder->createField('redirectType', 'string')
            ->columnName('redirect_type')
            ->nullable()
            ->length(100)
            ->build();

        $builder->createField('redirectUrl', 'string')
            ->columnName('redirect_url')
            ->nullable()
            ->length(2048)
            ->build();

        $builder->addCategory();

        $builder->createField('isPreferenceCenter', 'boolean')
            ->columnName('is_preference_center')
            ->nullable()
            ->build();

        $builder->createField('noIndex', 'boolean')
            ->columnName('no_index')
            ->nullable()
            ->build();

        self::addTranslationMetadata($builder, self::class);
        self::addVariantMetadata($builder, self::class);
        static::addUuidField($builder);
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata): void
    {
        $metadata->addPropertyConstraint('title', new NotBlank([
            'message' => 'mautic.core.title.required',
        ]));

        $metadata->addConstraint(new Callback([
            'callback' => function (Page $page, ExecutionContextInterface $context): void {
                $type = $page->getRedirectType();
                if (!is_null($type)) {
                    $validator  = $context->getValidator();
                    $violations = $validator->validate(
                        $page->getRedirectUrl(),
                        [
                            new Assert\Url(),
                            new NotBlank(['message' => 'mautic.core.value.required']),
                        ],
                    );

                    foreach ($violations as $violation) {
                        $context->buildViolation($violation->getMessage())
                            ->atPath('redirectUrl')
                            ->addViolation();
                    }
                }

                if ($page->isVariant()) {
                    // Get a summation of weights
                    $parent   = $page->getVariantParent();
                    $children = $parent ? $parent->getVariantChildren() : $page->getVariantChildren();

                    $total = 0;
                    foreach ($children as $child) {
                        $settings = $child->getVariantSettings();
                        $total += (int) $settings['weight'];
                    }

                    if ($total > 100) {
                        $context->buildViolation('mautic.core.variant_weights_invalid')
                            ->atPath('variantSettings[weight]')
                            ->addViolation();
                    }
                }
            },
        ]));

        $metadata->addConstraint(new EntityEvent());
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver $metadata): void
    {
        $metadata->setGroupPrefix('page')
            ->addListProperties(
                [
                    'id',
                    'title',
                    'alias',
                    'category',
                ]
            )
            ->addProperties(
                [
                    'language',
                    'publishUp',
                    'publishDown',
                    'hits',
                    'uniqueHits',
                    'variantHits',
                    'revision',
                    'metaDescription',
                    'redirectType',
                    'redirectUrl',
                    'isPreferenceCenter',
                    'noIndex',
                    'variantSettings',
                    'variantStartDate',
                    'variantParent',
                    'variantChildren',
                    'translationParent',
                    'translationChildren',
                    'template',
                    'customHtml',
                ]
            )
            ->setMaxDepth(1, 'variantParent')
            ->setMaxDepth(1, 'variantChildren')
            ->setMaxDepth(1, 'translationParent')
            ->setMaxDepth(1, 'translationChildren')
            ->build();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Page
     */
    public function setTitle($title)
    {
        $this->isChanged('title', $title);
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set alias.
     *
     * @param string $alias
     *
     * @return Page
     */
    public function setAlias($alias)
    {
        $this->isChanged('alias', $alias);
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias.
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set content.
     *
     * @param array<string> $content
     *
     * @return Page
     */
    public function setContent($content)
    {
        $this->isChanged('content', $content);
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return array<string>
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set publishUp.
     *
     * @param \DateTime $publishUp
     *
     * @return Page
     */
    public function setPublishUp($publishUp)
    {
        $this->isChanged('publishUp', $publishUp);
        $this->publishUp = $publishUp;

        return $this;
    }

    /**
     * Get publishUp.
     *
     * @return \DateTimeInterface
     */
    public function getPublishUp()
    {
        return $this->publishUp;
    }

    /**
     * Set publishDown.
     *
     * @param \DateTime $publishDown
     *
     * @return Page
     */
    public function setPublishDown($publishDown)
    {
        $this->isChanged('publishDown', $publishDown);
        $this->publishDown = $publishDown;

        return $this;
    }

    /**
     * Get publishDown.
     *
     * @return \DateTimeInterface
     */
    public function getPublishDown()
    {
        return $this->publishDown;
    }

    /**
     * Set hits.
     *
     * @param int $hits
     *
     * @return Page
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits.
     *
     * @param bool $includeVariants
     *
     * @return int|mixed
     */
    public function getHits($includeVariants = false)
    {
        return ($includeVariants) ? $this->getAccumulativeVariantCount('getHits') : $this->hits;
    }

    /**
     * Set revision.
     *
     * @param int $revision
     *
     * @return Page
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;

        return $this;
    }

    /**
     * Get revision.
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Set metaDescription.
     *
     * @param string $metaDescription
     *
     * @return Page
     */
    public function setMetaDescription($metaDescription)
    {
        $this->isChanged('metaDescription', $metaDescription);
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription.
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set headScript.
     *
     * @param string $headScript
     *
     * @return Page
     */
    public function setHeadScript($headScript)
    {
        $this->headScript = $headScript;

        return $this;
    }

    /**
     * Get headScript.
     *
     * @return string
     */
    public function getHeadScript()
    {
        return $this->headScript;
    }

    /**
     * Set footerScript.
     *
     * @param string $footerScript
     *
     * @return Page
     */
    public function setFooterScript($footerScript)
    {
        $this->footerScript = $footerScript;

        return $this;
    }

    /**
     * Get footerScript.
     *
     * @return string
     */
    public function getFooterScript()
    {
        return $this->footerScript;
    }

    /**
     * @param ?string $redirectType
     *
     * @return Page
     */
    public function setRedirectType($redirectType)
    {
        $this->isChanged('redirectType', $redirectType);
        $this->redirectType = $redirectType;

        return $this;
    }

    /**
     * @return ?string
     */
    public function getRedirectType()
    {
        return $this->redirectType;
    }

    /**
     * Set redirectUrl.
     *
     * @param string $redirectUrl
     *
     * @return Page
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->isChanged('redirectUrl', $redirectUrl);
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    /**
     * Get redirectUrl.
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * Set category.
     *
     * @return Page
     */
    public function setCategory(Category $category = null)
    {
        $this->isChanged('category', $category);
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param bool|null $isPreferenceCenter
     *
     * @return Page
     */
    public function setIsPreferenceCenter($isPreferenceCenter)
    {
        $sanitizedValue = null === $isPreferenceCenter ? null : (bool) $isPreferenceCenter;
        $this->isChanged('isPreferenceCenter', $sanitizedValue);
        $this->isPreferenceCenter = $sanitizedValue;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsPreferenceCenter()
    {
        return $this->isPreferenceCenter;
    }

    /**
     * @param bool|null $noIndex
     */
    public function setNoIndex($noIndex): void
    {
        $sanitizedValue = null === $noIndex ? null : (bool) $noIndex;
        $this->isChanged('noIndex', $sanitizedValue);
        $this->noIndex = $sanitizedValue;
    }

    /**
     * @return bool|null
     */
    public function getNoIndex()
    {
        return $this->noIndex;
    }

    /**
     * Set sessionId.
     *
     * @param string $id
     *
     * @return Page
     */
    public function setSessionId($id)
    {
        $this->sessionId = $id;

        return $this;
    }

    /**
     * Get sessionId.
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set template.
     *
     * @param string $template
     *
     * @return Page
     */
    public function setTemplate($template)
    {
        $this->isChanged('template', $template);
        $this->template = $template;

        return $this;
    }

    /**
     * Get template.
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    protected function isChanged($prop, $val)
    {
        $getter  = 'get'.ucfirst($prop);
        $current = $this->$getter();

        if ('translationParent' == $prop || 'variantParent' == $prop || 'category' == $prop) {
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
     * Set uniqueHits.
     *
     * @param int $uniqueHits
     *
     * @return Page
     */
    public function setUniqueHits($uniqueHits)
    {
        $this->uniqueHits = $uniqueHits;

        return $this;
    }

    /**
     * Get uniqueHits.
     *
     * @return int
     */
    public function getUniqueHits($includeVariants = false)
    {
        return ($includeVariants) ? $this->getAccumulativeVariantCount('getUniqueHits') : $this->uniqueHits;
    }

    /**
     * @param bool $includeVariants
     *
     * @return int|mixed
     */
    public function getVariantHits($includeVariants = false)
    {
        return ($includeVariants) ? $this->getAccumulativeVariantCount('getVariantHits') : $this->variantHits;
    }

    /**
     * @param mixed $variantHits
     */
    public function setVariantHits($variantHits): void
    {
        $this->variantHits = $variantHits;
    }

    /**
     * @return mixed
     */
    public function getCustomHtml()
    {
        return $this->customHtml;
    }

    /**
     * @param mixed $customHtml
     */
    public function setCustomHtml($customHtml): void
    {
        $this->customHtml = $customHtml;
    }
}
