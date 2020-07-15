<?php
include_once __DIR__ . '/../../vendor/autoload.php';

use NickSnellock\Services\ContainerFactory;
use \Phroute\Phroute\RouteCollector;
use \Phroute\Phroute\Dispatcher;
use \NickSnellock\Controllers\VegetableController;

$router = new RouteCollector();

$container = ContainerFactory::build();
$vegetableController = $container->get(VegetableController::class);

if (is_array($_SERVER['argv']) && isset($_SERVER['argv'][1]) && $_SERVER['argv'][1] == '--list-veg') {
    echo $vegetableController->getVegetables();
} else {

    $router->get('/vegetables', [$vegetableController, 'getVegetablesApi']);

    $dispatcher = (new Dispatcher($router->getData()));

    echo $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
}
