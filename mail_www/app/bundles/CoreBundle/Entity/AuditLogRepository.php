<?php

namespace Mautic\CoreBundle\Entity;

use Doctrine\Common\Collections\Order;
use Doctrine\DBAL\Exception as DBALException;
use Mautic\CoreBundle\Helper\DateTimeHelper;
use Mautic\LeadBundle\Entity\Lead;
use Mautic\LeadBundle\Entity\TimelineTrait;
use Mautic\UserBundle\Entity\User;

/**
 * @extends CommonRepository<AuditLog>
 */
class AuditLogRepository extends CommonRepository
{
    use TimelineTrait;

    /**
     * @return int
     */
    public function getAuditLogsCount(Lead $lead, array $filters = null)
    {
        $query = $this->_em->getConnection()->createQueryBuilder()
            ->from(MAUTIC_TABLE_PREFIX.'audit_log', 'al')
            ->select('count(*)')
            ->where('al.object = \'lead\'')
            ->andWhere('al.object_id = :id')
            ->setParameter('id', $lead->getId());

        if (is_array($filters) && !empty($filters['search'])) {
            $query->andWhere('al.details LIKE :search')
                ->setParameter('search', '%'.$filters['search'].'%');
        }

        if (is_array($filters) && !empty($filters['includeEvents'])) {
            $includeList = "'".implode("','", $filters['includeEvents'])."'";
            $query->andWhere('al.action in ('.$includeList.')');
        }

        if (is_array($filters) && !empty($filters['excludeEvents'])) {
            $excludeList = "'".implode("','", $filters['excludeEvents'])."'";
            $query->andWhere('al.action not in ('.$excludeList.')');
        }

        return $query->executeQuery()->fetchOne();
    }

    /**
     * @param int $page
     * @param int $limit
     *
     * @return array
     */
    public function getAuditLogs(Lead $lead, array $filters = null, array $orderBy = null, $page = 1, $limit = 25)
    {
        $query = $this->createQueryBuilder('al')
            ->select('al.userName, al.userId, al.bundle, al.object, al.objectId, al.action, al.details, al.dateAdded, al.ipAddress')
            ->where('al.bundle = \'lead\'')
            ->andWhere('al.object = \'lead\'')
            ->andWhere('al.objectId = :id')
            ->setParameter('id', $lead->getId());

        if (is_array($filters) && !empty($filters['search'])) {
            $query->andWhere('al.details LIKE :search')
                ->setParameter('search', '%'.$filters['search'].'%');
        }

        if (is_array($filters) && !empty($filters['includeEvents'])) {
            $includeList = "'".implode("','", $filters['includeEvents'])."'";
            $query->andWhere('al.action in ('.$includeList.')');
        }

        if (is_array($filters) && !empty($filters['excludeEvents'])) {
            $excludeList = "'".implode("','", $filters['excludeEvents'])."'";
            $query->andWhere('al.action not in ('.$excludeList.')');
        }

        if (0 === $page) {
            $page = 1;
        }
        $query->setFirstResult(($page - 1) * $limit);
        $query->setMaxResults($limit);

        if (is_array($orderBy)) {
            $orderdir = 'ASC';
            $order    = 'id';
            if (isset($orderBy[0])) {
                $order = $orderBy[0];
            }
            if (isset($orderBy[1])) {
                $orderdir = $orderBy[1];
            }
            if (!str_starts_with($order, 'al.')) {
                $order = 'al.'.$order;
            }

            $query->orderBy($order, $orderdir);
        }

        return $query->getQuery()->getArrayResult();
    }

    /**
     * @return array
     */
    public function getAuditLogsForLeads(array $listOfContacts, array $filters = null, array $orderBy = null, $dateAdded = null)
    {
        $query = $this->createQueryBuilder('al')
            ->select('al.userName, al.userId, al.bundle, al.object, al.objectId, al.action, al.details, al.dateAdded, al.ipAddress')
            ->where('al.bundle = \'lead\'')
            ->andWhere('al.object = \'lead\'');
        $query
            ->andWhere($query->expr()->in('al.objectId', $listOfContacts));

        if (is_array($filters) && !empty($filters['search'])) {
            $query->andWhere('al.details LIKE :search')
                ->setParameter('search', '%'.$filters['search'].'%');
        }

        if (is_array($filters) && !empty($filters['includeEvents'])) {
            $includeList = "'".implode("','", $filters['includeEvents'])."'";
            $query->andWhere('al.action in ('.$includeList.')');
        }

        if ($dateAdded) {
            $query->andWhere($query->expr()->gte('al.dateAdded', ':dateAdded'))->setParameter('dateAdded', $dateAdded);
        }

        if (is_array($filters) && !empty($filters['excludeEvents'])) {
            $excludeList = "'".implode("','", $filters['excludeEvents'])."'";
            $query->andWhere('al.action not in ('.$excludeList.')');
        }

        if (is_array($orderBy)) {
            $orderdir = 'DESC';
            $order    = 'id';
            if (isset($orderBy[0])) {
                $order = $orderBy[0];
            }
            if (isset($orderBy[1])) {
                $orderdir = $orderBy[1];
            }
            if (!str_starts_with($order, 'al.')) {
                $order = 'al.'.$order;
            }

            $query->orderBy($order, $orderdir);
        }

        return $query->getQuery()->getArrayResult();
    }

