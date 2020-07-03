<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable = [
		'site_title',
		'logo_img_url',
		'address_1',
		'address_2',
		'city',
		'province',
		'postalcode',
		'phone_number'
	];
}
