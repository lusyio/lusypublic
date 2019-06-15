<?php

namespace app\models;

use app\core\Model;

class Main extends Model
{
    public function getLastArticles($number)
    {
        $language = $this->language;
        $limit = $number;
        $params = [
            ':limit' => $limit,
            ':language' => $language,
        ];
        $articles = $this->db->allRows('SELECT article_id, url, language, article_name, article_text, category, description, img_small, publish_date FROM blog WHERE language = :language ORDER BY publish_date DESC LIMIT :limit', $params);
        return $articles;
    }
}