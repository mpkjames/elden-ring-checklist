<?php 

$routes = [
    '/' => 'controllers/index.php',
    '/bosses' => 'controllers/checklists/bosses.php'
];

// A function that says, when given a $URI list of routes, require that route, otherwise show a 404 page.
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

// A function to handle error codes and direct to a specific error page (404 by default)
function abort($code = 404)
{
    http_response_code($code);
    require "view/{$code}.view.php";
    die();
}

// Get the path from the _SERVER global and parse it, then call the route to controller to require the correct controller file
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
route_to_controller($uri, $routes);