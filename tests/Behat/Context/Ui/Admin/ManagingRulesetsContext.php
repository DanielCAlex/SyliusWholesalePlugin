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

namespace Tests\SkyBoundTech\SyliusWholesalePlugin\Behat\Context\Ui\Admin;


use Behat\Behat\Context\Context;
use Sylius\Behat\Client\ResponseCheckerInterface;
use Tests\SkyBoundTech\SyliusWholesalePlugin\Behat\Page\Admin\Ruleset\CreatePageInterface;
use Tests\SkyBoundTech\SyliusWholesalePlugin\Behat\Page\Admin\Ruleset\IndexPageInterface;
use Webmozart\Assert\Assert;


final class ManagingRulesetsContext implements Context
{
    /** @var CreatePageInterface */
    private $createRulesetPage;

    /** @var IndexPageInterface */
    private $indexPage;

    /** @var ResponseCheckerInterface */
    private $responseChecker;

    /**
     * @param CreatePageInterface $createRulesetPage
     * @param ResponseCheckerInterface $responseChecker
     */
    public function __construct(CreatePageInterface $createRulesetPage, ResponseCheckerInterface $responseChecker, IndexPageInterface $indexPage)
    {
        $this->createRulesetPage = $createRulesetPage;
        $this->responseChecker = $responseChecker;
        $this->indexPage = $indexPage;
    }

    /**
     * @Given I want to create a new ruleset
     */
    public function iWantToCreateANewRuleset()
    {
        $this->createRulesetPage->open();
    }

    /**
     * @Given I specify its name as :name
     */
    public function iSpecifyItsNameAs($name)
    {
        $this->createRulesetPage->fillField('Name', $name);
    }

    /**
     * @Given I specify its description as :description
     */
    public function iSpecifyItsDescriptionAs($description)
    {
        $this->createRulesetPage->fillField('Description', $description);
    }

    /**
     * @Given I enable it
     */
    public function iEnableIt()
    {
        $this->createRulesetPage->enable();
    }

    /**
     * @Given I enable the channel :channelName
     */
    public function iEnableTheChannel($channelName)
    {
        $this->createRulesetPage->enableChannel($channelName);
    }

    /**
     * @Given I add it
     */
    public function iAddIt()
    {
        $this->createRulesetPage->create();
    }

    public function iShouldBeNotifiedThatItHasBeenSuccessfullyCreated(): void
    {
        Assert::true(
            $this->responseChecker->isCreationSuccessful($this->client->getLastResponse()),
            'Ruleset could not be created'
        );
    }

    /**
     * @Then the ruleset :rulesetName should appear in the registry
     */
    public function theRulesetShouldAppearInTheRegistry($rulesetName)
    {
        $this->indexPage->open();
        Assert::true($this->indexPage->isSingleResourceOnPage(['name' => $rulesetName]));;
    }
}
