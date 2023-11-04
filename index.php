<?php

use Algorithms\BreadthFirstSearch;
use Algorithms\Node;

require('./vendor/autoload.php');
$sara = new Node('Sara' , true);
$lara = new Node('Lara' , false,[$sara]);
$bob = new Node('Bob' , false , [$lara]);
$ahmed = new Node('Ahmed' , true);
$queue = new SplQueue();
$queue->enqueue($bob);
$queue->enqueue($ahmed);

var_dump(
    BreadthFirstSearch::search($queue)
);