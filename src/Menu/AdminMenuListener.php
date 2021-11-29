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

namespace SkyBoundTech\SyliusWholesalePlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

final class AdminMenuListener
{
    /** @var UrlGeneratorInterface */
    private $url;

    /**
     * @param UrlGeneratorInterface $url
     */
    public function __construct(UrlGeneratorInterface $url)
    {
        $this->url = $url;
    }

    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $newSubmenu = $menu
            ->addChild('wholesale')
            ->setLabel('Wholesale');

        $newSubmenu
            ->addChild('ruleset', ['uri' => $this->url->generate('skyboundtech_admin_wholesale_ruleset_index')])
            ->setLabel('Wholesale Rulesets');
    }
}
