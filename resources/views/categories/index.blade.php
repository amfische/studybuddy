@extends('layouts.main')

@section('content')

<section class="categories">

	{{-- 	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif --}}

	<h1 class="text-center">Choose a Category</h1>

	<div class="row">
		@foreach ($categories as $c)
			<div class="col-sm-12 col-md-4" style="margin: 25px 0;">
				<div class="card" style="background-color: {{ $c->color }}">
					<a href="{{ action('CategoriesController@show', ['id' => $c->id]) }}">
						<div class="card-body">
							<h2 class="card-title text-white text-center">{{ $c->name }}</h2>
						</div>
					</a>
				</div>
			</div>
		@endforeach
	</div>

</section>



@endsection