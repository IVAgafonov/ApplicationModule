<?php

namespace ApplicationModule\Controller\v1\Factory;

use IVAgafonov\Controller\Factory\ControllerFactoryInterface;

/**
 * Class IndexControllerFactory
 * @package ApplicationModule\Controller\v1\Factory
 */
class ApplicationModuleControllerFactory implements ControllerFactoryInterface
{
    /**
     * @param array $config
     * @return \ApplicationModule\Controller\v1\ControllerInterface
     */
    public function create($config)
    {
        return new \ApplicationModule\Controller\v1\ApplicationModuleController();
    }
}