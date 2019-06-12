<?php

return [
    'blog(?:/([0-9/]+)){1}' => [
        'controller' => 'blog',
        'action' => 'article',
    ],
    'blog' => [
        'controller' => 'blog',
        'action' => 'index',
    ],
    'main' => [
        'controller' => 'main',
        'action' => 'index',
    ],
];