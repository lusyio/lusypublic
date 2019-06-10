<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];
    protected $args = [];

    public function __construct()
    {
        $arr = require 'app/config/routes.php';
        foreach ($arr as $key => $value) {
            $this->add($key, $value);
        }
    }

    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }

    public function match()
    {
        $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'), 2);
        if (count($url) > 1) {
            $this->params['language'] = $url[0];
            $urlPathPart = $url[1];
        } else {
            $urlPathPart = $url[0];

        }
        foreach ($this->routes as $route => $params) {
            // если в адресе есть параметры, то они помещаются в $matches[1],
            // например в адресе blog/view/75/815 в $matches[1] будет передано 75/815
            if (preg_match('~^' . $route . '(?:/([0-9/]+))*~', $urlPathPart, $matches)) {
                $this->params = array_merge($this->params, $params);
                if (count($matches) > 1) {
                    $this->params['args'] = $matches[1];
                }
                return true;
            }
        }
        return false;
    }

    public function run()
    {
        if ($this->match()) {
            $path = 'app\controllers\\' . ucfirst($this->params['controller']) . 'Controller';

            if (class_exists($path)) {
                $controller = new $path($this->params);
                $action = $this->params['action'] . 'Action';
                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    echo 'action not found';
                }
            } else {
                echo 'controller not found';
            }
        } else {
            echo '404';
        }
    }

}