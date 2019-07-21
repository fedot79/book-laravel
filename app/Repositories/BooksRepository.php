<?php

namespace Book\Repositories;

use Book\Books;
use Book\Categories;

class BooksRepository extends \Book\Repositories\Repository{

    public function __construct(Books $books)
    {
        $this->model = $books;
    }

}
