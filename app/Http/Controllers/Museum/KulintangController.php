<?php

namespace App\Http\Controllers\Museum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KulintangController extends Controller
{
    public function index()
    {
        return view('museum.kulintang.index');
    }
}
