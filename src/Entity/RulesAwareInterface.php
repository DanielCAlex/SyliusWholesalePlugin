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


namespace SkyBoundTech\SyliusWholesalePlugin\Entity;

use Doctrine\Common\Collections\Collection;
use SkyBoundTech\SyliusWholesalePlugin\Entity\RuleInterface;

interface RulesAwareInterface
{
    /**
     * @return Collection|RuleInterface[]
     *
     * @psalm-return Collection<array-key, RuleInterface>
     */
    public function getRules(): Collection;

    public function hasRule(RuleInterface $ruleset): bool;

    public function addRule(RuleInterface $ruleset): void;

    public function removeRule(RuleInterface $ruleset): void;
}
