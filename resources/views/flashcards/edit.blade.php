@extends('layouts.main')

@section('content')

<section class="flashcards">
	
	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif

	<a href="{{ action('CategoriesController@show', [$card->category_id]) }}" class="back-link">
		<i class="far fa-arrow-alt-circle-left"></i> Back to {{$card->category}}
	</a>

	{{ Form::open(['action' => ['FlashcardsController@update', $card->category_id, $card->id ], 'method' => 'put']) }}
		<text-area-block card-data="{{ $card->question }}" type="question" size="5"></text-area-block>
		<text-area-block card-data="{{ $card->answer }}" type="answer" size="20"></text-area-block>
		<div class="row">
			<div class="col-sm-12 d-flex justify-content-end">
				<input type="submit" class="btn btn-primary btn-md" value="Save">
			</div>
		</div>		
	{{ Form::close() }}

</section>

@endsection
