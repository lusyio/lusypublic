<?php

return [
    'blog/([0-9a-zA-Z\-/]+){1}' => [
        'controller' => 'blog',
        'action' => 'article',
    ],
    'blog(?:/([0-9/]+))?' => [
        'controller' => 'blog',
        'action' => 'index',
    ],
    'main' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'price' => [
        'controller' => 'main',
        'action' => 'price',
    ],
    'chart' => [
        'controller' => 'chart',
        'action' => 'index',
    ],
    'possibilities' => [
        'controller' => 'main',
        'action' => 'possibilities',
    ],
    'news' => [
        'controller' => 'news',
        'action' => 'index',
    ],
    'register' => [
        'controller' => 'register',
        'action' => 'main',
    ],
    'history' => [
        'controller' => 'history',
        'action' => 'index',
    ],

];
