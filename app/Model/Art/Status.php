<?php

namespace App\Model\Art;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'name', 'description'
    ];
}
