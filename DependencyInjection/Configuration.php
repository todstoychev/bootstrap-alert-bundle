<?php

namespace Todstoychev\BootstrapAlertBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('todstoychev_bootstrap_alert');

        $rootNode->children()
            ->booleanNode('use_close_button')
                ->defaultTrue()
                ->end()
            ->booleanNode('use_icons')
                ->defaultTrue()
                ->end()
            ->arrayNode('icons')
                ->addDefaultsIfNotSett()
                ->children()
                    ->scalarNode('error')
                        ->defaultValue('glyphicon glyphicon-remove-sign')
                        ->canNotBeEmpty()
                        ->end()
                    ->scalarNode('error')
                        ->defaultValue('glyphicon glyphicon-exclamation-sign')
                        ->canNotBeEmpty()
                        ->end()
                    ->scalarNode('info')
                        ->defaultValue('glyphicon glyphicon-info-sign')
                        ->canNotBeEmpty()
                        ->end()
                    ->scalarNode('error')
                        ->defaultValue('glyphicon glyphicon-ok-sign')
                        ->canNotBeEmpty()
                    ->end()
            ;

        return $treeBuilder;
    }
}
