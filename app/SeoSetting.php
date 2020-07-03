<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeoSetting extends Model
{
    protected $fillable = [
		'description',
		'keywords',
	];
}
