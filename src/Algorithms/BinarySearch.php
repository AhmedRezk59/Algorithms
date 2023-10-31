<?php

namespace Algorithms;

class BinarySearch
{
    public static function search(array $arr, $key): mixed
    {
        $high = count($arr) - 1;
        $low = 0;

        while ($high + 1 >= $low) {
            $mid = $low + ($high - $low) / 2;
            $midEl = $arr[round($mid)];
            if ($midEl == $key) {
                return abs(round($mid));
            } elseif ($midEl > $key) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }

        return -1;
    }    
}