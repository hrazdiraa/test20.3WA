<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/':
        $redirect = '/classes/index.php';
        break;
    case '/about':
        $redirect = '/classes/aboutUs.php';
        break;
    case '/login':
        $redirect = '/classes/login.php';
        break;
    case '/register':
        $redirect = '/classes/register.php';
        break;
    case '/auth/login':
        $redirect = '/views/auth/login.php';
        break;
    case '/auth/register':
        $redirect = '/views/auth/register.php';
        break;
    case '/animal-list':
        $redirect = '/classes/chavany.php';
        break;
    case '/wanted-animals':
        $redirect = '/classes/chceme.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/classes/404.php';
        exit();
}

$_SESSION['site'] = $redirect;
require_once __DIR__ . '/classes/header.php';
require_once __DIR__ . $redirect ?? __DIR__ . '/classes/index.php';
require_once __DIR__ . '/classes/footer.php';
?>
