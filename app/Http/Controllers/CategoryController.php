<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
	public function index()
	{
		$categories = Category::all();
		return view('categories.index', ['categories' => $categories]);
	}

	public function show(Category $category)
	{
			return view('categories.show', ['category' => $category]);
	}

    public function create()
    {
    	return view('categories.create');
    }

    public function store(Request $request)
    {
    	Category::create( $request->all() );
    	return redirect("categories");
    }

    public function edit(Category $category)
    {
    	return view('categories.edit', ['category' => $category]);
    }
    public function update(Category $category, Request $request)
    {
	
		$category->update( $request->all() );
	   return redirect("categories");
    }

    public function destroy($id)
    {
    	Category::destroy($id);
    	return redirect("categories");
    }
}
