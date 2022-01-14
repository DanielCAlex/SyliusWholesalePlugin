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

namespace SkyBoundTech\SyliusWholesalePlugin\Entity;

/** @psalm-suppress PropertyNotSetInConstructor */
final class Ruleset implements RulesetInterface
{
    use ChannelsAwareTrait;

    /** @var int|null */
    protected ?int $id;
    /** @var string|null */
    protected ?string $name;
    /** @var string|null */
    protected ?string $description;
    /** @var boolean */
    protected bool $enabled;

    public function __construct()
    {
        $this->initializeChannelsCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }


    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }


}
