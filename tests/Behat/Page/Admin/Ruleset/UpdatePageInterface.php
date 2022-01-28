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


namespace Tests\SkyBoundTech\SyliusWholesalePlugin\Behat\Page\Admin\Ruleset;
use Sylius\Behat\Page\Admin\Crud\UpdatePageInterface as BaseUpdatePageInterface;

interface UpdatePageInterface extends BaseUpdatePageInterface
{
    public function specifyCode(string $code): void;

    public function specifyName(string $name): void;

    public function specifyDescription(string $description): void;

    public function enableChannel(string $channelName): void;

    public function enable(): void;

    public function disable(): void;
}
