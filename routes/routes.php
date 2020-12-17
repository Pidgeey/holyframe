<?php

/** @var \Slim\Factory\AppFactory $app */

$app->get('/', 'App\Controllers\HomeController:home');
