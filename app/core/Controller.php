<?php

namespace app\core;


abstract class Controller
{
    public $params;
    public $view;
    public $model;

    public function __construct($params)
    {
        $this->params = $params;
        $this->view = new View($params);
        $this->model = $this->loadModel($params['controller']);
    }

    public function loadModel($name)
    {
        $class = 'app\models\\' . ucfirst($name);
        if (class_exists($class)) {
            return new $class;
        }
    }

}