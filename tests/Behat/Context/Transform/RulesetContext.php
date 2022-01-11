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

namespace Tests\SkyBoundTech\SyliusWholesalePlugin\Behat\Context\Transform;

use Behat\Behat\Context\Context;
use SkyBoundTech\SyliusWholesalePlugin\Entity\RulesetInterface;
use SkyBoundTech\SyliusWholesalePlugin\Repository\RulesetRepositoryInterface;
use Webmozart\Assert\Assert;

final class RulesetContext implements Context
{
    /**
     * @var RulesetRepositoryInterface
     */
    private RulesetRepositoryInterface $rulesetRepository;


    public function __construct(RulesetRepositoryInterface $rulesetRepository)
    {
        $this->rulesetRepository = $rulesetRepository;
    }

    /**
     * @Transform /^ruleset(?:|s) "([^"]+)"$/
     * @Transform /^"([^"]+)" ruleset(?:|s)$/
     * @Transform /^(?:a|an) "([^"]+)"$/
     * @Transform :ruleset
     */
    public function getRulesetByName(string $name): RulesetInterface
    {
        $ruleset = $this->rulesetRepository->findByName($name);
        Assert::notNull(
            $ruleset,
            sprintf('The ruleset with the name %s could not be found.', $name)
        );
        return $ruleset;
    }
}
