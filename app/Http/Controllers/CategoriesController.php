<?php

namespace App\Http\Controllers;

use GrahamCampbell\Markdown\Facades\Markdown;
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
    $cards = Flashcard::where('category_id', $id)->paginate(5);

    foreach ($cards as $card) {
      $card->question = Markdown::convertToHtml($card->question);
    }

    // $categories = array();
    // foreach (Category::all() as $c) {
    // 	$categories[$c->id] = $c->name;
    // }

    $offset = 5;
    if (count($cards) % 5 !== 0) {
      $offset = (ceil(count($cards)/5) * 5) - count($cards);
    } else if (count($cards) % 5 === 0 && count($cards)) {
      $offset = 0;
    }

    $data = [
    	'category' => $category,
    	'cards' => $cards,
      'offset' => $offset
    ];
    // return $data;

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
