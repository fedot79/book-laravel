<?php

namespace Book;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function book(){
        return $this->belongsTo('Book\Books');
    }

    public function user(){
        return $this->belongsTo('Book\User');
    }
}
