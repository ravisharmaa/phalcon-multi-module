<?php

namespace App\BackOffice;

use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    /**
     * Registers an autoloader related to the module.
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function registerAutoloaders(\Phalcon\DiInterface $dependencyInjector = null)
    {
        // TODO: Implement registerAutoloaders() method.
    }

    /**
     * Registers services related to the module.
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function registerServices(\Phalcon\DiInterface $dependencyInjector)
    {
        $config = include __DIR__.'/Config/config.php';
        $dependencyInjector['config'] = $config;

        include __DIR__.'/Config/services.php';
    }
}
