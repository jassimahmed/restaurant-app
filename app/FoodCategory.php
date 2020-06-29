<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
	protected $table = 'categories';

	protected $fillable = ['title', 'description', 'image_url', 'updated_at', 'created_at'];

	public function foodItems(){
		return $this->hasMany('App\FoodItems', 'category_id');
	}
}
