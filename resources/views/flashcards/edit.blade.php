@extends('layouts.main')

@section('content')

<section class="flashcards">

	<a href="{{ route('showCategory', [$card->category_id]) }}" class="back-link">
		<i class="far fa-arrow-alt-circle-left"></i> Back to Questions
	</a>
	
	<div class="heading d-flex justify-content-between align-items-center">
		<h1>{{ $card->category->name }}</h1>	
		<div class="d-flex flex-column align-items-end">
			<h2>Edit</h2>
			<h5>Flashcards support Markdown | <a href="https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet" target="_blank">Cheatsheet</a></h5>
		</div>
	</div>

	@if ($errors->any())
    <div class="alert alert-danger errors-msg-block">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
	@endif

	{{ Form::open(['route' => ['updateCard', $card->category_id, $card->id ], 'method' => 'put']) }}
		<text-area-block card-data="{{ $card->question }}" type="question" size="10"></text-area-block>
		<text-area-block card-data="{{ $card->answer }}" type="answer" size="10"></text-area-block>
		<div class="row">
			<div class="col-sm-12 d-flex justify-content-end">
				<input type="submit" class="btn btn-primary btn-md" value="Update">
			</div>
		</div>		
	{{ Form::close() }}

</section>

@endsection
