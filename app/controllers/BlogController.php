<?php

namespace app\controllers;

use app\core\Controller;
use app\core\View;

class BlogController extends Controller
{

    public function indexAction()
    {
        if (!empty($this->params['args'])) {
            $page = $this->params['args'];
        } else {
            $page = 1;
        }
        $pages = $this->model->countPages();
        $articles = $this->model->getArticlesForPage($page);
        if (count($articles) == 0 && $page != 1) {
            View::redirect('../blog');
            exit;
        }
        $vars = [
            'articles' => $articles,
            'pages' => $pages,
            'page' => $page,
        ];
        $this->view->render('Блог', $vars);
    }

    public function articleAction()
    {
        $id = $this->params['args'];
        $article = $this->model->getArticle($id);
        if (!$article) {
            View::errorCode(404);
            exit;
        }
        $args = [
            'article' => $article
        ];
        $this->view->render($article['article_name'], $args);
    }
}