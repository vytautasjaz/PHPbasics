<?php

//kryptis nusakoma vaziavimo kryptimi pagal laikrodzio rodykle;
// pusukis i desine - true, i kaire - false;

$posukiai = [
    [
        'kryptis' => true,
        'laipsnis' => 90
    ],
    [
        'kryptis' => false,
        'laipsnis' => 160
    ],
    [
        'kryptis' => true,
        'laipsnis' => 180
    ],
    [
        'kryptis' => false,
        'laipsnis' => 110
    ],
    [
        'kryptis' => false,
        'laipsnis' => 180
    ],
    ['kryptis' => true,
        'laipsnis' => 100
    ]
];

var_dump($posukiai);
