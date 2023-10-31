<?php


require('./vendor/autoload.php');

use Algorithms\BinarySearch;

var_dump(
    BinarySearch::search(range(1,100),99),
    BinarySearch::search(range(0,100),932),
    BinarySearch::search(range(0,100),91),
    BinarySearch::search(range(0,100),92),
    BinarySearch::search(range(0,100),65),
    BinarySearch::search(range(0,100),49),
    BinarySearch::search(range(0,100),0),
    BinarySearch::search(range(0,100),69),
    BinarySearch::search(range(0,100),51),
    BinarySearch::search(range(0,100),53),
    BinarySearch::search(range(0,100),22),
    BinarySearch::search(range(0,100),34),
    BinarySearch::search(range(0,100),12),
);