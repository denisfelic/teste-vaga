<?php

require_once __DIR__ . './Readable.php';
require_once __DIR__ . './iItem.php';

class Notebook extends Readable implements iItem
{
    private string $owner;

    public function __construct(string $owner, array $pages)
    {
        parent::__construct($pages);
        $this->owner = $owner;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }
}
