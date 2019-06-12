<?php

namespace app\models;

use app\core\Model;

class Blog extends Model
{
    protected $ARTICLES_PER_PAGE = 8;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllArticles()
    {
        $articles = $this->db->allRows('SELECT article_id, article_number, language, article_name, article_text, category, description FROM blog');
        return $articles;
    }
    public function getArticle($articleId)
    {
        $params = [
            ':articleId' => $articleId,
        ];
        $article = $this->db->firstRow('SELECT article_id, article_number, language, article_name, article_text, category, description FROM blog WHERE article_id = :articleId', $params);
        return $article;
    }
}