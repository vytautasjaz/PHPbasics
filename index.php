<?php

//pirma eile - 1 keglis

$kegliai = [
    ['svarus' => 1,
        'kegliai' => [
            'eile' => [
                ['pirma' => [0]],
                ['antra' => [0, 1]],
                ['trecia' => [0, 0, 1]],
                ['ketvirta' => [1, 0, 0, 1]]
            ],
        ],
    ],
    ['svarus' => 0,
        'kegliai' => [
            'eile' => [
                ['pirma' => [0]],
                ['antra' => [0, 0]],
                ['trecia' => [0, 0, 0]],
                ['ketvirta' => [0, 0, 0, 0]]
            ],
        ],
    ],
];

var_dump($kegliai);
