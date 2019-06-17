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
        $language = $this->language;
        $params = [
            ':language' => $language,
        ];
        $articles = $this->db->allRows('SELECT article_id, url, language, article_name, article_text, category, description, img_small, publish_date FROM blog WHERE language = :language ORDER BY publish_date DESC', $params);
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
        $language = $this->language;
        $params = [
            ':limit' => $limit,
            ':offset' => $offset,
            ':language' => $language,
        ];
        $articles = $this->db->allRows('SELECT article_id, url, language, article_name, article_text, category, description, img_small, publish_date FROM blog WHERE language = :language ORDER BY publish_date DESC LIMIT :limit OFFSET :offset', $params);
        return $articles;
    }

    public function getArticle($articleId)
    {
        $language = $this->language;
        $params = [
            ':articleId' => $articleId,
            ':language' => $language,
        ];
        $article = $this->db->firstRow('SELECT article_id, url, language, article_name, article_text, category, description, img_full, img_small, publish_date FROM blog WHERE url = :articleId AND language = :language ', $params);
        return $article;
    }
}