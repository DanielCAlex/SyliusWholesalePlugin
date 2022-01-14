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

interface RulesetInterface extends ResourceInterface, ChannelsAwareInterface
{
    public function getId(): ?int;

    public function getName(): ?string;

    public function setName(string $name): void;

    public function getDescription(): ?string;

    public function setDescription(string $description): void;

    public function isEnabled(): bool;

    public function setEnabled(bool $enabled): void;
}
