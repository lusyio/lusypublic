<?php

namespace app\controllers;


use app\core\Controller;

class RegisterController extends Controller
{
    public function mainAction()
    {
        $this->view->render('Регистрация');
    }
}