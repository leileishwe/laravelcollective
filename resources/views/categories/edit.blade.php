@extends('layout')

@section('content')
	
	{{ Form::model($category, [
		'action' => ['CategoryController@update', $category->id],
		'method' => "PUT"
	]) }}

		@include('categories.form')

		<button class="btn btn-primary">Update Category</button>
	{{ Form::close()}}

	<!-- <form 
		action="{{ action('CategoryController@update', $category->id) }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" value="{{ $category->name }}" class="form-control">
		</div>

		<div class="form-group">
			<label>Description</label>
			<textarea name="description" rows="10" class="form-control">{{ $category->description }}</textarea>
		</div>

		<button class="btn btn-primary">Update Category</button>
	</form> -->
@endsection