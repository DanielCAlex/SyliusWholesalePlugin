<?php
declare(strict_types=1);

/*
 * This file was created by a developer at SkyBound Tech.
 * @author Daniel Alexandre <daniel.alexandre@skyboundtech.co>
 *
 * (c) SkyBound Tech
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace SkyBoundTech\SyliusWholesalePlugin\Repository;


use SkyBoundTech\SyliusWholesalePlugin\Entity\RulesetInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

interface RulesetRepositoryInterface extends RepositoryInterface
{
    /**
     * @param string $name
     * @return RulesetInterface
     */
    public function findByName(string $name): ?RulesetInterface;
}