    /**
     * Get array of objects which belongs to the object.
     *
     * @param string|null $object
     * @param string|null $id
     * @param int         $limit
     *
     * @return array
     */
    public function getLogForObject($object = null, $id = null, $limit = 10, $afterDate = null, $bundle = null)
    {
        $query = $this->createQueryBuilder('al')
            ->select('al.userName, al.userId, al.bundle, al.object, al.objectId, al.action, al.details, al.dateAdded, al.ipAddress')
            ->where('al.object != :category')
            ->setParameter('category', 'category');

        if (null != $object && null !== $id) {
            $query
                ->andWhere('al.object = :object')
                ->andWhere('al.objectId = :id')
                ->setParameter('object', $object)
                ->setParameter('id', $id);
        }

        if ($bundle) {
            $query->andWhere('al.bundle = :bundle')
                ->setParameter('bundle', $bundle);
        }

        // Prevent InnoDB shared IDs
        if ($afterDate) {
            $query->andWhere(
                $query->expr()->gte('al.dateAdded', ':date')
            )
                ->setParameter('date', $afterDate);
        }

        $query->orderBy('al.dateAdded', Order::Descending->value)
            ->setMaxResults($limit);

        return $query->getQuery()->getArrayResult();
    }

    /**
     * @return array
     */
    public function getLeadIpLogs(Lead $lead = null, array $options = [])
    {
        $qb  = $this->getEntityManager()->getConnection()->createQueryBuilder();
        $sqb = $this->getEntityManager()->getConnection()->createQueryBuilder();

        $sqb
            ->select('MAX(l.date_added) as date_added, MIN(l.id) as id, l.ip_address, l.object_id as lead_id')
            ->from(MAUTIC_TABLE_PREFIX.'audit_log', 'l')
            ->where(
                $sqb->expr()->and(
                    $sqb->expr()->eq('l.bundle', $sqb->expr()->literal('lead')),
                    $sqb->expr()->eq('l.object', $sqb->expr()->literal('lead')),
                    $sqb->expr()->eq('l.action', $sqb->expr()->literal('ipadded'))
                )
            )
            ->groupBy('l.ip_address');

        if ($lead instanceof Lead) {
            $dateTimeFormat = 'Y-m-d H:i:s';

            // Just a check to ensure reused IDs (happens with innodb) doesn't infect data
            $dateTimeHelper = new DateTimeHelper($lead->getDateAdded(), $dateTimeFormat, 'local');

            $sqb->andWhere(
                $sqb->expr()->and(
                    $sqb->expr()->eq('l.object_id', $lead->getId()),
                    $sqb->expr()->gte('l.date_added', $sqb->expr()->literal($dateTimeHelper->toUtcString($dateTimeFormat)))
                )
            );
        }

        $qb
            ->select('ip.date_added, ip.ip_address, ip.lead_id, ip.id')
            ->from(sprintf('(%s)', $sqb->getSQL()), 'ip');

        return $this->getTimelineResults($qb, $options, 'ip.ip_address', 'ip.date_added', [], ['date_added']);
    }

    /**
     * @return array<mixed>
     */
    public function getLogsForUser(User $user, int $limit = 15): array
    {
        $query = $this->createQueryBuilder('al')
            ->select('al.userName, al.userId, al.bundle, al.object,
            al.objectId, al.action, al.details, al.dateAdded, al.ipAddress')
            ->where('al.bundle = \'user\'')
            ->andWhere('al.userId = :user_id')
            ->setParameter('user_id', $user->getId())
            ->orderBy('al.dateAdded', 'DESC')
            ->setMaxResults($limit);

        return $query->getQuery()->getArrayResult();
    }

    /**
     * @throws DBALException
     */
    public function anonymizeAllIpAddress(): int
    {
        $table_name = $this->getTableName();
        $sql        = "UPDATE {$table_name} SET ip_address = '*.*.*.*' WHERE ip_address != '*.*.*.*'";
        $conn       = $this->getEntityManager()->getConnection();

        return $conn->executeQuery($sql)->rowCount();
    }
}
