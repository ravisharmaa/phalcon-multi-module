<?php

$loader = new Phalcon\Loader();

$loader->registerNamespaces([
    'App\Core' => __DIR__ .'/../modules/Core',
    'App\Frontend' => __DIR__ .'/../modules/Frontend',
    'App\Api' => __DIR__ .'/../modules/Api',
    'App\BackOffice' => __DIR__ .'/../modules/BackOffice',
    'MSSQL\Adapter' => __DIR__ .'/../libraries/adapter',
    'MSSQL\Dialect' => __DIR__ .'/../libraries/dialect',
    'Demo\Dialect' => __DIR__ .'/../mssql/dialect',
    'Demo\Adapter' => __DIR__ .'/../mssql/adapter'
]);

$loader->register();