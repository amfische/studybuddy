@extends('layouts.main')

@section('content')

<section class="flashcards">
	
	<div class="heading d-flex justify-content-between align-items-center">
		<h1><a href="{{ route('showCategory', [$card->category_id]) }}"><i class="fas fa-arrow-circle-left"></i></a> {{ $card->category->name }} | Edit</h1>	
		<h5>Flashcards support Markdown, <a href="https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet" target="_blank">Cheatsheet</a></h5>
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
