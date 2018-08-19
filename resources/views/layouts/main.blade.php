<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>{{ env('APP_NAME') }}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>
<body>
	{{-- <nav class="navbar navbar-dark" style="background-color: #caebf2"> --}}
		<nav class="navbar">
		<div class="container">
			<a class="navbar-brand">StudyBuddy</a>	
		</div>
		
		{{-- <div class="container d-flex justify-content-end">
			<ul class="navbar-nav">
				<li class="nav-item">
					<button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#addCard">Add Card</button>
				</li>
				<li class="nav-item">
					<button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#addCategory">Add Category</button>
				</li>
			</ul>
		</div> --}}
	</nav>

	{{-- <nav>
		<div class="navbar-logo">
			StudyBuddy
		</div>
	</nav> --}}

	<div class="container" id="app">
		@yield('content')	
	</div>
	
	{{-- @include('modals.add-category') --}}
	{{-- @include('modals.add-flashcard') --}}

	<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
