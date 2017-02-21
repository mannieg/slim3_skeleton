<?php

// Debug (Disable in production)
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// Load composer vendors namespace
require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Require application bootstrap
require getenv('BACKEND_PATH') . 'bootstrap/app.php';

// Run Slim
$app->run();
