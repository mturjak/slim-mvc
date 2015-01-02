<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
require("../vendor/autoload.php");
 
$router = new \Mturjak\Router;
 
$routes = array(
    '/$|/index' => '', // empty path "/" or "/index"
    '/test/:title' => 'Main:test@get'
);
 
$router->addRoutes($routes);

$router->set404Handler("Main:notFound");
 
$router->run();