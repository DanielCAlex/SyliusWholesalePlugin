<?php

declare(strict_types=1);

namespace SkyBoundtech\SyliusWholesalePlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('skyboundtech_sylius_wholesale_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
