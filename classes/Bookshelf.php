<?php

class Bookshelf
{

    private $items = [];
    private int $maxCapacity = 0;
    private int $totalItems = 0;

    public function __construct(int $capacity)
    {
        $this->maxCapacity = $capacity;
        $this->totalItems  = 0;
    }
    public function reporting(): void
    {

        echo "Items: {$this->totalItems}" . PHP_EOL;
        echo "How many can store: {($this->maxCapacity - $this->totalItems)}" . PHP_EOL;
    }


    public function store($item)
    {
        if ($this->totalItems > $this->maxCapacity) {
            echo "The Bookshelf is full" . PHP_EOL;
            return;
        }
        array_push($this->items, $item);
        $this->totalItems++;
    }


    public function get($item)
    {
    }
}
