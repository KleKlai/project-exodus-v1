<?php

namespace App\Http\Controllers\Museum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeartController extends Controller
{
    public function index()
    {
        return view('museum.heart.index');
    }
}
