<?php

namespace Go\RoutingBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideRoutingUrlGeneratorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $container->setParameter('router.options.generator_class', 'Go\\RoutingBundle\\Routing\\Generator\\UrlGenerator');
        $container->setParameter('router.options.generator_base_class', 'Go\\RoutingBundle\\Routing\\Generator\\UrlGenerator');        
    }
}
