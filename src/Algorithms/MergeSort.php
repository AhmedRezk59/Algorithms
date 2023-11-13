<?php

namespace Algorithms;

class MergeSort
{
    public static function sort(array $arr):array
    {
        if(count($arr) < 2) return $arr;

        $high = count($arr);
        $low = 0;
        $mid = ($high + $low) / 2;
        $left = self::sort(array_slice($arr , $low , $mid));
        $right = self::sort(array_slice($arr , $mid ));

        return self::merge($left,$right);
    }

    private static function merge($left , $right):array
    {
        $res = [];
        while(count($left) > 0 && count($right) > 0){
            if($left[0] > $right[0]){
                $res[] = $right[0];
                $right = array_slice($right , 1);
            }else{
                $res[] = $left[0];
                $left = array_slice($left , 1);
            }
        }

        while (count($left) > 0)
        {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }

        while (count($right) > 0)
        {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }

        return $res;
    }
}