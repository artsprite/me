<?php

namespace Mautic\LeadBundle\Model;

use Doctrine\DBAL\Query\Expression\ExpressionBuilder;
use Doctrine\ORM\EntityManager;
use Mautic\CoreBundle\Cache\ResultCacheOptions;
use Mautic\CoreBundle\Form\RequestTrait;
use Mautic\CoreBundle\Helper\CoreParametersHelper;
use Mautic\CoreBundle\Helper\DateTimeHelper;
use Mautic\CoreBundle\Helper\InputHelper;
use Mautic\CoreBundle\Helper\UserHelper;
use Mautic\CoreBundle\Model\AjaxLookupModelInterface;
use Mautic\CoreBundle\Model\FormModel as CommonFormModel;
use Mautic\CoreBundle\Security\Permissions\CorePermissions;
use Mautic\CoreBundle\Translation\Translator;
use Mautic\EmailBundle\Helper\EmailValidator;
use Mautic\LeadBundle\Deduplicate\CompanyDeduper;
use Mautic\LeadBundle\Entity\Company;
use Mautic\LeadBundle\Entity\CompanyLead;
use Mautic\LeadBundle\Entity\CompanyRepository;
use Mautic\LeadBundle\Entity\Lead;
use Mautic\LeadBundle\Entity\LeadField;
use Mautic\LeadBundle\Entity\LeadRepository;
use Mautic\LeadBundle\Event\CompanyEvent;
use Mautic\LeadBundle\Event\CompanyMergeEvent;
use Mautic\LeadBundle\Event\LeadChangeCompanyEvent;
use Mautic\LeadBundle\Exception\UniqueFieldNotFoundException;
use Mautic\LeadBundle\Field\FieldList;
use Mautic\LeadBundle\Form\Type\CompanyType;
use Mautic\LeadBundle\LeadEvents;
use Mautic\UserBundle\Entity\User;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * @extends CommonFormModel<Company>
 *
 * @implements AjaxLookupModelInterface<Company>
 */
class CompanyModel extends CommonFormModel implements AjaxLookupModelInterface
{
    use DefaultValueTrait;
    use RequestTrait;

    /**
     * @var FieldModel
     */
    protected $leadFieldModel;

    /**
     * @var array
     */
    protected $companyFields;

    /**
     * @var array
     */
    private $fields = [];

    private bool $repoSetup = false;

    public function __construct(
        FieldModel $leadFieldModel,
        protected EmailValidator $emailValidator,
        protected CompanyDeduper $companyDeduper,
        EntityManager $em,
        CorePermissions $security,
        EventDispatcherInterface $dispatcher,
        UrlGeneratorInterface $router,
        Translator $translator,
        UserHelper $userHelper,
        LoggerInterface $mauticLogger,
        CoreParametersHelper $coreParametersHelper,
        private FieldList $fieldList,
    ) {
        $this->leadFieldModel = $leadFieldModel;

        parent::__construct($em, $security, $dispatcher, $router, $translator, $userHelper, $mauticLogger, $coreParametersHelper);
    }

    /**
     * @param Company $entity
     * @param bool    $unlock
     */
    public function saveEntity($entity, $unlock = true): void
    {
        // Update leads primary company name
        $this->setEntityDefaultValues($entity, 'company');
        $this->getCompanyLeadRepository()->updateLeadsPrimaryCompanyName($entity);

        parent::saveEntity($entity, $unlock);
    }

    /**
     * Save an array of entities.
     *
     * @param array $entities
     * @param bool  $unlock
     */
    public function saveEntities($entities, $unlock = true): void
    {
        // Update leads primary company name
        foreach ($entities as $entity) {
            $this->setEntityDefaultValues($entity, 'company');
            $this->getCompanyLeadRepository()->updateLeadsPrimaryCompanyName($entity);
        }
        parent::saveEntities($entities, $unlock);
    }

    public function getRepository(): CompanyRepository
    {
        $repo = $this->em->getRepository(Company::class);

        if (!$this->repoSetup) {
            $this->repoSetup = true;
            $repo->setDispatcher($this->dispatcher);
            // set the point trigger model in order to get the color code for the lead
            $fields = $this->fieldList->getFieldList(true, true, ['isPublished' => true, 'object' => 'company']);

            $searchFields = [];
            foreach ($fields as $groupFields) {
                $searchFields = array_merge($searchFields, array_keys($groupFields));
            }
            $repo->setAvailableSearchFields($searchFields);
        }

        return $repo;
    }

