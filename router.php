<?php 

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.php',
    '/search' => 'controllers/home/search.php',
    '/login' => 'controllers/auth/login.php',
    '/register' => 'controllers/auth/register.php',
    '/logout' => 'controllers/auth/logout.php',
];

function routeToController($url, $routes){
    if(array_key_exists($url, $routes)){
        require $routes[$url];
    }else{
        echo "sorry, not found";
    }
}

routeToController($url, $routes);