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

namespace Tests\SkyBoundTech\SyliusWholesalePlugin\Behat\Context\Setup;

use Behat\Behat\Context\Context;
use SkyBoundTech\SyliusWholesalePlugin\Entity\ChannelInterface;
use SkyBoundTech\SyliusWholesalePlugin\Entity\RulesetInterface;
use SkyBoundTech\SyliusWholesalePlugin\Repository\RulesetRepositoryInterface;
use Sylius\Behat\Service\SharedStorageInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

final class RulesetContext implements Context
{


    /** @var SharedStorageInterface */
    private $sharedStorage;

    /** @var FactoryInterface */
    private $blockFactory;

    /** @var RulesetRepositoryInterface */
    private $rulesetRepository;

    /** @var FactoryInterface */
    private $rulesetFactory;

    public function __construct(
        SharedStorageInterface $sharedStorage,
        RulesetRepositoryInterface $rulesetRepository,
        FactoryInterface $rulesetFactory
    ) {
        $this->sharedStorage = $sharedStorage;
        $this->rulesetRepository = $rulesetRepository;
        $this->rulesetFactory = $rulesetFactory;
    }


    /**
     * @Given there is a ruleset in the store
     */
    public function thereIsARuleset(): void
    {
        $ruleset = $this->createRuleset(null, null, null, null);
        $this->saveRuleset($ruleset);
    }


    public function createRuleset(
        ?string $code,
        ?string $name,
        ?string $description,
        ?ChannelInterface $channel
    ): RulesetInterface {
        /** @var RulesetInterface $ruleset */
        $ruleset = $this->rulesetFactory->createNew();
        $ruleset->setCurrentLocale('en_US');

        if (null === $channel && $this->sharedStorage->has('channel')) {
            $channel = $this->sharedStorage->get('channel');
        }

        if (null === $code) {
            $code = ('generated_ruleset');
        }

        if (null === $name) {
            $name = 'Generated Ruleset';
        }

        if (null === $description) {
            $description = 'generated_description';
        }

        $ruleset->setCode($code);
        $ruleset->setName($name);
        $ruleset->setDescription($description);
        $ruleset->setEnabled(true);
        $ruleset->addChannel($channel);

        return $ruleset;
    }

    public function saveRuleset(RulesetInterface $ruleset): void
    {
        $this->rulesetRepository->add($ruleset);
        $this->sharedStorage->set('ruleset', $ruleset);
    }
}
