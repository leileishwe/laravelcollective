@extends('layout')

@section('content')	

	{{ Form::open([
	
		'action' => "ProductController@store",
		'method' => "POST",
		'files' => true
	]) }}
	
		@include('products.form')

		<div class="form-group">
			<label>Image</label>
			<input type="file" name="image" class="form-control">
		</div>

		<div class="form-group">


			<label>Category</label>

			{{ Form::select('category_id[]', $categories, null, ['class' => 'form-control', 'multiple' => 'multiple']) }}
	
		</div>

		<button class="btn btn-primary">Create Product</button>
	{{ Form::close() }}
@endsection