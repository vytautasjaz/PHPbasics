<?php

$array = [
    [
        'vardas' => 'Petras',
        'nickas' => 'Pizdys',
        'ginklas' =>
        [
            'pavadinimas' => 'telefonas',
            'statusas' => 'prapi*tas'
        ]
    ],
    [
        'vardas' => 'Tomas',
        'nickas' => 'Ablomas',
        'ginklai' => [
            'pavadinimas' => 'buljonas',
            'statusas' => 'naudojamas'
        ],
    ],
    [
        'vardas' => 'Ana',
        'nickas' => 'Shitkova',
        'ginklai' => [
            'pavadinimas' => 'rulonas',
            'statusas' => 'pasibaiges'
        ],
    ],
];

var_dump($array);
