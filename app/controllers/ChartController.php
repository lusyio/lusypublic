<?php

namespace app\controllers;

use app\core\Controller;

class ChartController extends Controller
{
    public function indexAction()
    {
        $companyData = $this->model->getStatsForAllCompanies();
        $vars = [
            'companyData' => $companyData,
        ];
        $this->view->render('Чарт', $vars);
    }

}
