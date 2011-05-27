<?php

namespace Go\RoutingBundle\Routing\Generator\Dumper;

use Symfony\Component\Routing\Generator\Dumper\PhpGeneratorDumper as BasePhpGeneratorDumper;

class PhpGeneratorDumper extends BasePhpGeneratorDumper
{
    /**
     * Dumps a set of routes to a PHP class.
     *
     * Available options:
     *
     *  * class:      The class name
     *  * base_class: The base class name
     *
     * @param  array  $options An array of options
     *
     * @return string A PHP class representing the generator class
     */
    public function dump(array $options = array())
    {
        $options = array_merge(array(
            'class'      => 'ProjectUrlGenerator',
            'base_class' => 'Go\\RoutingBundle\\Routing\\Generator\\UrlGenerator',
        ), $options);

        return
            $this->startClass($options['class'], $options['base_class']).
            $this->addConstructor().
            $this->addGenerator().
            $this->endClass()
        ;
    }
}
