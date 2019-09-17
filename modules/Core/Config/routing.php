<?php

$router = new Phalcon\Mvc\Router(false);

$router->clear();

$router->add('/', [
   'module' => 'config',
   'controller' => 'index',
   'action' => 'index',
]);

return$router;
