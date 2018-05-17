@extends('layouts.master')

@section('content')

<div class="welcome-page">
	<h1>Welcome to StudyBuddy</h1>
	<h5>A flashcard application to help me learn web development!</h5>
	<a class="btn btn-primary" href="{{ action('CategoriesController@index') }}">Lets gooo!</a>
</div>

@endsection
