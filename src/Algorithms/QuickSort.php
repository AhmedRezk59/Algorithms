<?php

namespace Algorithms;

class QuickSort
{
    public static function sort(array $arr): array
    {
        if (count($arr) < 2) return $arr;

        $pivot = $arr[0];
        $lessThanPivot = [];
        $greaterThanPivot = [];
        $elementsAfterPivot = array_slice($arr, 1);
        
        foreach ($elementsAfterPivot as $ele) {
            if ($ele < $pivot) $lessThanPivot[] = $ele;
            else $greaterThanPivot[] = $ele;
        }
        
        return array_merge(self::sort($lessThanPivot) , [$pivot] , self::sort($greaterThanPivot));
    }
}