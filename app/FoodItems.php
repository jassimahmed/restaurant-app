<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItems extends Model
{
	protected $table = 'items';

	protected $fillable = [
		'title', 'description', 'price', 'category_id', 'image_url', 'updated_at', 'created_at',
	];

	public function foodCategory(){
		return $this->belongsTo('App\FoodCategory');
	}
}
