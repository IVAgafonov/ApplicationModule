<?php

namespace ApplicationModule\Controller\Factory;

use IVAgafonov\Controller\Factory\ControllerFactoryInterface;

/**
 * Class IndexControllerFactory
 * @package ApplicationModule\Controller\Factory
 */
class ApplicationModuleControllerFactory implements ControllerFactoryInterface
{
    /**
     * @param array $config
     * @return \IVAgafonov\Controller\ControllerInterface
     */
    public function create($config)
    {
        return new \ApplicationModule\Controller\ApplicationModuleController();
    }
}