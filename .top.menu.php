<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$aMenuLinks = [
    [
        'Главная',
        '/',
        [],
        [],
        '',
    ],
    [
        'О компании',
        '/company/',
        [],
        [],
        '',
    ],
    [
        'Услуги',
        '/services/',
        [],
        [
            'SUBMENU' => [
                ['TEXT' => 'Аренда строительных лесов', 'LINK' => '/services/rent-scaffolding/'],
                ['TEXT' => 'Продажа строительных лесов', 'LINK' => '/services/sale-scaffolding/'],
                ['TEXT' => 'Леса строительные б/у', 'LINK' => '/services/scaffolding-used/'],
                ['TEXT' => 'Аренда вышки туры', 'LINK' => '/services/tower-rental/'],
            ],
        ],
        '',
    ],
    [
        'Фотогалерея',
        '/gallery/',
        [],
        [],
        '',
    ],
    [
        'Контакты',
        '/contacts/',
        [],
        [],
        '',
    ],
];
