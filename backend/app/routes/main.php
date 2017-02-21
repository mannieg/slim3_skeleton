<?php

// Creating routes

// Psr-7 Request and Response interfaces
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


// HOME ROUTE
//
$app->get('/', function (Request $request, Response $response, $args)   {

  $vars = [
    'page' => [
    'title' => 'Random Video Player',
    'description' => 'Random Video Player'
    ],
  ];


  return $this->view->render($response, 'home.twig', $vars);

})->setName('home');
