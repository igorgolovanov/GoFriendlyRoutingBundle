<?php

namespace Go\FriendlyRoutingBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * GoRoutingBundle configuration structure.
 *
 * @author Igor Golovanov <igor.golovanov@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    
    /**
     * Generates the configuration tree.
     *
     * @return Symfony\Component\Config\Definition\NodeInterface
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('go_routing');

        
        return $treeBuilder->buildTree();
    }

}
