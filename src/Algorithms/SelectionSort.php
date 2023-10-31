<?php

namespace Algorithms;

class SelectionSort
{
    public static function sort(array $arr): array
    {
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $count; $j++) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
        return $arr;
    }
}