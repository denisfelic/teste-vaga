<?php


require_once __DIR__ . './Readable.php';
require_once __DIR__ . './iItem.php';

class Book extends Readable implements iItem
{
    private string $title;
    private string $author;

    public function __construct(string $title, string $author, array $pages)
    {
        parent::__construct($pages);
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
}
