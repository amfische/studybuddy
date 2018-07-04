@extends('layouts.main')

@section('content')

<section class="row categories">

	<a href="{{ route('showCategory', [$category->id]) }}" class="back-link col-sm-12"><i class="far fa-arrow-alt-circle-left"></i> Back to {{ $category->name }}</a>

	<div class="col-md-3">
		<study-options></study-options>
	</div>

	<div class="col-md-8">
		<flashcards :allcards="{{ $flashcards }}" :category="{{ $category }}"></flashcards>		
	</div>
	
</section>

@endsection