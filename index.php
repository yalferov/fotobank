<?php

require 'Slim/Slim.php';
require 'app/function.php';
require 'app/lib/idiorm.php';

ORM::configure('mysql:host=localhost;dbname=fotobank;charset=utf8');
ORM::configure('username', 'root');
ORM::configure('password', '');

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
    '/fotobank',
    function () use ($app) {
        include_once("/app/controller/fotobank.php");
    }
);
$app->get(
    '/tag',
    function () use ($app) {
        include_once("/app/controller/tag.php");
    }
);


$app->get(
    '/upload',
    function () use ($app) {
        include_once("/app/controller/upload.php");
    }
);

$app->post(
    '/upload',
    function () use ($app) {
        include_once("/app/controller/upload.php");
    }
);

$app->run();
