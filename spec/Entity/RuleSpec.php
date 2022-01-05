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

namespace spec\SkyBoundTech\SyliusWholesalePlugin;

use PhpSpec\ObjectBehavior;
use SkyBoundTech\SyliusWholesalePlugin\Entity\RuleInterface;
use SkyBoundTech\SyliusWholesalePlugin\Entity\RulesetInterface;
use SkyBoundTech\SyliusWholesalePlugin\Entity\ProductVariantInterface;

final class RuleSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(RuleInterface::class);
    }

    function it_toggles(): void
    {
        $this->setEnabled(true);
        $this->isEnabled()->shouldNotReturn(false);
        $this->isEnabled()->shouldReturn(true);

        $this->setEnabled(false);
        $this->isEnabled()->shouldNotReturn(true);
        $this->isEnabled()->shouldReturn(false);
    }

    function it_has_a_ruleset(RulesetInterface $firstRuleset, RulesetInterface $secondRuleset): void
    {
        $firstRuleset->addRule($this);
        $this->getRuleset->shouldReturn($firstRuleset);
    }

    function it_associates_product_variants(
        ProductVariantInterface $productVariantOne,
        ProductVariantInterface $productVariantTwo
    ): void {
        $this->addProductVariant($productVariantOne);
        $this->hasProductVariant($productVariantOne)->shouldReturn(true);

        $this->addProductVariant($productVariantTwo);
        $this->hasProductVariant($productVariantTwo)->shouldReturn(true);
        $this->removeProductVariant($productVariantTwo);
        $this->hasProductVariant($productVariantTwo)->shouldReturn(false);
    }
}
