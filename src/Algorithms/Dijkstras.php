<?php

namespace Algorithms;

class Dijkstras
{
    private static array $processed = [];

    public static function reach(array $graph, array $costs, array $parents)
    {
        $node = self::findSmallestCostNode(
            $costs
        );

        while ($node) {
            $cost = $costs[$node];
            $neighbors = $graph[$node];

            foreach (array_keys($neighbors) as $key) {
                $newCost = $cost + $neighbors[$key];
                if ($newCost < $costs[$key]) {
                    $costs[$key] = $newCost;
                    $parents[$key] = $node;
                }
            }
            
           
            self::$processed[$node] = true;
            $node = self::findSmallestCostNode(
                $costs
            );
        }
        return $costs['Fin'];
    }

    private static function findSmallestCostNode(array $costs)
    {
        $smallestCost = PHP_INT_MAX;

        foreach ($costs as $key => $value) {
            if (isset(self::$processed[$key])) continue;

            if ($smallestCost >  $value ) {
                $smallestCost  = $value;
            }
        }
        return isset($smallestCost) && $smallestCost != PHP_INT_MAX  ? array_search($smallestCost , $costs) : false;
    }
}