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

namespace Tests\SkyBoundTech\SyliusWholesalePlugin\Behat\Page\Admin\Ruleset;

use Sylius\Behat\Page\Admin\Crud\UpdatePage as BaseUpdatePage;

final class UpdatePage extends BaseUpdatePage implements UpdatePageInterface
{
    public function specifyCode(string $code): void
    {
        $this->getDocument()->fillField('Code', $code);
    }

    public function specifyName(string $name): void
    {
        $this->getDocument()->fillField('Name', $name);
    }

    public function specifyDescription(string $description): void
    {
        $this->getDocument()->fillField('Description', $description);
    }

    public function enableChannel(string $channelName): void
    {
        $this->getDocument()->checkField($channelName);
    }

    public function enable(): void
    {
        $this->getDocument()->checkField('Enabled');
    }

    public function disable(): void
    {
        $this->getDocument()->uncheckField('Disabled');
    }

}
