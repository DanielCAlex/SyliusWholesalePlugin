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


use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;

interface RulesetInterface extends ResourceInterface, ChannelsAwareInterface, TranslatableInterface
{
    public function getId(): ?int;

    public function isEnabled(): bool;

    public function setEnabled(bool $enabled): void;
}
