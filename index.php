<?php

use Algorithms\QuickSort;

require('./vendor/autoload.php');
var_dump(
    QuickSort::sort([1, 4, 3, 2, 5]),
    QuickSort::sort([13, 4, 32, 22, 50]),
    QuickSort::sort([100, 40, 31, 22, 5]),
    QuickSort::sort([854, 754, 31, 78, 102]),
    QuickSort::sort([854, 754, 31, 78, 102,102])
);