<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function flashcards()
    {
    	return $this->hasMany('App\Flashcard');
    }
}
