<?php

namespace app\controllers;

use app\core\Controller;

class BlogController extends Controller
{

    public function indexAction()
    {
        $articles = $this->model->getAllArticles();
        $vars = [
          'articles' => $articles,
        ];
        $this->view->render('Блог', $vars);
    }

    public function articleAction()
    {
        $id = $this->params['args'];
        $article = $this->model->getArticle($id);
        $args = [
          'article' => $article
        ];
        $this->view->render($article['article_name'], $args);
    }
}