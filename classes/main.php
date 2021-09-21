<?php

require_once __DIR__ . './Bookshelf.php';
require_once __DIR__ . './Notebook.php';

$bookShelf = new Bookshelf(5);

$notebook = new Notebook(["Page 1", "Page 2", "Page 3"]);

$bookShelf->store($notebook);

echo $bookShelf->get