    /**
     * @return \Mautic\LeadBundle\Entity\CompanyLeadRepository
     */
    public function getCompanyLeadRepository()
    {
        return $this->em->getRepository(CompanyLead::class);
    }

    public function getPermissionBase(): string
    {
        // We are using lead:leads in the CompanyController so this should match to prevent a BC break
        return 'lead:leads';
    }

    public function getNameGetter(): string
    {
        return 'getPrimaryIdentifier';
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    public function createForm($entity, FormFactoryInterface $formFactory, $action = null, $options = []): \Symfony\Component\Form\FormInterface
    {
        if (!$entity instanceof Company) {
            throw new MethodNotAllowedHttpException(['Company']);
        }
        if (!empty($action)) {
            $options['action'] = $action;
        }

        return $formFactory->create(CompanyType::class, $entity, $options);
    }

    public function getEntity($id = null): ?Company
    {
        if (null === $id) {
            return new Company();
        }

        return parent::getEntity($id);
    }

    /**
     * @return mixed
     */
    public function getUserCompanies()
    {
        $user = (!$this->security->isGranted('lead:leads:viewother')) ?
            $this->userHelper->getUser() : false;

        return $this->em->getRepository(Company::class)->getCompanies($user);
    }

    /**
     * Reorganizes a field list to be keyed by field's group then alias.
     */
    public function organizeFieldsByGroup($fields): array
    {
        $array = [];

        foreach ($fields as $field) {
            if ($field instanceof LeadField) {
                $alias = $field->getAlias();
                if ('company' === $field->getObject()) {
                    $group                          = $field->getGroup();
                    $array[$group][$alias]['id']    = $field->getId();
                    $array[$group][$alias]['group'] = $group;
                    $array[$group][$alias]['label'] = $field->getLabel();
                    $array[$group][$alias]['alias'] = $alias;
                    $array[$group][$alias]['type']  = $field->getType();
                }
            } else {
                $alias   = $field['alias'];
                $field[] = $alias;
                if ('company' === $field['object']) {
                    $group                          = $field['group'];
                    $array[$group][$alias]['id']    = $field['id'];
                    $array[$group][$alias]['group'] = $group;
                    $array[$group][$alias]['label'] = $field['label'];
                    $array[$group][$alias]['alias'] = $alias;
                    $array[$group][$alias]['type']  = $field['type'];
                }
            }
        }

        // make sure each group key is present
        $groups = ['core', 'social', 'personal', 'professional'];
        foreach ($groups as $g) {
            if (!isset($array[$g])) {
                $array[$g] = [];
            }
        }

        return $array;
    }

    /**
     * Populates custom field values for updating the company.
     */
    public function setFieldValues(Company $company, array $data, bool $overwriteWithBlank = false): void
    {
        // save the field values
        $fieldValues = $company->getFields();

        if (empty($fieldValues)) {
            // Lead is new or they haven't been populated so let's build the fields now
            if (empty($this->fields)) {
                $this->fields = $this->leadFieldModel->getEntities(
                    [
                        'filter'         => ['object' => 'company'],
                        'hydration_mode' => 'HYDRATE_ARRAY',
                        'result_cache'   => new ResultCacheOptions(LeadField::CACHE_NAMESPACE),
                    ]
                );
                $this->fields = $this->organizeFieldsByGroup($this->fields);
            }
            $fieldValues = $this->fields;
        }

        // update existing values
        foreach ($fieldValues as &$groupFields) {
            foreach ($groupFields as $alias => &$field) {
                if (!isset($field['value'])) {
                    $field['value'] = null;
                }
                // Only update fields that are part of the passed $data array
                if (array_key_exists($alias, $data)) {
                    $curValue = $field['value'];
                    $newValue = $data[$alias];

                    if (is_array($newValue)) {
                        $newValue = implode('|', $newValue);
                    }

                    if ($curValue !== $newValue && (strlen($newValue) > 0 || $overwriteWithBlank)) {
                        $field['value'] = $newValue;
                        $company->addUpdatedField($alias, $newValue, $curValue);
                    }
                }
            }
        }
        $company->setFields($fieldValues);
    }

    /**
     * Add lead to company.
     *
     * @param array|Company $companies
     * @param array|Lead    $lead
     *
     * @throws \Doctrine\ORM\ORMException
     */
    public function addLeadToCompany($companies, $lead): bool
    {
        // Primary company name to be persisted to the lead's contact company field
        $companyName        = '';
        $companyLeadAdd     = [];
        $searchForCompanies = [];

        $dateManipulated = new \DateTime();

        if (!$lead instanceof Lead) {
            $leadId = (is_array($lead) && isset($lead['id'])) ? $lead['id'] : $lead;
            $lead   = $this->em->getReference(Lead::class, $leadId);
        }

        if ($companies instanceof Company) {
            $companyLeadAdd[$companies->getId()] = $companies;
            $companies                           = [$companies->getId()];
        } elseif (!is_array($companies)) {
            $companies = [$companies];
        }

        // make sure they are ints
        foreach ($companies as &$l) {
            $l = (int) $l;

            if (!isset($companyLeadAdd[$l])) {
                $searchForCompanies[] = $l;
            }
        }

        if (!empty($searchForCompanies)) {
            $companyEntities = $this->getEntities([
                'filter' => [
                    'force' => [
                        [
                            'column' => 'comp.id',
                            'expr'   => 'in',
                            'value'  => $searchForCompanies,
                        ],
                    ],
                ],
            ]);

            foreach ($companyEntities as $company) {
                $companyLeadAdd[$company->getId()] = $company;
            }
        }

        unset($companyEntities, $searchForCompanies);

        $persistCompany = [];
        $dispatchEvents = [];
        $contactAdded   = false;
        foreach ($companies as $companyId) {
            if (!isset($companyLeadAdd[$companyId])) {
                // List no longer exists in the DB so continue to the next
                continue;
            }

            $companyLead = $this->getCompanyLeadRepository()->findOneBy(
                [
                    'lead'    => $lead,
                    'company' => $companyLeadAdd[$companyId],
                ]
            );

            if (null != $companyLead) {
                // Detach from Doctrine
                $this->em->detach($companyLead);

                continue;
            } else {
                $companyLead = new CompanyLead();
                $companyLead->setCompany($companyLeadAdd[$companyId]);
                $companyLead->setLead($lead);
                $companyLead->setDateAdded($dateManipulated);
                $contactAdded     = true;
                $persistCompany[] = $companyLead;
                $dispatchEvents[] = $companyId;

                if (!$companyName) {
                    // CompanyLeadRepository::saveEntities will set the first company of the batch as primary so
                    // use the first company name to ensure they match
                    $companyName = $companyLeadAdd[$companyId]->getName();
                }
            }
        }

        if (!empty($persistCompany)) {
            $this->getCompanyLeadRepository()->saveEntities($persistCompany);
        }

        if (!empty($companyName)) {
            // Set the contact's primary company to the first company added in the batch
            // This must happen before LeadEvents::LEAD_COMPANY_CHANGE to ensure the Lead::getCompany has the correct value
            $currentCompanyName = $lead->getCompany();
            if ($currentCompanyName !== $companyName) {
                $lead->addUpdatedField('company', $companyName)
                    ->setDateModified(new \DateTime());

                /** @var LeadRepository $leadRepository */
                $leadRepository = $this->em->getRepository(Lead::class);
                $leadRepository->saveEntity($lead);
            }
        }

        if (!empty($dispatchEvents) && $this->dispatcher->hasListeners(LeadEvents::LEAD_COMPANY_CHANGE)) {
            foreach ($dispatchEvents as $companyId) {
                $event = new LeadChangeCompanyEvent($lead, $companyLeadAdd[$companyId]);
                $this->dispatcher->dispatch($event, LeadEvents::LEAD_COMPANY_CHANGE);

                unset($event);
            }
        }

        // Clear CompanyLead entities from Doctrine memory
        $this->getCompanyLeadRepository()->detachEntities($persistCompany);

        return $contactAdded;
    }

    /**
     * Remove a lead from company.
     *
     * @throws \Doctrine\ORM\ORMException
     */
    public function removeLeadFromCompany($companies, $lead): void
    {
        if (!$lead instanceof Lead) {
            $leadId = (is_array($lead) && isset($lead['id'])) ? $lead['id'] : $lead;
            $lead   = $this->em->getReference(Lead::class, $leadId);
        }

        $companyLeadRemove = [];
        if (!$companies instanceof Company) {
            // make sure they are ints
            $searchForCompanies = [];
            foreach ($companies as &$l) {
                $l                    = (int) $l;
                $searchForCompanies[] = $l;
            }
            if (!empty($searchForCompanies)) {
                $companyEntities = $this->getEntities(
                    [
                        'filter' => [
                            'force' => [
                                [
                                    'column' => 'comp.id',
                                    'expr'   => 'in',
                                    'value'  => $searchForCompanies,
                                ],
                            ],
                        ],
                    ]
                );

                foreach ($companyEntities as $company) {
                    $companyLeadRemove[$company->getId()] = $company;
                }
            }

            unset($companyEntities, $searchForCompanies);
        } else {
            $companyLeadRemove[$companies->getId()] = $companies;

            $companies = [$companies->getId()];
        }

        if (!is_array($companies)) {
            $companies = [$companies];
        }

        $deleteCompany     = [];
        $dispatchEvents    = [];
        $deleteCompanyLead = [];

        $primaryRemoved = false;
        foreach ($companies as $companyId) {
            if (!isset($companyLeadRemove[$companyId])) {
                continue;
            }

            /** @var CompanyLead $companyLead */
            $companyLead = $this->getCompanyLeadRepository()->findOneBy(
                [
                    'lead'    => $lead,
                    'company' => $companyLeadRemove[$companyId],
                ]
            );

            if (null == $companyLead) {
                // Lead is not part of this list
                continue;
            }

            // Lead was manually added and now manually removed or was not manually added and now being removed
            $deleteCompanyLead[] = $companyLead;
            $dispatchEvents[]    = $companyId;

            // Update the Lead's primary company name if removed from the primary company
            if (!$primaryRemoved) {
                $primaryRemoved = $companyLead->getPrimary();
            }

            unset($companyLead);
        }

        if (!empty($deleteCompanyLead)) {
            $this->getCompanyLeadRepository()->deleteEntities($deleteCompanyLead);
        }

        if ($primaryRemoved) {
            // Set the contact's primary company to a remaining company or empty it out if none are left
            // This must happen before LeadEvents::LEAD_COMPANY_CHANGE to ensure the Lead::getCompany has the correct value
            $this->updateContactAfterPrimaryCompanyWasRemoved($lead);
        }

        // Clear CompanyLead entities from Doctrine memory
        $this->getCompanyLeadRepository()->detachEntities($deleteCompanyLead);

        if (!empty($dispatchEvents) && $this->dispatcher->hasListeners(LeadEvents::LEAD_COMPANY_CHANGE)) {
            foreach ($dispatchEvents as $companyId) {
                $event = new LeadChangeCompanyEvent($lead, $companyLeadRemove[$companyId], false);
                $this->dispatcher->dispatch($event, LeadEvents::LEAD_COMPANY_CHANGE);

                unset($event);
            }
        }

        unset($lead, $deleteCompany, $companies);
    }

    /**
     * Get a list of companies with names only.
     *
     * @param mixed[]|string $filter
     *
     * @return string[]
     */
    public function getSimpleLookupResults(string $type, array|string $filter = '', int $limit = 10, int $start = 0, ?string $exclude = ''): array
    {
        $valueColumn = 'id';
        if (!in_array($type, ['companyfield', 'lead.company'])) {
            return [];
        }
        if ('lead.company' === $type) {
            $column    = 'companyname';
            $filterVal = $filter;
        } else {
            if (is_array($filter)) {
                $column    = $filter[0];
                $filterVal = $filter[1];
            } else {
                $column = $filter;
            }
        }

        $expr      = new ExpressionBuilder($this->em->getConnection());
        $composite = $expr->and($expr->like("comp.$column", ':filterVar'));

        // Exclude company if $exclude is provided
        if ('' !== $exclude) {
            $composite = $expr->and(
                $composite,
                $expr->neq('comp.id', $exclude)
            );
        }

        // Validate owner permissions
        if (!$this->security->isGranted('lead:leads:viewother')) {
            $composite->with(
                $expr->or(
                    $expr->and(
                        $expr->isNull('comp.owner_id'),
                        $expr->eq('comp.created_by', (int) $this->userHelper->getUser()->getId())
                    ),
                    $expr->eq('comp.owner_id', (int) $this->userHelper->getUser()->getId())
                )
            );
        }

        return $this->getRepository()->getAjaxSimpleList($composite, ['filterVar' => $filterVal.'%', 'onlyNames' => true], $column, $valueColumn);
    }

    /**
     * Get list of entities for autopopulate fields.
     *
     * @param string         $type
     * @param mixed[]|string $filter
     * @param int            $limit
     * @param int            $start
     */
    public function getLookupResults($type, $filter = '', $limit = 10, $start = 0): array
    {
        $results = [];
        switch ($type) {
            case 'companyfield':
            case 'lead.company':
                if ('lead.company' === $type) {
                    $column    = 'companyname';
                    $filterVal = $filter;
                } else {
                    if (is_array($filter)) {
                        $column    = $filter[0];
                        $filterVal = $filter[1];
                    } else {
                        $column = $filter;
                    }
                }

                $expr      = new ExpressionBuilder($this->em->getConnection());
                $composite = $expr->and($expr->like("comp.$column", ':filterVar'));

                // Validate owner permissions
                if (!$this->security->isGranted('lead:leads:viewother')) {
                    $composite->with(
                        $expr->or(
                            $expr->and(
                                $expr->isNull('comp.owner_id'),
                                $expr->eq('comp.created_by', (int) $this->userHelper->getUser()->getId())
                            ),
                            $expr->eq('comp.owner_id', (int) $this->userHelper->getUser()->getId())
                        )
                    );
                }

                $results = $this->getRepository()->getAjaxSimpleList(
                    $composite,
                    ['filterVar' => $filterVal.'%'],
                    $column,
                    'id',
                    $limit,
                    $start
                );

                break;
        }

        return $results;
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    protected function dispatchEvent($action, &$entity, $isNew = false, Event $event = null): ?Event
    {
        if (!$entity instanceof Company) {
            throw new MethodNotAllowedHttpException(['Email']);
        }

        switch ($action) {
            case 'pre_save':
                $name = LeadEvents::COMPANY_PRE_SAVE;
                break;
            case 'post_save':
                $name = LeadEvents::COMPANY_POST_SAVE;
                break;
            case 'pre_delete':
                $name = LeadEvents::COMPANY_PRE_DELETE;
                break;
            case 'post_delete':
                $name = LeadEvents::COMPANY_POST_DELETE;
                break;
            default:
                return null;
        }

        if ($this->dispatcher->hasListeners($name)) {
            if (empty($event)) {
                $event = new CompanyEvent($entity, $isNew);
                $event->setEntityManager($this->em);
            }

            $this->dispatcher->dispatch($event, $name);

            return $event;
        } else {
            return null;
        }
    }

    /**
     * Company Merge function, will merge $mainCompany with $secCompany -  empty records from main company will be
     * filled with secondary then secondary will be deleted.
     *
     * @return mixed
     */
    public function companyMerge($mainCompany, $secCompany)
    {
        $this->logger->debug('COMPANY: Merging companies');

        $mainCompanyId = $mainCompany->getId();
        $secCompanyId  = $secCompany->getId();

        // if they are the same lead, then just return one
        if ($mainCompanyId === $secCompanyId) {
            return $mainCompany;
        }
        // merge fields
        $mergeSecFields    = $secCompany->getFields();
        $mainCompanyFields = $mainCompany->getFields();
        foreach ($mergeSecFields as $group => $groupFields) {
            foreach ($groupFields as $alias => $details) {
                // fill in empty main company fields with secondary company fields
                if (empty($mainCompanyFields[$group][$alias]['value']) && !empty($details['value'])) {
                    $mainCompany->addUpdatedField($alias, $details['value']);
                    $this->logger->debug('Company: Updated '.$alias.' = '.$details['value']);
                }
            }
        }

        // merge owner
        $mainCompanyOwner = $mainCompany->getOwner();
        $secCompanyOwner  = $secCompany->getOwner();

        if (null === $mainCompanyOwner && null !== $secCompanyOwner) {
            $mainCompany->setOwner($secCompanyOwner);
        }

        // move all leads from secondary company to main company
        $companyLeadRepo = $this->getCompanyLeadRepository();
        $secCompanyLeads = $companyLeadRepo->getCompanyLeads($secCompanyId);

        foreach ($secCompanyLeads as $lead) {
            $this->addLeadToCompany($mainCompany->getId(), $lead['lead_id']);
        }

        $event = new CompanyMergeEvent($mainCompany, $secCompany);
        $this->dispatcher->dispatch($event, LeadEvents::COMPANY_PRE_MERGE);

        // save the updated company
        $this->saveEntity($mainCompany, false);

        $this->dispatcher->dispatch($event, LeadEvents::COMPANY_POST_MERGE);

        // delete the old company
        $this->deleteEntity($secCompany);

        // return the merged company
        return $mainCompany;
    }

    /**
     * @return array
     */
    public function fetchCompanyFields()
    {
        if (empty($this->companyFields)) {
            $this->companyFields = $this->leadFieldModel->getEntities(
                [
                    'filter' => [
                        'force' => [
                            [
                                'column' => 'f.isPublished',
                                'expr'   => 'eq',
                                'value'  => true,
                            ],
                            [
                                'column' => 'f.object',
                                'expr'   => 'eq',
                                'value'  => 'company',
                            ],
                        ],
                    ],
                    'hydration_mode' => 'HYDRATE_ARRAY',
                    'result_cache'   => new ResultCacheOptions(LeadField::CACHE_NAMESPACE),
                ]
            );
        }

        return $this->companyFields;
    }

    public function extractCompanyDataFromImport(array &$mappedFields, array &$data): array
    {
        $companyData    = [];
        $companyFields  = [];
        $internalFields = $this->fetchCompanyFields();

        if (!isset($mappedFields['companyname']) && isset($mappedFields['company'])) {
            $mappedFields['companyname'] = $mappedFields['company'];

            unset($mappedFields['company']);
        }

        foreach ($mappedFields as $mauticField => $importField) {
            foreach ($internalFields as $entityField) {
                if ($entityField['alias'] === $mauticField) {
                    $companyData[$importField]   = $data[$importField];
                    $companyFields[$mauticField] = $importField;
                    unset($data[$importField]);
                    unset($mappedFields[$mauticField]);
                    break;
                }
            }
        }

        return [$companyFields, $companyData];
    }

    /**
     * @param array<string>   $fields
     * @param array<mixed>    $data
     * @param int|string|null $owner
     */
    public function import(array $fields, array $data, $owner = null, bool $skipIfExists = false): bool
    {
        $company = $this->importCompany($fields, $data, $owner, false, $skipIfExists);

        if (null === $company) {
            throw new \Exception($this->translator->trans('mautic.lead.import.unique_field_not_exist', [], 'flashes'));
        }

        $merged = !$company->isNew();

        $this->saveEntity($company);

        return $merged;
    }

    /**
     * @param array $fields
     * @param array $data
     *
     * @return Company|null
     *
     * @throws \Exception
     */
    public function importCompany($fields, $data, $owner = null, $persist = true, $skipIfExists = false)
    {
        try {
            $duplicateCompanies = $this->companyDeduper->checkForDuplicateCompanies($this->getFieldData($fields, $data));
        } catch (UniqueFieldNotFoundException) {
            return null;
        }

        $company = !empty($duplicateCompanies) ? $duplicateCompanies[0] : new Company();
        \assert($company instanceof Company);

        if (!$company->isNew() && !$this->existDataForUpdate($fields, $data)) {
            return $company;
        }

        if ($company->isNew()) {
            $granted = $this->security->isGranted('lead:leads:create');
        } else {
            $granted = $this->security->hasEntityAccess(
                'lead:leads:editown',
                'lead:leads:editother',
                $company->getPermissionUser()
            );
        }

        if (!$granted) {
            throw new \Exception($this->translator->trans('mautic.lead.import.error.unauthorized', ['%username%' => $this->userHelper->getUser()->getUsername()]));
        }

        if (!empty($fields['dateAdded']) && !empty($data[$fields['dateAdded']])) {
            $dateAdded = new DateTimeHelper($data[$fields['dateAdded']]);
            $company->setDateAdded($dateAdded->getUtcDateTime());
        }
        unset($fields['dateAdded']);

        if (!empty($fields['dateModified']) && !empty($data[$fields['dateModified']])) {
            $dateModified = new DateTimeHelper($data[$fields['dateModified']]);
            $company->setDateModified($dateModified->getUtcDateTime());
        }
        unset($fields['dateModified']);

        if (!empty($fields['createdByUser']) && !empty($data[$fields['createdByUser']])) {
            $userRepo      = $this->em->getRepository(User::class);
            $createdByUser = $userRepo->findByIdentifier($data[$fields['createdByUser']]);
            if (null !== $createdByUser) {
                $company->setCreatedBy($createdByUser);
            }
        }
        unset($fields['createdByUser']);

        if (!empty($fields['modifiedByUser']) && !empty($data[$fields['modifiedByUser']])) {
            $userRepo       = $this->em->getRepository(User::class);
            $modifiedByUser = $userRepo->findByIdentifier($data[$fields['modifiedByUser']]);
            if (null !== $modifiedByUser) {
                $company->setModifiedBy($modifiedByUser);
            }
        }
        unset($fields['modifiedByUser']);

        if (null !== $owner) {
            $company->setOwner($this->em->getReference(User::class, $owner));
        }

        $fieldData = $this->getFieldData($fields, $data);

        $fieldErrors = [];

        foreach ($this->fetchCompanyFields() as $entityField) {
            // Skip If value already exists
            if ($skipIfExists && !$company->isNew() && !empty($company->getProfileFields()[$entityField['alias']])) {
                unset($fieldData[$entityField['alias']]);
                continue;
            }

            if (isset($fieldData[$entityField['alias']])) {
                $fieldData[$entityField['alias']] = InputHelper::_($fieldData[$entityField['alias']], 'string');

                if ('NULL' === $fieldData[$entityField['alias']]) {
                    $fieldData[$entityField['alias']] = null;

                    continue;
                }

                try {
                    $this->cleanFields($fieldData, $entityField);
                } catch (\Exception $exception) {
                    $fieldErrors[] = $entityField['alias'].': '.$exception->getMessage();
                }

                // Skip if the value is in the CSV row
                continue;
            } elseif ($company->isNew() && $entityField['defaultValue']) {
                // Fill in the default value if any
                $fieldData[$entityField['alias']] = ('multiselect' === $entityField['type']) ? [$entityField['defaultValue']] : $entityField['defaultValue'];
            }
        }

        if ($fieldErrors) {
            $fieldErrors = implode("\n", $fieldErrors);

            throw new \Exception($fieldErrors);
        }

        // All clear
        foreach ($fieldData as $field => $value) {
            $company->addUpdatedField($field, $value);
        }

        if ($persist) {
            $this->saveEntity($company);
        }

        return $company;
    }

    /**
     * @return mixed[]
     */
    public function checkForDuplicateCompanies(array $queryFields): array
    {
        return $this->companyDeduper->checkForDuplicateCompanies($queryFields);
    }

    /**
     * @param array $fields
     * @param array $data
     */
    protected function getFieldData($fields, $data): array
    {
        // Set profile data using the form so that values are validated
        $fieldData = [];
        foreach ($fields as $importField => $entityField) {
            // Prevent overwriting existing data with empty data
            if (array_key_exists($importField, $data) && !is_null($data[$importField]) && '' != $data[$importField]) {
                $fieldData[$entityField] = $data[$importField];
            }
        }

        return $fieldData;
    }

    private function updateContactAfterPrimaryCompanyWasRemoved(Lead $lead): void
    {
        $primaryCompanyName = '';
        $companyLead        = null;
        $newPrimaryCompany  = null;

        // Find another company to make primary if applicable
        $leadCompanies = $this->getCompanyLeadRepository()->getCompaniesByLeadId($lead->getId());
        if (count($leadCompanies)) {
            $newPrimaryArray   = reset($leadCompanies);
            $newPrimaryCompany = $this->em->getReference(Company::class, $newPrimaryArray['company_id']);

            /** @var CompanyLead $companyLead */
            $companyLead = $this->getCompanyLeadRepository()->findOneBy(
                [
                    'lead'    => $lead,
                    'company' => $newPrimaryCompany,
                ]
            );

            $companyLead->setPrimary(true);
            $this->getCompanyLeadRepository()->saveEntity($companyLead);

            $primaryCompanyName = $newPrimaryArray['companyname'];
        }

        $lead->addUpdatedField('company', $primaryCompanyName)
            ->setDateModified(new \DateTime());
        $this->em->getRepository(Lead::class)->saveEntity($lead);

        if (null !== $newPrimaryCompany) {
            $this->getCompanyLeadRepository()->detachEntity($newPrimaryCompany);
        }

        if (null !== $companyLead) {
            $this->getCompanyLeadRepository()->detachEntity($companyLead);
        }
    }

    /**
     * @param mixed[] $fields
     * @param mixed[] $data
     */
    private function existDataForUpdate(array $fields, array $data): bool
    {
        $updateData = $this->getFieldData($fields, $data);
        $uniqueData = $this->companyDeduper->getUniqueData($updateData);

        return (bool) array_diff_assoc($updateData, $uniqueData);
    }
}
