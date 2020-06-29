<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
		'fname',
		'lname',
		'email',
		'phone',
		'guests',
		'time',
	];
}
