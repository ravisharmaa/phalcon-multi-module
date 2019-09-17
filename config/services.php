<?php

use MSSQL\Adapter\MssqlAdapter;
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

$dependencyInjector['db'] = function () use ($config) {
    return new MssqlAdapter([
        'host' => $config->database->host,
        'port' => 1433,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname' => $config->database->dbname,
        'pdoType' => $config->database->pdoType,
        'dialectClass' => '\MSSQL\Dialect\MssqlDialect',
    ]);
};
