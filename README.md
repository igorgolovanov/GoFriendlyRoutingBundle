GoFriendlyRoutingBundle
===============

## Installation

Installation depends on how your project is setup:

### Step 1: Installation using the `bin/vendors.php` method

If you're using the `bin/vendors.php` method to manage your vendor libraries,
add the following entries to the `deps` in the root of your project file:

```
[GoFriendlyRoutingBundle]
    git=http://github.com/golovanov/GoFriendlyRoutingBundle.git
    target=/bundles/Go/FriendlyRoutingBundle
```

Next, update your vendors by running:

``` bash
$ ./bin/vendors install
```

Great! Now skip down to *Step 2*.

### Step 1 (alternative): Installation with submodules

If you're managing your vendor libraries with submodules, first create the
`vendor/bundles/Go` directory:

``` bash
$ mkdir -pv vendor/bundles/Go
```

Next, add the two necessary submodules:

``` bash
$ git submodule add git://github.com/golovanov/GoFriendlyRoutingBundle.git vendor/bundles/Go/FriendlyRoutingBundle
```

### Step 2: Configure the autoloader

Add the following entries to your autoloader:

``` php
<?php
// app/autoload.php

$loader->registerNamespaces(array(
    // ...

    'Go'    => __DIR__.'/../vendor/bundles',
));
```

### Step 3: Enable the bundle

Finally, enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...

        new Go\FriendlyRoutingBundle\GoFriendlyRoutingBundle(),
    );
}
```
