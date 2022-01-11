<?php
/*
 * This file was created by a developer at SkyBound Tech.
 * @author Daniel Alexandre <daniel.alexandre@skyboundtech.co>
 *
 * (c) SkyBound Tech
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SkyBoundTech\SyliusWholesalePlugin\Repository;

use SkyBoundTech\SyliusWholesalePlugin\Entity\RulesetInterface;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

final class RulesetRepository extends EntityRepository implements RulesetRepositoryInterface
{
    public function findByName(string $name): ?RulesetInterface
    {
        return $this->createQueryBuilder('r')
            ->where('r.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
