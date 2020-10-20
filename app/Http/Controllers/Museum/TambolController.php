<?php

namespace App\Http\Controllers\Museum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambolController extends Controller
{
    public function index()
    {
        return view('museum.tambol.index');
    }
}
