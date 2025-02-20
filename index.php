<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

$routes = [
    "/" => "app/controller/home.php",
    "/contact" => "app/controller/contact.php",
    "/example" => "app/controller/example.php",
];

if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    require 'error.php';
}