<?php

use Psr\Http\Message\ServerRequestInterface;
use Laminas\Diactoros\ResponseFactory;
use League\Route\Strategy\JsonStrategy;
use League\Route\Router;

$responseFactory = new ResponseFactory();
$strategy = new JsonStrategy($responseFactory);
$routerJSONStrategy = (new Router)->setStrategy($strategy);

//Root path. Just Saying hello
$router->get('/', function (ServerRequestInterface $request) : Array {

    return [

        "title" => "This is the root path",
        "Say Hi" => "Hi"

    ];

});

//Calling a Controller that returns the API version
$router->get('/version',[$container->get('ControllerExample'), "getVersion"]);


