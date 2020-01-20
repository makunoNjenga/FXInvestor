<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BettingOdd extends Model
{
    protected $fillable = [
        'match', 'pick', 'odd', 'kick_off', 'price', 'outcome', 'won'
    ];

    public function BoughtBettingOdd()
    {
        return $this->hasMany(BoughtBettingOdd::class);
    }
}
