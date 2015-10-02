<?php

require 'Slim/Slim.php';
require 'app/function.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () use ($app) {
        include_once("/app/controller/default.php");
    }
);


$app->get(
    '/upload/',
    function () use ($app) {
        include_once("/app/controller/upload.php");
    }
);

$app->post(
    '/upload/',
    function () use ($app) {
        include_once("/app/controller/upload.php");
    }
);


$app->run();
