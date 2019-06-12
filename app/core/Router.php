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
        $url = strtok($_SERVER['REQUEST_URI'], '?');
        $url = explode('/', trim($url, '/'), 2);
        if (count($url) > 1) {
            $this->params['language'] = $url[0];
            $urlPathPart = $url[1];
        } else {
            $this->params['language'] = 'ru';
            $urlPathPart = $url[0];

        }
        if ($urlPathPart == 'ru' || $urlPathPart == '') {
            View::redirect('/ru/main/'); //перенаправляем запрос вида '.io/ru/' и '.io/' на '.io/ru/main'
            exit;
        }

        foreach ($this->routes as $route => $params) {
            if (preg_match('~^' . $route . '(?:/([0-9/]+))*$~', $urlPathPart, $matches)) {
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
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
        } else {
            View::errorCode(404);
        }
    }

}