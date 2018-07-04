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
    $request->validate([
      'question' => 'required',
      'answer' => 'required'
    ]);

    $f = new Flashcard;
    $f->category_id = $category->id;
    $f->question = $request->question;
    $f->answer = $request->answer;
    $f->save();

    return redirect()->route('showCategory', ['id' => $category->id])->with('status', 'Flashcard Created');
  }

  public function edit(Category $category, Flashcard $flashcard)
  {
    return view('flashcards.edit', ['card' => $flashcard]);
  }

  public function update(Request $request, Category $category, Flashcard $flashcard)
  {
    $request->validate([
      'question' => 'required',
      'answer' => 'required'
    ]);
    
    $flashcard->question = $request->question;
    $flashcard->answer = $request->answer;
    $flashcard->save();

    return redirect()->route('showCategory', ['id' => $category->id])->with('status', 'Flashcard Updated');
  }

  public function statusUpdate(Request $request) 
  {
    $f = Flashcard::find($request->id);
    $f->known = $request->checked ? 1 : 0;
    $f->save();

    return 'success';
  }
}
