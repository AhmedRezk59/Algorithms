<?php

use Algorithms\Dijkstras;

require('./vendor/autoload.php');

$graph = [
    'start' => [
        'A' => 6,
        'B' => 2,
    ],
    "A" => [
        "Fin" => 1
    ],
    "B" => [
        "A" => 3,
        "Fin" => 5,
    ],
    "Fin" => []
];

$costs = [
    "A" => 6,
    "B" => 2,
    "Fin" => PHP_INT_MAX,
];

$parents = [
    "A" => "start",
    "B" => "start",
    "Fin" => null
];

var_dump( Dijkstras::reach($graph,$costs,$parents));
