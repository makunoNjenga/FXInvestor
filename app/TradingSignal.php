<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TradingSignal extends Model
{
	protected $fillable = [
		'pair', 'signal', 'entry', 'stop_loss','take_profit','price','won','outcome'
	];

	public function BoughtTradingSignal(){
		return $this->hasMany(BoughtTradingSignal::class);
	}
}
