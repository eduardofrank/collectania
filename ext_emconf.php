<?php

/**
 * Extension Manager/Repository config file for ext "collectania".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'collectania',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EduardoFrank\\Collectania\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Eduardo  Frank',
    'author_email' => 'edfrank@gmail.com',
    'author_company' => 'Eduardo  Frank',
    'version' => '1.0.0',
];
