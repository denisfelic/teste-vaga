<?php

abstract class Readable
{
    private array $pages = [];

    public function __construct(array $pages)
    {
        $this->pages = $pages;
    }

    function read(int $page): string
    {
        // Page not found
        if ($page > count($this->pages))
            return -1;

        return $this->pages[$page];
    }
}
