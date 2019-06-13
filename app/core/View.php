<?php

namespace app\core;


class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars);
        $path = 'app/views/' . $this->path . '.php';
        if (file_exists($path)) {
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'app/views/layouts/' . $this->layout . '.php';
        } else {
            echo 'Вид не найден';
        }
    }

    public static function redirect($url)
    {
        header('location:' . $url);
        exit;
    }

    public static function errorCode($code)
    {
        $path = 'app/views/errors/' . $code . '.php';
        if (file_exists($path)) {
            http_response_code($code);
            require $path;
        }
        exit;
    }
}