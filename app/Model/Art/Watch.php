<?php

namespace App\Model\Art;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function art()
    {
        return $this->belongsTo('App\Model\Art');
    }
}
