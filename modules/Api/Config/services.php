<?php

$dependencyInjector['dispatcher'] = function () use ($dependencyInjector) {
    $eventsManager = $dependencyInjector->getShared('eventsManager');

    $dispatcher = new Phalcon\Mvc\Dispatcher();

    $dispatcher->setEventsManager($eventsManager);

    $dispatcher->setDefaultNamespace('App\Api\Controllers');

    return $dispatcher;
};

$dependencyInjector['url']->setBaseUri(''.$config->application->baseUri.'');

$dependencyInjector['view'] = function () {
    $view = new Phalcon\Mvc\View();

    $view->setViewsDir(__DIR__.'/../Views/');

    $view->registerEngines([
       '.volt' => 'voltService',
    ]);

    return $view;
};
