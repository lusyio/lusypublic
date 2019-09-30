<?php

namespace app\controllers;

use app\core\Controller;

class ChartController extends Controller
{
    public function indexAction()
    {
        $companyData = $this->model->getStatsForAllCompanies(true);
        $chartWinners = $this->model->getChartWinners();
        $vars = [
            'companyData' => $companyData,
            'chartWinners' => $chartWinners,
        ];
        $this->view->render('Чарт', $vars);
    }

}
