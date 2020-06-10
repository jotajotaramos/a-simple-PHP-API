<?php

include 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require "bootstrap/container.php";

require "bootstrap/routes.php";

$response = $router->dispatch($container->get('request'));

// send the response to the browser
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);