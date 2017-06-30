<?php

namespace ApplicationModule\Bootstrap;

class Init
{
    public function init($config)
    {
        $controllerFactory = new \ApplicationModule\Controller\Factory\ApplicationModuleControllerFactory();
        $controller = $controllerFactory->create($config);
        $controller->index();
    }
}