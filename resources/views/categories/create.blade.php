@extends('layout')

@section('content')
	<h1>Create Category</h1>
	{{
		Form::open([

		"action" => "CategoryController@store",

		"method" => "POST"
		
		])
	}}
	

		@include('categories.form')


		<button class="btn btn-primary">Create Category</button>

	{{
		Form::close()
	}}
@endsection


