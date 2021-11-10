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

use Sylius\Behat\Page\Admin\Crud\CreatePage as BaseCreatePage;

class CreatePage extends BaseCreatePage implements CreatePageInterface
{
    public function fillName(string $name): void
    {
        $this->getDocument()->selectFieldOption('Name', $name);
    }

    public function fillDescription(string $description): void
    {
        $this->getDocument()->selectFieldOption('Description', $description);
    }

    public function enable(): void
    {
        $this->getDocument()->checkField('enabled');
    }
}
