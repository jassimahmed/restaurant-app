<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FoodItems;
use App\FoodCategory;

class FoodItemsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(){
		$items = FoodItems::paginate(10);
		return view('admin/food-items/all', [
			'items' => $items
		]);
	}
	public function create(){
		$categories = FoodCategory::all();
		return view('admin/food-items/create', [
			'categories' => $categories
		]);
	}
	public function store(){
		request()->validate([
			'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
			'price' => ['required', 'numeric'],
			'category_id' => ['required', 'integer'],
		]);
		$fooditem = FoodItems::create([
			'title' => request('title'),
			'description' => request('description'),
			'image_url' => request('image_url'),
			'price' => request('price'),
			'category_id' => request('category_id'),
		]);
		$foodcategory = FoodCategory::find(request('category_id'));
		$fooditem->foodCategory()->associate($foodcategory);
		$fooditem->save;
		return redirect('/admin/food-items');
	}
	public function edit($id){
		$item = FoodItems::find($id);
		$categories = FoodCategory::all();
		return view('admin/food-items/edit', [
			'item' => $item,
			'categories' => $categories,
		]);
	}

	public function update($id){
		request()->validate([
			'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
			'price' => ['required', 'numeric'],
			'category_id' => ['required', 'integer'],
		]);
		FoodItems::find($id)->fill([
			'title' => request('title'),
			'description' => request('description'),
			'image_url' => request('image_url'),
			'price' => request('price'),
			'category_id' => request('category_id'),
		])->save();
		return redirect('/admin/food-items');
	}

	public function delete($id){
		FoodItems::destroy($id);
		return redirect('/admin/food-items');
	}
}
