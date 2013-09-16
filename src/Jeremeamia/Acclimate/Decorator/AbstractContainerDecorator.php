<?php

namespace Jeremeamia\Acclimate\Decorator;

use Jeremeamia\Acclimate\ContainerInterface;
use Jeremeamia\Acclimate\ServiceNotFoundException;

/**
 * An abstract ContainerDecorator that allows you to decorate a container and proxy to the decorated container
 */
abstract class AbstractContainerDecorator implements ContainerInterface
{
    /**
     * @var ContainerInterface The decorated container
     */
    protected $container;

    /**
     * @param ContainerInterface $container The container being decorated
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function get($name)
    {
        return $this->container->get($name);
    }

    public function has($name)
    {
        return $this->container->has($name);
    }
}
