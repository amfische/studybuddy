@extends('layouts.main')

@section('content')

<section class="row categories">

	<a href="{{ action('CategoriesController@show', [$category->id]) }}" class="back-link col-sm-12"><i class="far fa-arrow-alt-circle-left"></i> Back to {{ $category->name }}</a>

	<div class="col-md-6 offset-md-3">
		<flashcards :flashcards="{{ $flashcards }}" :category="{{ $category }}"></flashcards>		
	</div>
	
</section>

@endsection