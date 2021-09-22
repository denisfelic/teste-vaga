<?php

require_once __DIR__ . './Bookshelf.php';
require_once __DIR__ . './Notebook.php';
require_once __DIR__ . './Magazine.php';
require_once __DIR__ . './Book.php';

$bookShelf = new Bookshelf(5);

$notebook1 = new Notebook("Owner1", ["Page 1", "Page 2", "Page 3"]);
$notebook2 = new Notebook("Owner2", ["Page 1", "Page 2", "Page 3", "Page 4"]);

$magazine1 = new Magazine("Magazine1", ["Page 1", "Page 2"]);
$magazine2 = new Magazine("Magazine2", ["Page 1", "Page 2", "Page 3"]);

$book1 = new Book("BookTitle1", "Fulano de Tal", ["Page1", "Page2,", "Page3"]);

// It will not be stored because don't have space
$book2 = new Book("BookTitle2", "Fulano de Tal2", ["Page1", "Page2,", "Page3", "Page4"]);

$bookShelf->storeItem($notebook1);
$bookShelf->storeItem($notebook2);
$bookShelf->storeItem($magazine1);
$bookShelf->storeItem($magazine2);
$bookShelf->storeItem($book1);
$bookShelf->storeItem($book2);
$bookShelf->reporting();


$copyOfNotebook2 = $bookShelf->getItem(1);
echo "Notebook2 Owner: {$notebook2->getOwner()}" . PHP_EOL;
echo "Reading the {$copyOfNotebook2->read(3)}" . PHP_EOL;
