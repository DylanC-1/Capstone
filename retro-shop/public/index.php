<?php
require_once '../config/config.php';
require_once '../app/Controllers/HomeController.php';
require_once '../app/Controllers/AuthController.php';
require_once '../app/Controllers/ProductController.php';

session_start();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri === '/' && $method === 'GET') {
    $controller = new HomeController();
    $controller->index();
} elseif ($uri === '/login' && $method === 'GET') {
    $controller = new AuthController();
    $controller->showLoginForm();
} elseif ($uri === '/register' && $method === 'GET') {
    $controller = new AuthController();
    $controller->showRegistrationForm();
} elseif ($uri === '/products' && $method === 'GET') {
    $controller = new ProductController();
    $controller->index();
} elseif (preg_match('/^\/products\/(\d+)$/', $uri, $matches) && $method === 'GET') {
    $controller = new ProductController();
    $controller->show($matches[1]);
} else {
    http_response_code(404);
    echo "404 Not Found";
}
?>