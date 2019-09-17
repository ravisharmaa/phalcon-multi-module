<?php

use Phalcon\Mvc\View\Engine\Volt;

$dependencyInjector['session'] = function () use ($config) {
};

$dependencyInjector['url'] = function () use ($config) {
    return new Phalcon\Mvc\Url();
};

$dependencyInjector['voltService'] = function ($view, $dependencyInjector) use ($config) {
    $volt = new Volt($view, $dependencyInjector);

    if (!is_dir($config->view->cache->dir)) {
        mkdir($config->view->cache->dir);
    }

    $volt->setOptions([
        'compiledPath' => $config->view->cache->dir,
        'compiledExtension' => '.compiled',
        'compileAlways' => true,
    ]);

    return $volt;
};
