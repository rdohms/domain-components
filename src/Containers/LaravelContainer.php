<?php namespace BigName\Workflow\Containers;

use Illuminate\Container\Container as IlluminateContainer;
use InvalidArgumentException;

class LaravelContainer implements Container
{
    private $container;

    public function __construct(IlluminateContainer $container)
    {
        $this->container = $container;
    }

    public function make($class)
    {
        if ( ! is_string($class)) {
            throw new InvalidArgumentException;
        }
        return $this->container->make($class);
    }
}
