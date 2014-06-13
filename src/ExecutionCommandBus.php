<?php namespace BigName\Workflow;

use BigName\Workflow\Containers\Container;

class ExecutionCommandBus implements CommandBus
{
    private $container;
    private $mapper;

    public function __construct(Container $container, Mapper $mapper)
    {
        $this->mapper = $mapper;
        $this->container = $container;
    }

    public function execute(Request $request)
    {

    }
}
