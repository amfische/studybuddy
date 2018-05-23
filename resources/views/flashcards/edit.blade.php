@extends('layouts.main')

@section('content')
	
	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif

	{{ Form::open(['action' => ['FlashcardsController@update', $card->id], 'method' => 'put']) }}
		<text-area-block card-data="{{ $card->question }}" type="question" size="10"></text-area-block>
		<text-area-block card-data="{{ $card->answer }}" type="answer" size="20"></text-area-block>
		<input type="submit" class="btn btn-primary" value="Save">
	{{ Form::close() }}



@endsection