<?php
Route::resource('products', "ProductController");

Route::resource('categories', "CategoryController");

Route::get('/', function(){
	 return redirect('products');

	});

