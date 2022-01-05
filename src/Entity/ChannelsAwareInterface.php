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


interface ChannelsAwareInterface
{
    /**
     * @return Collection|ChannelInterface[]
     *
     * @psalm-return Collection<array-key, ChannelInterface>
     */
    public function getChannels(): Collection;

    public function hasChannel(ChannelInterface $channel): bool;

    public function addChannel(ChannelInterface $channel): void;

    public function removeChannel(ChannelInterface $channel): void;
}
