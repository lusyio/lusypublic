<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

use app\core\Router;

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});
// запись промокода в куки
if (isset($_GET['promo'])) {
    if (preg_match('~^LIO[A-Z0-9]{5,8}$~i', $_GET['promo'])) {
        setcookie('promo', $_GET['promo'], time() + 3600 * 24 * 30, '/', '.lusy.io');
    }
}

$router = new Router();
$router->run();
