<?php

namespace app\models;

use app\core\Model;

class Main extends Model
{
    public function getLastArticles($number)
    {
        $limit = $number;
        $params = [
            ':limit' => $limit,
        ];
        $articles = $this->db->allRows('SELECT article_id, article_number, language, article_name, article_text, category, description, publish_date FROM blog ORDER BY publish_date DESC LIMIT :limit', $params);
        return $articles;
    }
}