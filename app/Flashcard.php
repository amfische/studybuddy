<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flashcard extends Model
{
    public function Category()
    {
    	return $this->belongsTo('App\Category');
    }
}
