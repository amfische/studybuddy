@extends('layouts.main')

@section('content')

<section class="categories">

	{{-- 	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif --}}
	
	<div class="heading-index d-flex justify-content-between align-items-center">
		<h1>Categories</h1>
		<button class="btn btn-info" data-toggle="modal" data-target="#addCategory">Add Category</button>
	</div>
	

	<div class="row">
		@foreach ($categories as $c)
			<div class="col-sm-12 col-md-4" style="margin: 25px 0;">
				<div class="card" style="background-color: {{ $c->color }}">
					<a href="{{ action('CategoriesController@show', ['id' => $c->id]) }}">
						<div class="card-body">
							<h4 class="card-title text-white text-center">{{ $c->name }}</h4>
						</div>
					</a>
				</div>
			</div>
		@endforeach
	</div>

</section>

@include('modals.add-category')

@endsection
