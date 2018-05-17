@extends('layouts.master')

@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{ route('fc-index') }}">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Create Question</li>
	  </ol>
	</nav>
	<div class="row">
		<div class="offset-md-3 col-md-6">
			<h1>Create new flashcard</h1>
		</div>
		<div class="offset-md-3 col-md-6">
			{{ Form::open(['route' => 'addCategory', 'class' => 'form'])}}
				<div class="form-group">
					{{ Form::select('Category', ['javascript' => 'JavaScript', 'php' => 'PHP', 'ubuntu' => 'Ubuntu'], null, ['class' => 'form-control', 'placeholder' => 'Category'])}}
				</div>
				<div class="form-group">
					{{ Form::label('question', 'Question')}}
					{{ Form::text('question', null, ['class' => 'form-control']) }}
				</div>
				<div class="form-group">
					{{ Form::label('answer', 'Answer')}}
					{{ Form:: textarea('answer', null, ['class' => 'form-control']) }}
				</div>
				{{ Form::submit('Create flashcard', ['class' => 'btn btn-primary'])}}
			{{ Form::close() }}
		</div>
	</div>
@endsection