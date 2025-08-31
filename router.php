<?php 

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
];
dd($url);
function routeToController($url, $routes){
    if(array_key_exists($url, $routes)){
        require $routes[$url];
    }else{
        echo "sorry, not found";
    }
}

routeToController($url, $routes);