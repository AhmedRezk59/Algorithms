<?php

use Algorithms\SelectionSort;

require('./vendor/autoload.php');
echo "<pre>";
var_dump(
    SelectionSort::sort([1,4,3,2,5]),
    SelectionSort::sort([13,4,32,22,50]),
    SelectionSort::sort([100,40,31,22,5]),
);
echo "<pre>";