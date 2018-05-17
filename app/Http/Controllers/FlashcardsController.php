<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Flashcard;

class FlashcardsController extends Controller
{

  public function create(Request $request)
  {
  	return view('flashcards.create');
  }

  public function store(Request $request)
  {
    $category = Category::find($request->category_id);

    $f = new Flashcard;
    $f->category_id = $request->category_id;
    $f->question = $request->question;
    $f->answer = $request->answer;
    $f->category = $category->name;
    $f->save();

    return back()->with('status', 'Flashcard Created');
  }
}
