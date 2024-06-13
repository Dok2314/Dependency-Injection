<?php

require_once 'vendor/autoload.php';

use Src\Vendor\DI\Container;
use Src\App\Controllers\CarController;

$container = new Container();
$carController = $container->resolve(CarController::class);

$carController->index();