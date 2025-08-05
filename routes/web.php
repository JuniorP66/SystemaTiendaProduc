<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/../views/product/catalog.php';
        break;
    case '/login' :
        require __DIR__ . '/../views/auth/login.php';
        break;
    case '/register' :
        require __DIR__ . '/../views/auth/register.php';
        break;
    case '/profile' :
        require __DIR__ . '/../views/user/profile.php';
        break;
    default:
        echo "Página no encontrada";
        break;
}
