<?php

$database = require_once 'core/bootstrap.php';
$router = new Router;
require_once 'routes.php';
$uri = trim($_SERVER['REQUEST_URI'], '/');
try{
    require_once $router->direct($uri);
} catch (Exception $e) {
    echo "Sellist lehte pole";
}
