<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BulkNotification extends Model
{
    protected $fillable = [
        'receiver', 'sent', 'subject', 'message'
    ];
}
