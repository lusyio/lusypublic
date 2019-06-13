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
        $articles = $this->db->allRows('SELECT article_id, article_number, language, article_name, article_text, category, description, publish_date FROM blog ORDER BY publish_date DESC');
        return $articles;
    }

    public function countPages()
    {
        $articles = $this->db->firstRow('SELECT COUNT(*) as count FROM blog');
        $pages = ceil(array_pop($articles) / $this->ARTICLES_PER_PAGE);
        return $pages;
    }

    public function getArticlesForPage($page)
    {
        $limit = $this->ARTICLES_PER_PAGE;
        $offset = ($page - 1) * $limit;
        $params = [
            ':limit' => $limit,
            ':offset' => $offset,
        ];
        $articles = $this->db->allRows('SELECT article_id, article_number, language, article_name, article_text, category, description, publish_date FROM blog ORDER BY publish_date DESC LIMIT :limit OFFSET :offset', $params);
        return $articles;
    }

    public function getArticle($articleId)
    {
        $params = [
            ':articleId' => $articleId,
        ];
        $article = $this->db->firstRow('SELECT article_id, article_number, language, article_name, article_text, category, description, publish_date FROM blog WHERE article_id = :articleId', $params);
        return $article;
    }
}