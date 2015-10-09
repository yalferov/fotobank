<?php

require 'Slim/Slim.php';
require 'app/function.php';
require 'app/lib/idiorm.php';

require 'config.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'log.enabled' => true
));

// GET route
$app->get(
    '/',
    function () use ($app) {
        include_once("app/controller/default.php");
    }
);
$app->get(
    '/popular',
    function () use ($app) {
        include_once("app/controller/popular.php");
    }
);

$app->get(
    '/foto/:id',
    function ($id) use ($app) {
        include_once("app/controller/foto.php");
    }
);

$app->get(
    '/search',
    function () use ($app) {
        include_once("app/controller/search.php");
    }
);

$app->get(
    '/tag',
    function () use ($app) {
        include_once("app/controller/tag.php");
    }
);


$app->get(
    '/upload',
    function () use ($app) {
        include_once("app/controller/upload.php");
    }
);

$app->post(
    '/upload',
    function () use ($app) {
        include_once("app/controller/upload.php");
    }
);

$app->run();
