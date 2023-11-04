<?php

namespace Algorithms;

use SplQueue;

class BreadthFirstSearch
{
    public static function search(SplQueue $queue): Node|bool
    {
        while (!$queue->isEmpty()) {
            $first = $queue->dequeue();
            if (! $first->getSearched() && $first->isMangoSeller) {
                return $first;
            } else {
                $first->setSearched = true;
                foreach ($first->friends as $f) {
                    $queue->enqueue($f);
                }
            }
        }
        
        return false;
    }
}