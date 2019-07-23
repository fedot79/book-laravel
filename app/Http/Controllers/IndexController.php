<?php

namespace Book\Http\Controllers;

use Book\Categories;
use Book\Repositories\MenuRepository;
use Illuminate\Http\Request;
use Book\Repositories\SliderRepository;
use Book\Repositories\BooksRepository;
use Illuminate\Support\Facades\Config;

class IndexController extends SiteController
{

    public function __construct(SliderRepository $s_rep,BooksRepository $b_rep)
    {
        parent::__construct(new MenuRepository(new Categories()));
        $this->s_rep = $s_rep;
        $this->b_rep = $b_rep;
        $this->bar = 'left';
        $this->template = env('THEME').'.index';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = $this->getBooks();
        $newBooks = $this->getNew();
       $content = view(env('THEME').'.content')->with('books',$books)->render();
       $this->vars = array_add($this->vars,'content',$content);

        $sliderItems = $this->getSliders();

        $sliders = view(env('THEME').'.slider')->with('sliders',$sliderItems)->render();
        $this->vars = array_add($this->vars,'sliders',$sliders);
        return $this->renderOutput();
    }

    protected function getNew(){
        $newBooks = $this->b_rep->get(['created_at'],Config::get('settings.home_port_count'));
        return $newBooks;
    }

    protected function getBooks(){
        $books = $this->b_rep->get('*',Config::get('settings.home_port_count'));

        return $books;

    }

    public function getSliders(){
        $sliders = $this->s_rep->get();

        return $sliders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
