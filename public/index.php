<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');
session_start();

require '../config/config.php';
require '../config/constants.php';
require '../vendor/autoload.php';
use \Slim\App;
use \App\Action;

$app = new App(["settings" => $config]);

require '../config/dependencies.php';
require '../app/routes.php';

$app->run();
