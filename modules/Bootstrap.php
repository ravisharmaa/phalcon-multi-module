<?php


use Phalcon\Mvc\Application;

class Bootstrap extends Application
{
    private $modules;

    private $defaultModule = 'frontend';

    /**
     * Bootstrap constructor.
     * @param $defaultModule
     */
    public function __construct($defaultModule)
    {
        $this->modules =[
            'core' => [
                'className' => 'App\Core\Module',
                'path' => __DIR__ . '/Core/Module.php'
            ],
            'api' => [
                'className' => 'App\Api\Module',
                'path' => __DIR__ . '/Api/Module.php'
            ],
            'frontend' => [
                'className' => 'App\Frontend\Module',
                'path' => __DIR__ . '/Frontend/Module.php'
            ],
            'back_office' => [
                'className' => 'App\BackOffice\Module',
                'path' => __DIR__ . '/BackOffice/Module.php'
            ]
        ];

        $this->defaultModule = $defaultModule;
    }

    private function registerServices()
    {
        $defaultModule = $this->defaultModule;
        $dependencyInjector = new Phalcon\Di\FactoryDefault();

        $config = require __DIR__.'/../config/config.php';

        $modules = $this->modules;

        include_once __DIR__ .'/../config/loader.php';
        include_once __DIR__ .'/../config/services.php';
        include_once __DIR__ .'/../config/routing.php';

        $this->setDI($dependencyInjector);

    }

    public function init()
    {
       $debug = new \Phalcon\Debug();

       $debug->listen();

       $this->registerServices();

       $this->registerModules($this->modules);

       echo $this->handle()->getContent();
    }
}