<?php

namespace app\controllers;


use app\core\Controller;

class NewsController extends Controller
{
    public function indexAction()
    {
        $vars = [

        ];
        $this->view->render('Новости', $vars);
    }
}