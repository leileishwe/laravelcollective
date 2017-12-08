@extends('layout')

@section('content')
	<a href="{{ action('CategoryController@create') }}" class="btn btn-primary">Create</a>

	@foreach($categories as $category)	
		<h1>{{ $category->name }}</h1>
		<p>
			{{ $category->description }}
		</p>

		{{ Form::open([
			'action' => ['CategoryController@destroy', $category->id],
			'method' => "DELETE"
		]) }}

		<a href="{{ action('CategoryController@show', $category->id) }}" class="btn btn-primary">Detail</a>

		<a href="{{ action('CategoryController@edit', $category->id) }}" class="btn btn-info">Edit</a>

		<a href="{{ action('CategoryController@destroy', $category->id) }}" class="btn btn-danger">Delete</a>

		<hr>
		{{ Form::close()}}
	@endforeach

@endsection