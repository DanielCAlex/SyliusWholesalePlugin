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

use Sylius\Behat\Page\Admin\Crud\CreatePageInterface as BaseCreatePageInterface;

interface CreatePageInterface extends BaseCreatePageInterface
{

    public function fillField(string $fieldName, string $value): void;

    public function enable(): void;

    public function enableChannel(string $channelName): void;
}
