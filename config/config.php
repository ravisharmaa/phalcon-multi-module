<?php

return new Phalcon\Config([
    'application' => [
        'name' => 'Learning Phalcon',
    ],

    'root_dir' => __DIR__.'/../',

    'redis' => [
        'host' => '127.0.0.1',
        'port' => 6379,
    ],

    'session' => [
        'unique_id' => 'learning_phalcon',
        'name' => 'learning_phalcon',
        'path' => 'tcp://127.0.0.1:6379?weight=1',
    ],

    'view' => [
        'cache' => [
            'dir' => __DIR__.'/../cache/volt/',
        ],
    ],

    'database' => [
        'adapter' => '\MSSQL\Adapter\MssqlAdapter',
        'pdoType' => 'dblib',
        'host' => '10.0.1.62',
        'username' => 'sa',
        'password' => 'password',
        'dbname' => 'ivisit',
    ],
]);
