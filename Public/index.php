<?php

require __DIR__."../../vendor/autoload.php";

use App\Controller\HomeControlle;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\App;

$app = new App;

#Rotas para as Views
$app->get("/", function (Request $request, Response $response){

    return $response;
});

#Rotas para fazer post

#Rotas para fazer get

#Rotas para fazer put

#Rotas para delete

$app->run();

