@extends('layouts.main')

@section('content')

<section class="flashcards">

	<a href="{{ route('showCategory', [$category->id]) }}" class="back-link">
		<i class="far fa-arrow-alt-circle-left"></i> Back to Questions
	</a>
	
	<div class="heading d-flex justify-content-between align-items-center">
		<h1>{{ $category->name }}</h1>
		<div class="d-flex flex-column align-items-end">
			<h2>Create</h2>
			<h5>Flashcards support Markdown | <a href="https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet" target="_blank">Cheatsheet</a></h5>
		</div>		
	</div>
	

	{{ Form::open(['route' => ['storeCard', $category->id], 'method' => 'post']) }}
		<text-area-block card-data="" type="question" size="10"></text-area-block>
		<text-area-block card-data="" type="answer" size="10"></text-area-block>
		<div class="row">
			<div class="col-sm-12 d-flex justify-content-end">
				<input type="submit" class="btn btn-primary btn-md" value="Create">
			</div>
		</div>		
	{{ Form::close() }}

</section>

@endsection
