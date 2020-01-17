<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminStatement extends Model
{
	protected $fillable = [
		'action', 'amount', 'description'
	];
}
