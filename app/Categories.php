<?php

namespace Book;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function books(){
        return $this->hasMany('Book\Books');
    }
}
