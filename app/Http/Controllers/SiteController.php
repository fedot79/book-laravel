<?php

namespace Book\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

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

    public function __construct()
    {

    }

    protected function renderOutput(){


        return view($this->template)->with($this->vars);
    }

}
