<?php

namespace app\core;

use Locale;

class Router
{
    protected $routes = [];
    protected $params = [];
    protected $args = [];
    protected $languages = ['ru', 'en'];

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

    public function getLanguage()
    {
        $language = 'ru';
        return $language;
    }

    public function match()
    {
        $language = $this->getLanguage();
        $url = strtok($_SERVER['REQUEST_URI'], '?');
        $url = explode('/', trim($url, '/'), 2);

        if (in_array($url[0], $this->languages)) {
            $this->params['language'] = $url[0];
            if (count($url) > 1) {
                $urlPathPart = $url[1];
                if ($this->params['language'] == 'en' && $urlPathPart != '') { //для заглушки англоязычной версии
                    View::redirect('/' . $this->params['language'] . '/'); //перенаправляем запрос вида '.io/en/....' на '.io/en/'
                    exit;
                }
            } else {
                $urlPathPart = 'main';
            }
        } else {
            View::redirect('/' . $language . '/'); //перенаправляем запрос вида '.io/.../' и '.io/' на '.io/{язык}/'
            exit;
        }

        foreach ($this->routes as $route => $params) {
            if (preg_match('~^' . $route . '$~', $urlPathPart, $matches)) {
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