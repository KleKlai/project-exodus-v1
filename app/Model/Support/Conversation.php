<?php

namespace App\Model\Support;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = [
        'ticket_id', 'user_id', 'message',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
