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
            $this->view->layout = 'soon';
            $this->model = $this->loadModel($this->params['controller']);
        }
        // ---конец заглушки для английской части сайта
        $lastArticles = $this->model->getLastArticles(3);
        $vars = [
            'articles' => $lastArticles,
        ];
        $this->view->render('Главная страница', $vars);
    }

    public function priceAction()
    {
        $this->view->render('Стоимость');

    }
    public function possibilitiesAction()
    {
        $possibilities = [
            [
                'icon' => 'fas fa-tasks fa-fw',
                'text' => 'Постановка задач',
            ],
            [
                'icon' => 'fas fa-clock fa-fw',
                'text' => 'Контроль сроков',
            ],
            [
                'icon' => 'fas fa-users fa-fw',
                'text' => 'Учетные записи',
            ],
        ];
        $args = [
            'possibilities' => $possibilities,
        ];
        $this->view->render('Возможности', $args);
    }
}