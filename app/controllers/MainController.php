<?php

namespace app\controllers;

use app\core\View;
use app\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        // заглушка для английской части сайта---
        if ($this->params['language'] == 'en') {
            $this->params['action'] = 'soon';
            $this->view = new View($this->params);
            $this->model = $this->loadModel($this->params['controller']);
        }
        // ---конец заглушки для английской части сайта
        $this->view->render('Главная страница');
    }
}