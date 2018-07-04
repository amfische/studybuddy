@extends('layouts.main')

@section('content')

<section class="categories show">

	<div class="d-flex back-link-container align-items-center">
		<a href="{{ route('allCategories') }}"><i class="far fa-arrow-alt-circle-left"></i> Back to categories</a>
		@if (session('status'))
	    <div class="alert alert-success flex-grow-1">
	      {{ session('status') }}
	      <i class="far fa-times-circle float-right"></i>
	    </div>
		@endif
	</div>
	

	<div class="heading-show d-flex justify-content-between align-items-center">
		<h1>{{ $category->name }}</h1>	
		<div class="actions">
			<a href="{{ route('study', ['category' => $category->id]) }}" class="btn btn-success">Study</a>
			<a href="{{ route('createCard', ['category' => $category->id]) }}" class="btn btn-info">Add Flashcard</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Question</th>
					<th scope="col">Known</th>
					<th scope="col">Review/Edit</th>
					<th scope="col">Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cards as $card)
					<tr class="text-center">
						<td>{{ $card->id }}</td>
						<td>{!! $card->question !!}</td>
						<td><checkmark :id="{{ $card->id }}" :studied="{{ $card->known }}"></checkmark></td>
						<td><a href="{{ route('editCard', ['flashcard' => $card->id, 'category' => $card->category_id]) }}"><i class="fas fa-edit"></i></a></td>
						<td><i class="fas fa-trash-alt"></i></td>
					</tr>
				@endforeach
				@for($i = 0; $i < $offset; $i++)
					<tr class="text-center extra-row">
						<td>#</td>
						<td><a href="{{ route('createCard', ['category' => $category->id]) }}">Add Question <i class="fas fa-plus-square"></i></a></td>
						<td><input type="checkbox" disabled></td>
						<td><i class="fas fa-edit disable"></i></td>
						<td><i class="fas fa-trash-alt disable"></i></td>
					</tr>
				@endfor
			</tbody>
		</table>
		{{ $cards->links() }}
	</div>

</section>

@endsection
