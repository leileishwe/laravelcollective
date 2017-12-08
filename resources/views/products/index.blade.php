@extends('layout')

@section('content')

	<a href="{{ action('ProductController@create') }}" class="btn btn-primary">Create</a>

	@foreach($products as $product)	
		<h1>{{ $product->name }}</h1>
		<p>
			{{ $product->price }}
		</p>
		<p>{{ $product->stock }}</p>

		<p> {{ $product->description }}</p>

		<img src='/uploads/{{$product->image}}') }}">
		<br><br><br>

		{{ Form::open([
			'action' => ['ProductController@destroy', $product->id],
			'method' => "DELETE"
		]) }}
			<a href="{{ action('ProductController@show', $product->id) }}" class="btn btn-primary">Read More</a>

			<a href="{{ action('ProductController@edit', $product->id) }}" class="btn btn-info">Edit</a>
			
			<button class="btn btn-danger">Delete</button>
		{{ Form::close() }}
		<hr>
	@endforeach

@endsection