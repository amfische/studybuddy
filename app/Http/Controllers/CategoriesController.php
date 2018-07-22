<?php

namespace App\Http\Controllers;

use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Category;
use App\Flashcard;

class CategoriesController extends Controller
{
	public function index()
	{
		$c = Category::all();
    $img = Storage::disk('public')->url('images/js-logo.png');
		return view('categories.index', ['categories' => $c, 'img' => $img]);
	}

	public function show(Category $category)
  {
    $cards = Flashcard::where('category_id', $category->id)->get();

    foreach ($cards as $card) {
      $card->question = Markdown::convertToHtml($card->question);
    }

    $data = [
    	'category' => $category,
    	'cards' => $cards->toJson(),
      'img' => Storage::disk('public')->url('images/js-logo.png')
    ];

  	return view('categories.show', $data);
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|unique:categories,name',
      'color' => 'required|unique:categories,color'
    ]);

    $c = new Category;
    $c->name = $request->name;
    $c->color = $request->color;
    $c->save();
    
    return redirect('flash-cards')->with('status', 'Category Created');
  }

  public function study(Category $category)
  {
    $flashcards = Flashcard::where('category_id', $category->id)->get();

    foreach ($flashcards as $f) {
      $f->question = Markdown::convertToHtml($f->question);
      $f->answer = Markdown::convertToHtml($f->answer);
    }

    return view('categories.study', ['flashcards' => $flashcards, 'category' => $category]);
  }

}
