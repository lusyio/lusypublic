<?php

namespace app\controllers;

use app\core\Controller;

class PartnersController extends Controller

{

    public function indexAction()
    {
        $vars = [
            'partners',
        ];
        $this->view->render('Парстнерство', $vars);
    }

}