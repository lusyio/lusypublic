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
                'icon' => 'fas fa-tasks',
                'text' => 'Постановка задач',
            ],
            [
                'icon' => 'fas fa-clock',
                'text' => 'Контроль сроков',
            ],
            [
                'icon' => 'fas fa-user-circle',
                'text' => 'Учетные записи',
            ],
            [
                'icon' => 'fas fa-comments',
                'text' => 'Система диалогов',
            ],
            [
                'icon' => 'fas fa-trophy',
                'text' => 'Достижения',
            ],
            [
                'icon' => 'fas fa-book-open',
                'text' => 'Журнал событий',
            ],
            [
                'icon' => 'fas fa-users',
                'text' => 'Раздел Компания',
            ],
            [
                'icon' => 'fas fa-clock',
                'text' => 'Планировщик заданий',
            ],
            [
                'icon' => 'fas fa-file-upload',
                'text' => 'Файловый менеджер',
            ],
            [
                'icon' => 'fas fa-chart-pie',
                'text' => 'Детальные отчеты',
            ],
            [
                'icon' => 'fas fa-search',
                'text' => 'Удобный поиск',
            ],
        ];
        $args = [
            'possibilities' => $possibilities,
        ];
        $this->view->render('Возможности', $args);
    }
}