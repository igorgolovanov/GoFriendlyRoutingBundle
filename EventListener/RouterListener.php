<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Go\FriendlyRoutingBundle\EventListener;

use Symfony\Component\HttpKernel\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Routing\RouterInterface;

/**
 * Initializes request attributes based on a matching route.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterListener
{
    private $router;
    private $logger;
    private $httpPort;
    private $httpsPort;

    public function __construct(RouterInterface $router, $httpPort = 80, $httpsPort = 443, LoggerInterface $logger = null)
    {
        $this->router = $router;
        $this->httpPort = $httpPort;
        $this->httpsPort = $httpsPort;
        $this->logger = $logger;
    }
    
    public function onEarlyKernelRequest(GetResponseEvent $event)
    {
        if (HttpKernelInterface::MASTER_REQUEST !== $event->getRequestType()) {
            return;
        }

        $request = $event->getRequest();

        // set the context even if the parsing does not need to be done
        // to have correct link generation
        $context = new RequestContext(
            $request->getBaseUrl(),
            $request->getMethod(),
            $request->getHost(),
            $request->getScheme(),
            $request->isSecure() ? $this->httpPort : $request->getPort(),
            $request->isSecure() ? $request->getPort() : $this->httpsPort
        );

        $this->router->setContext($context);
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();
        
        if ($request->attributes->has('_controller')) {
            // routing is already done
            return;
        }
    }
}
