<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model {
	protected $fillable = [
		'user_id', 'action', 'amount', 'description'
	];

	/**
	 * Get the user that owns level statements
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo('App\User');
	}

}
