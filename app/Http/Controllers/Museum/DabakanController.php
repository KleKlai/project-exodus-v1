<?php

namespace App\Http\Controllers\Museum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DabakanController extends Controller
{
    public function index()
    {
        return view('museum.dabakan.index');
    }
}
