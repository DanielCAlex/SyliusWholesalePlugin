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


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use SkyBoundTech\SyliusWholesalePlugin\Entity\RulesetInterface;

trait RulesetsAwareTrait
{
    /** @var Collection|RulesetInterface[] */
    protected $rulesets;

    public function initializeRulesetsCollection(): void
    {
        $this->rulesets = new ArrayCollection();
    }

    public function getRulesets(): Collection
    {
        return $this->rulesets;
    }

    public function addRuleset(RulesetInterface $ruleset): void
    {
        if (!$this->hasRuleset($ruleset)) {
            $this->rulesets->add($ruleset);
        }
    }

    public function hasRuleset(RulesetInterface $ruleset): bool
    {
        return $this->rulesets->contains($ruleset);
    }

    public function removeRuleset(RulesetInterface $ruleset): void
    {
        if ($this->hasRuleset($ruleset)) {
            $this->rulesets->removeElement($ruleset);
        }
    }
}
