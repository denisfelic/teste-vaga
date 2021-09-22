<?php

require_once __DIR__ . './Readable.php';
require_once __DIR__ . './iItem.php';

class Magazine extends Readable implements iItem
{
    private string $name;

    public function __construct(string $name, array $pages)
    {
        parent::__construct($pages);
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
