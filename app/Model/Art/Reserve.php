<?php

namespace App\Model\Art;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public function art()
    {
        return $this->belongsTo('App\Model\Art');
    }
}
