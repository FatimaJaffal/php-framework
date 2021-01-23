<?php

require_once __DIR__.'/../vendor/autoload.php';
use app\core\Application;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$application = new Application(dirname(__DIR__));
$application->router->get('/', 'contact');
$application->run();
