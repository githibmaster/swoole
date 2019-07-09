<?php


namespace app\httpController;

use EasySwoole\Http\AbstractInterface\AbstractRouter;
use FastRoute\RouteCollector;

class Router extends AbstractRouter
{
    public function initialize(RouteCollector $routeCollector)
    {
        // TODO: Implement initialize() method.
        $routeCollector->get('test', '/main/index');
        $routeCollector->get('hello', '/hello');
    }
}