<?php
namespace Book\Repositories;

use Book\Categories;



class MenuRepository extends Repository  {

    public function __construct(Categories $categories)
    {
        $this->model = $categories;
    }


}
