<?php

namespace app\core;


use app\lib\Db;

abstract class Model
{
    public $db;
    protected $language;

    public function __construct()
    {
        $this->db = new Db();
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

}