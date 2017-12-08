@extends('layout')

@section('content')
	<h1>{{ $product->id }}</h1>
	<h1>{{ $product->name }}</h1>
	<p>
		{{ $product->price }}
	</p>
	<p>{{ $product->stock }}</p>
	<p>{{ $product->is_featured }}</p>
	<p> {{ $product->description }}</p>

	<img src="/uploads/{{$product->image}}"><br><br><br>

		<a href="{{ action('ProductController@index') }}" class="btn btn-primary">Go Back</a>
		
		<br><br>

	@foreach( $product->categories as $category)

		<p>Category : <a href="{{ action('CategoryController@show',$category->id)}}">{{ $category->name }}</a></p>
		
	@endforeach
@endsection