<?php

use League\Container\Container;
use SimpleAPI\MyController;

//configuration require (dotenv variables)
require_once (__DIR__ . '\config.php');

$someVariable = $config["VariableFromDotenv"];

//container instance
$container = new Container;

//Request petitions
$container->share('request', function () {

    return Laminas\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
    );
    

});

//Controller example
$container->add('ControllerExample', function () use ($someVariable){

    return (new MyController($someVariable));

} );