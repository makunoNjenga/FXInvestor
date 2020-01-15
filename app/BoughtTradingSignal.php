<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoughtTradingSignal extends Model
{
	protected $fillable = [
		'trading_signal_id', 'user_id',
	];

	public function tradingSignals(){
		return $this->hasMany(TradingSignal::class);
	}
}
