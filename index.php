<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

use app\core\Router;

$router = new Router();
$router->run();

