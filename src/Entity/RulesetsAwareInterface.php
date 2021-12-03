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
use SkyBoundTech\SyliusWholesalePlugin\Entity\RulesetInterface;

interface RulesetsAwareInterface
{
    /**
     * @return CollectioN|RulesetInterface[]
     *
     * @psalm-return Collection<array-key, RulesetInterface>
     */
    public function getRulesets(): Collection;

    public function hasRuleset(RulesetInterface $ruleset): bool;

    public function addRuleset(RulesetInterface $ruleset): void;

    public function removeRuleset(RulesetInterface $ruleset): void;
}
