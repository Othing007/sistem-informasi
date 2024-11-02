<?php
// routes/web.php

$routes = [
    '/' => 'pages/dashboard.php',
    '/login' => 'controllers/AuthController.php',
    '/logout' => function() {
        AuthController::logout();
        header("Location: pages/login.php");
    },
    '/employees' => 'controllers/EmployeeController.php',
];

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (array_key_exists($request, $routes)) {
    if (is_callable($routes[$request])) {
        $routes[$request]();
    } else {
        include $routes[$request];
    }
} else {
    http_response_code(404);
    echo "Page not found";
}
