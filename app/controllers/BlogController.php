<?php

namespace app\controllers;

use app\core\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Блог');
    }
}