<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];
$params = parse_url($_SERVER['REQUEST_URI'])["query"] ?? "";

$routes = [
    "/" => "home.php",
    "/contact" => "contact.php",
    "/example" => "example.php",
];

if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    require 'error.php';
}