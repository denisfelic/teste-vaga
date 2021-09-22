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
            return "Page not found";

        return $this->pages[$page];
    }
}
