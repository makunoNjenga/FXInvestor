<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notif extends Model {

	protected $fillable = [
		'user_id', 'sender_id', 'subject', 'message'
	];

	/**
	 * Get the user that owns level 7 referals
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo('App\User');
	}
}
