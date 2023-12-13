<?php
$path = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'controllers/home.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/expenses' => 'controllers/expenses.php',
    '/expense' => 'controllers/expense.php',

];
function routerController($path, $routes)
{

    if (array_key_exists($path, $routes)) {

        require $routes[$path];
    } else {
        abort();
    }
}

function abort($code =  StatusCode::NOTFOUND)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routerController($path, $routes);
