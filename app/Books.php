<?php

namespace Book;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function filter(){
        return $this->belongsTo('Book\Categories','category_id','id');
    }
}
