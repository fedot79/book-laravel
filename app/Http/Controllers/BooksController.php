<?php

namespace Book\Http\Controllers;

use Book\Categories;
use Book\Repositories\MenuRepository;
use Illuminate\Http\Request;

use Book\Repositories\SliderRepository;
use Book\Repositories\BooksRepository;
use Illuminate\Support\Facades\Config;


class BooksController extends SiteController
{
    public function __construct(BooksRepository $b_rep)
    {
        parent::__construct(new MenuRepository(new Categories()));

        $this->b_rep = $b_rep;
        $this->bar = 'left';
        $this->template = env('THEME').'.category';
    }

    public function index()
    {
        $books = $this->getBooks();
        $content = view(env('THEME').'.category_page')->with('books',$books)->render();
        $this->vars = array_add($this->vars,'content',$content);
        return $this->renderOutput();
    }

    public function getBooks($category = false)
    {
        $books = $this->b_rep->get('*',false,true);

       if ($books){
          // $books->load('categories');
       }
       return $books;

    }
}
