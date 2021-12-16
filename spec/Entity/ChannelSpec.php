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

namespace spec\SkyBoundTech\SyliusWholesalePlugin\Entity;

use PhpSpec\ObjectBehavior;
use SkyBoundTech\SyliusWholesalePlugin\Entity\Channel;
use SkyBoundTech\SyliusWholesalePlugin\Entity\ChannelInterface;
use SkyBoundTech\SyliusWholesalePlugin\Entity\RulesetInterface;

final class ChannelSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(Channel::class);
    }

    function it_implements_channel_interface(): void
    {
        $this->shouldHaveType(ChannelInterface::class);
    }

    function it_associates_rulesets(RulesetInterface $rulesetOne, RulesetInterface $rulesetTwo, RulesetInterface $rulesetThree): void
    {
        $this->addRuleset($rulesetOne);
        $this->hasRuleset($rulesetOne)->shouldReturn(true);

        $this->addRuleset($rulesetTwo);
        $this->hasRuleset($rulesetTwo)->shouldReturn(true);

        $this->removeRuleset($rulesetTwo);
        $this->hasRuleset($rulesetTwo)->shouldReturn(false);

        $this->hasRuleset($rulesetThree)->shouldReturn(false);

    }
}
