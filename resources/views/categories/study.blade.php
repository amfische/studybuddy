@extends('layouts.main')

@section('content')

<section class="categories study">

	<div class="back-link-container">
		<a href="{{ route('showCategory', [$category->id]) }}">
			<i class="far fa-arrow-alt-circle-left"></i> Back to {{ $category->name }}
		</a>
	</div>
	
	<div class="row">
		<div class="col-lg-3 offset-lg-0 col-md-6 offset-md-3">
			<study-options></study-options>
		</div>
		<div class="col-lg-8">
			<flashcards :allcards="{{ $flashcards }}" :category="{{ $category }}"></flashcards>		
		</div>
	</div>
	
</section>

@endsection