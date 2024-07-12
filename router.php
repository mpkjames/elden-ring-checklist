<?php 

$routes = [
    '/' => 'controllers/index.php',
    '/bosses' => 'controllers/bosses.php'
];

function route_to_controller ($uri, $routes) 
{
    if (array_key_exists($uri, $routes)) 
    {
        require($routes[$uri]);
    }
    else
    {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "view/{$code}.view.php";
    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
route_to_controller($uri, $routes);