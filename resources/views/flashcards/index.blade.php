@extends('layouts.main')

@section('content')
	
	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
	@endif

	<div class="cards-index">
		<h1 class="text-center">Click on a deck and start studying!</h1>
		{{-- <a href="{{ route('fc-create')}}">create question</a>	 --}}
	</div>

	<div class="row">
		@foreach ($categories as $c)
			<div class="col-sm-12 col-md-4" style="margin: 25px 0;">
				<div class="card" style="background-color: {{ $c->color }}">
					<a href="{{ route('view-category', ['id' => $c->id]) }}">
						<div class="card-body">
							<h2 class="card-title text-white text-center">{{ $c->name }}</h2>
						</div>
					</a>
				</div>
			</div>
		@endforeach
	</div>



@endsection