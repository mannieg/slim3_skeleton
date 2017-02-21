<?php


/**
 *  Slim Application setting
 *  and bootstrapping
 */


// Require composer autoloader
require __DIR__ . '/../vendor/autoload.php';



// Application settings
$settings = require __DIR__ . '/../app/settings.php';


// New Slim app instance
$app = new Slim\App( $settings );



// Add our dependencies to the container
require __DIR__ . '/../app/dependencies.php';



// Require our route
require __DIR__ . '/../app/routes/main.php';

$container = $app->getContainer();

$container['notFoundHandler'] = function ($container) {
  return function ($request, $response) use ($container) {
    $container->view->render($response, 'errors/404.twig');
    return $response->withStatus(404);
  };
};
