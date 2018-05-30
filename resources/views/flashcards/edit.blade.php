@extends('layouts.main')

@section('content')

<section class="flashcards">
	
	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif

	<a href="{{ action('CategoriesController@show', [$card->category_id]) }}" class="back-link">
		<i class="far fa-arrow-alt-circle-left"></i> Back to {{ $card->category->name }}
	</a>

	<div class="heading-show d-flex flex-column align-items-end">
		<h1>Edit</h1>
		<h5>Flashcards support Markdown | <a href="https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet" target="_blank">Cheatsheet</a></h5>
	</div>	

	{{ Form::open(['action' => ['FlashcardsController@update', $card->category_id, $card->id ], 'method' => 'put']) }}
		<text-area-block card-data="{{ $card->question }}" type="question" size="5"></text-area-block>
		<text-area-block card-data="{{ $card->answer }}" type="answer" size="20"></text-area-block>
		<div class="row">
			<div class="col-sm-12 d-flex justify-content-end">
				<input type="submit" class="btn btn-primary btn-md" value="Update">
			</div>
		</div>		
	{{ Form::close() }}

</section>

@endsection
