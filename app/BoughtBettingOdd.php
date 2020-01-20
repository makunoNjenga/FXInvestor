<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoughtBettingOdd extends Model
{
    protected $fillable = [
        'betting_odd_id', 'user_id',
    ];

    public function BettingOdd()
    {
        return $this->hasMany(BettingOdd::class);
    }
}
