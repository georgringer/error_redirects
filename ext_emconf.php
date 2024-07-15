<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Error Redirects',
    'description' => '',
    'category' => '',
    'author' => 'Georg Ringer',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'redirects' => '12.4.0-13.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
