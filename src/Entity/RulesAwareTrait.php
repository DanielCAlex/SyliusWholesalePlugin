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
use SkyBoundTech\SyliusWholesalePlugin\Entity\RuleInterface;

trait RulesAwareTrait
{
    /** @var Collection|RuleInterface[] */
    protected $rules;

    public function initializeRulesCollection(): void
    {
        $this->rules = new ArrayCollection();
    }

    public function getRules(): Collection
    {
        return $this->rules;
    }

    public function addRule(RuleInterface $rule): void
    {
        if (!$this->hasRule($rule)) {
            $this->rules->add($rule);
        }
    }

    public function hasRule(RuleInterface $rule): bool
    {
        return $this->rules->contains($rule);
    }

    public function removeRule(RuleInterface $rule): void
    {
        if ($this->hasRule($rule)) {
            $this->rules->removeElement($rule);
        }
    }
}
