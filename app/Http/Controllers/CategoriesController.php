<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Flashcard;

class CategoriesController extends Controller
{
	public function index()
	{
		$c = Category::all();
		return view('categories.index', ['categories', $c]);
	}

	public function show($id)
  {
    $category = Category::find($id);
    $cards = Flashcard::where('category_id', $id)->get();

    $categories = array();
    foreach (Category::all() as $c) {
    	$categories[$c->id] = $c->name;
    }

    $data = [
    	'category' => $category,
    	'categories' => $categories,
    	'cards' => $cards
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

}
