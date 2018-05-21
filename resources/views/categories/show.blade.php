@extends('layouts.main')

@section('content')

<section class="categories" id="categories-instance">

	@if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
	@endif
	
	<a href="{{ action('CategoriesController@index') }}" class="back-link"><i class="far fa-arrow-alt-circle-left"></i> Back to categories</a>

	<div class="heading-show d-flex justify-content-between align-items-center">
		<h1>{{ $category->name }}</h1>	
		<div class="actions">
			<button class="btn btn-success">Study</button>
			<button class="btn btn-info" data-toggle="modal" data-target="#addCard">Add <i class="fas fa-plus-square"></i></button>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Question</th>
					<th scope="col">Known</th>
					<th scope="col">Review</th>
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cards as $card)
					<tr class="text-center">
						<td>{{ $card->id }}</td>
						<td>{{ $card->question }}</td>
						<td><input type="checkbox"></td>
						<td><i class="fas fa-eye"></i></td>
						<td><i class="fas fa-edit" data-toggle="modal" data-target="#editCard" data-info="{{ $card }}"></i></td>
						<td><i class="fas fa-trash-alt"></i></td>
					</tr>
				@endforeach
				@for($i = 0; $i < $offset; $i++)
					<tr class="text-center extra-row">
						<td>#</td>
						<td data-toggle="modal" data-target="#addCard">Add Question <i class="fas fa-plus-square"></i></td>
						<td><input type="checkbox" disabled></td>
						<td><i class="fas fa-eye disable"></i></td>
						<td><i class="fas fa-edit disable"></i></td>
						<td><i class="fas fa-trash-alt disable"></i></td>
					</tr>
				@endfor
			</tbody>
		</table>
		{{ $cards->links() }}
	</div>

</section>

{{-- <question-list :cards="{{ $cards }}"></question-list> --}}
{{-- <flashcard></flashcard> --}}

@include('modals.add-flashcard')
@include('modals.edit-flashcard')

@endsection
