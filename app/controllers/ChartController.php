<?php

namespace app\controllers;

use app\core\Controller;

class ChartController extends Controller
{
    public function indexAction()
    {
        $vars = [

        ];
        $this->view->render('Чарт', $vars);
    }

}
