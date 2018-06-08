@extends('layouts.main')

@section('content')

<section class="row">
	<div class="col-md-6 offset-md-3">
		<flashcards :flashcards="{{ $flashcards }}" :category="{{ $category }}"></flashcards>		
	</div>
	
</section>

@endsection