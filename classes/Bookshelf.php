<?php

class Bookshelf
{

    private array $items = [];
    private int $maxCapacity = 0;
    private int $currentItemQuantity = 0;

    public function __construct(int $capacity)
    {
        $this->maxCapacity = $capacity;
        $this->currentItemQuantity  = 0;
    }


    /**
     * Store an item in the Array of Items
     */
    public function storeItem(iItem $item): void
    {
        // The list is full
        if ($this->currentItemQuantity >= $this->maxCapacity) {
            echo "The Bookshelf is full" . PHP_EOL;
            return;
        }
        $this->currentItemQuantity++;
        array_push($this->items, $item);
    }

    /**
     * Retrieve an item in the Array of Items
     */
    public function getItem(int $id): iItem
    {
        // Id is on range of the current quantity of items
        if ($id > 0 && $id < $this->currentItemQuantity) {
            return $this->items[$id];
        }
    }

    /**
     * Report the current state of the Bookshelf
     */
    public function reporting(): void
    {
        echo "Items on Bookshelf: {$this->currentItemQuantity}" . PHP_EOL;
        echo "How many you can store: {($this->maxCapacity - $this->currentItemQuantity)}" . PHP_EOL;
    }
}
