<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialSetting extends Model
{
    protected $fillable = [
		'facebook_url',
		'twitter_url',
		'instagram_url',
	];
}
