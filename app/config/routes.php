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
    'partners' => [
        'controller' => 'partners',
        'action' => 'index',
    ],
    'help' => [
        'controller' => 'help',
        'action' => 'index',
    ],
    'help/first' => [
        'controller' => 'help',
        'action' => 'first',
    ],
    'help/tasks' => [
        'controller' => 'help',
        'action' => 'tasks',
    ],
    'help/achievements' => [
        'controller' => 'help',
        'action' => 'achievements',
    ],
    'help/ceo' => [
        'controller' => 'help',
        'action' => 'ceo',
    ],
    'help/communication' => [
        'controller' => 'help',
        'action' => 'communication',
    ],
    'help/questions' => [
        'controller' => 'help',
        'action' => 'questions',
    ],
];
