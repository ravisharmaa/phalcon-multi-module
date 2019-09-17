<?php

$loader = new Phalcon\Loader();

$loader->registerNamespaces([
    'App\Core' => __DIR__ .'/../modules/Core',
    'App\Frontend' => __DIR__ .'/../modules/Frontend',
    'App\Api' => __DIR__ .'/../modules/Api',
    'App\BackOffice' => __DIR__ .'/../modules/BackOffice'
]);

$loader->register();