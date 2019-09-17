<?php

use Phalcon\Mvc\Router;

$dependencyInjector['router'] = function () use ($defaultModule, $modules, $dependencyInjector, $config) {

    $router = new Router(false);

    $router->clear();

    $moduleRouting =  __DIR__ .'/../modules/'.ucfirst($defaultModule).'/Config/routing.php';


    if (file_exists($moduleRouting) && is_file($moduleRouting)) {
        $router = require $moduleRouting;
    } else {
        $router->add('#^/(|/)$#', [
            'module' => $defaultModule,
            'controller' => 'index',
            'action' => 'index',
        ]);

        $router->add('#^/([a-zA-Z0-9\_]+)[/]{0,1}$#', [
            'module' => $defaultModule,
            'controller' => 1,
        ]);

        $router->add('#^/{0,1}([a-zA-Z0-9\_]+)/([a-zA-Z0-9\_]+)(/.*)*$#', [
            'module' => $defaultModule,
            'controller' => 1,
            'action' => 2,
            'params' => 3,
        ]);
    }

    return $router;
};