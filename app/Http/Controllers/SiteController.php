<?php

namespace Book\Http\Controllers;

use Book\Repositories\MenuRepository;
use Illuminate\Http\Request;



class SiteController extends Controller
{
    /*top menu*/
    protected $m_rep;

    protected $p_rep;
    /*slider*/
    protected $s_rep;
    /*books*/
    protected $b_rep;
    /*templates*/
    protected $template;

    protected $vars = array();

    /*sidebars*/
    protected $contentRightBar = FALSE;
    protected $contentLeftBar = FALSE;
    protected $bar = FALSE;

    public function __construct(MenuRepository $m_rep)
    {
        $this->m_rep = $m_rep;

    }

    protected function renderOutput(){

        $categories = $this->getCategories();



        $menu = view(env('THEME').'.menu')->render();
        $this->vars = array_add($this->vars,'menu',$menu);


        return view($this->template)->with($this->vars);
    }
    protected function getCategories(){
        $categories = $this->m_rep->get();
        return $categories;
    }

}
