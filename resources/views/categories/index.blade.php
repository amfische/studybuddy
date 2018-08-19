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
		<button class="btn btn-sm" data-toggle="modal" data-target="#addCategory">New Category</button>
	</div>
	

	<div class="row">
		@foreach ($categories as $c)
			<div class="col-sm-6 col-md-3" style="margin: 25px 0;">
				<div class="card-deck">
					<div class="card">
						{{-- <div class="card-img-top">
							<img src="{{ $img }}" alt="logo image">
						</div> --}}
						<div class="card-body">
							<h4 class="card-title">{{ $c->name }}</h4>
						</div>
						<div class="card-footer">
							<button class="btn" onclick="location.href='{{ url("categories/$c->id") }}'">View</button>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>

</section>

@include('modals.add-category')

@endsection
