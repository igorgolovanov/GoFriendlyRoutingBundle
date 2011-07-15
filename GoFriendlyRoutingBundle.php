<?php

namespace Go\FriendlyRoutingBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Go\FriendlyRoutingBundle\DependencyInjection\Compiler\OverrideRoutingUrlGeneratorPass;

class GoFriendlyRoutingBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new OverrideRoutingUrlGeneratorPass());

        parent::build($container);
    }
}
