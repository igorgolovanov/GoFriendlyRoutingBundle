<?php

namespace Go\RoutingBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Go\RoutingBundle\DependencyInjection\Compiler\OverrideRoutingUrlGeneratorPass;

class GoRoutingBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new OverrideRoutingUrlGeneratorPass());

        parent::build($container);
    }
}
