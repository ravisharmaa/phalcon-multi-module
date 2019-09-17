<?php

$router = new Phalcon\Mvc\Router(false);

$router->clear();

$router->add('/', [
   'module' => 'frontend',
   'controller' => 'index',
   'action' => 'index',
]);

return$router;
