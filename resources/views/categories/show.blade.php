@extends('layouts.main')

@section('content')

<section class="categories" id="categories-instance">

	@if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
	@endif
	
	<a href="{{ action('CategoriesController@index') }}" class="back-link"><i class="far fa-arrow-alt-circle-left"></i> Back to categories</a>

	<h1 class="text-center">{{ $category->name }}</h1>

	<div class="row" style="height: 800px;">
		
		<div class="col-sm-12 col-md-5">
			<div class="questions-heading d-flex justify-content-between align-items-center">
				<h3>Questions</h3>
				<i class="fas fa-plus-square fa-2x text-success" data-toggle="modal" data-target="#addCard"></i>
			</div>			
			{{-- <ul class="list-group">
				@foreach($cards as $card)
					<li class="list-group-item">
						{{ $card->question }}
					</li>
				@endforeach
			</ul> --}}
			<question-list :cards="{{ $cards }}"></question-list>
		</div>
		
		<div class="col-sm-12 col-md-2"></div>

		<div class="col-sm-12 col-md-5 d-flex">
{{-- 			<div class="card" style="height: 70%; width: 100%; margin: auto 0;">
				<div class="card-body d-flex align-items-center">
					<div class="card-text">Click a question</div>
				</div>
			</div> --}}
			<flashcard></flashcard>
		</div>

	</div>

</section>

@include('modals.add-flashcard')

@endsection
