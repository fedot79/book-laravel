<?php
namespace Book\Repositories;

use Book\Slider;



class SliderRepository extends Repository  {

    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }


}

