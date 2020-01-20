<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invest extends Model
{
    protected $fillable = [
        'user_id', 'amount', 'interest', 'matures_at', 'matured'
    ];
}
