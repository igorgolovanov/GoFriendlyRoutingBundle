RoutingBundle
=========================================================

## Installation

### Add RoutingBundle to your vendor/bundles/Go dir

    git submodule add git://github.com/golovanov/RoutingBundle.git vendor/bundles/Go/RoutingBundle

### Add RoutingBundle to your application kernel

    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Go\RoutingBundle\GoRoutingBundle(),
            // ...
        );
    }

### Register the Go namespace

    // app/autoload.php
    $loader->registerNamespaces(array(
        'Go' => __DIR__.'/../vendor/bundles',
        // your other namespaces
    ));

