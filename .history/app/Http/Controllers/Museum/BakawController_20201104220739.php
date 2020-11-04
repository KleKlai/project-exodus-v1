<?php

namespace App\Http\Controllers\Museum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Art;

class BakawController extends Controller
{
    public function index()
    {
        return view('museum.bakaw.index');
    }

    public function gallery($gallery)
    {
        $art = 

        return view('gallerydetails');
    }
}
