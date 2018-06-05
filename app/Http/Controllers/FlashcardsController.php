<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Flashcard;

class FlashcardsController extends Controller
{

  public function create(Category $category)
  {
  	return view('flashcards.create', ['category' => $category]);
  }

  public function store(Request $request, Category $category)
  {
    dd($category);
    
    $f = new Flashcard;
    $f->category_id = $request->category_id;
    $f->question = $request->question;
    $f->answer = $request->answer;
    $f->category = $category->name;
    $f->save();

    return back()->with('status', 'Flashcard Created');
  }

  public function edit(Category $category, Flashcard $flashcard)
  {
    // dd($category, $flashcard);

    return view('flashcards.edit', ['card' => $flashcard]);
  }

  public function update(Request $request, Category $category, Flashcard $flashcard)
  {
    // dd($request->all(), $flashcard);
    $flashcard->question = $request->question;
    $flashcard->answer = $request->answer;
    $flashcard->save();

    return view('flashcards.edit', ['card' => $flashcard]);
  }

  public function statusUpdate(Request $request) 
  {
    $f = Flashcard::find($request->id);
    $f->known = $request->checked ? 1 : 0;
    $f->save();

    return 'success';
  }
}
