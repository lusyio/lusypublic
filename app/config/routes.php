<?php

return [
    'article/([0-9/]+){1}' => [
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
];