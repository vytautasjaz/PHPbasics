<?php

//pirma eile - 1 keglis

$takeliai = [
    ['svarus' => 1,
        'kegliai' => [
            'eile' => [
                [0],
                [0, 1],
                [0, 0, 1],
                [1, 0, 0, 1]
            ],
        ],
    ],
    ['svarus' => 0,
        'kegliai' => [
            'eile' => [
                [0],
                [0, 0],
                [0, 0, 0],
                [0, 0, 0, 0]
            ],
        ],
    ],
];

var_dump($takeliai);
