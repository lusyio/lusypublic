<?php
/**
 * Created by PhpStorm.
 * User: Гагарин
 * Date: 10.06.2019
 * Time: 11:24
 */

namespace app\controllers;


use app\core\Controller;

class IndexController extends Controller
{
    public function viewAction()
    {
        echo 'Main Page';
    }
}