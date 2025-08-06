<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($request) {
    case '/':
    case '/inicio':
        require_once __DIR__ . '/../views/product/catalog.php';
        break;

    case '/login':
        if ($method === 'GET') {
            require_once __DIR__ . '/../views/auth/login.php';
        } elseif ($method === 'POST') {
            require_once __DIR__ . '/../controllers/AuthController.php';
            $controller = new AuthController();
            $controller->login($_POST['correo'], $_POST['clave']);
        }
        break;

    case '/register':
        if ($method === 'GET') {
            require_once __DIR__ . '/../views/auth/register.php';
        } elseif ($method === 'POST') {
            require_once __DIR__ . '/../controllers/AuthController.php';
            $controller = new AuthController();
            $controller->register($_POST);
        }
        break;

    case '/profile':
        require_once __DIR__ . '/../views/user/profile.php';
        break;

    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}           session_write_close();