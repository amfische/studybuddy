@extends('layouts.main')

@section('content')

<section class="categories index">

	{{-- 	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif --}}
	
	<div class="heading d-flex justify-content-between align-items-center">
		<h1>Categories</h1>
		<button class="btn btn-info" data-toggle="modal" data-target="#addCategory">Add Category</button>
	</div>
	

	<div class="row">
		@foreach ($categories as $c)
			<div class="col-sm-12 col-md-4" style="margin: 25px 0;">
				<div class="card-deck">
					<div class="card border-dark">
						<div class="card-img-top">
							<img src="{{ $img }}" alt="logo image">
						</div>
						<div class="card-body">
							<h4 class="card-title">{{ $c->name }}</h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce condimentum sit amet metus quis euismod. Vivamus rhoncus condimentum neque fermentum mollis. Fusce commodo nulla sapien, a accumsan ligula ultricies nec. In et molestie dolor.</p>
						</div>
						<div class="card-footer">
							<button class="btn btn-sm btn-dark float-right" onclick="location.href='{{ url("categories/$c->id") }}'">Enter</button>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>

</section>

@include('modals.add-category')

@endsection
