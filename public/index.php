<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require '../vendor/pidgeey/holyapi/src/Helpers/helpers.php';

$app = AppFactory::create();
$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require '../routes/routes.php';

$app->run();
