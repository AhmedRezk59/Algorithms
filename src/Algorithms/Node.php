<?php

namespace Algorithms;

class Node
{
    private bool $searched = false;

    /**
     * Node of Gragh
     *
     * @param string $name
     * @param boolean $isMangoSeller
     * @param array<Node> $friends
     */
    public function __construct(public string $name, public bool $isMangoSeller, public array $friends = [])
    {
    }

    /**
     * Set the value of searched
     *
     * @return  self
     */
    public function setSearched(bool $searched)
    {
        $this->searched = $searched;

        return $this;
    }

    /**
     * Get the value of searched
     */
    public function getSearched(): bool
    {
        return $this->searched;
    }
}