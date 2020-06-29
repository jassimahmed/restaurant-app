<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
	protected $fillable = ['fname', 'lname', 'email', 'phone_number'];

}
