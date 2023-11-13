<?php

use Algorithms\MergeSort;

require('./vendor/autoload.php');

var_dump(
    implode('|',MergeSort::sort([5, 3, 4, 3, 23, 43, 12])),
    implode('|',MergeSort::sort([2, 1, 4,3, 5]))
);
