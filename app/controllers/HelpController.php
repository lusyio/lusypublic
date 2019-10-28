<?php

namespace app\controllers;

use app\core\Controller;

class HelpController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Lusy - Помощь');

    }
    public function firstAction()
    {
        $this->view->render('Lusy - Помощь - Первое знакомство');
    }
    public function tasksAction()
    {
        $this->view->render('Lusy - Помощь - Задачи');
    }
    public function achievementsAction()
    {
        $this->view->render('Lusy - Помощь - Достижения');
    }
    public function ceoAction()
    {
        $this->view->render('Lusy - Помощь - Руководителю');
    }
    public function communicationAction()
    {
        $this->view->render('Lusy - Помощь - Общение');
    }
    public function questionsAction()
    {
        $this->view->render('Lusy - Помощь - Частые вопросы');
    }
}
