<?php

namespace App\Http\Controllers\Museum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Art;
use App\User;

class BakawController extends Controller
{
    public function index()
    {
        return view('museum.bakaw.index');
    }

    public function gallery($gallery)
    {
        $art = User::with('art')->get();

        $gallery_name = implode('-', $gallery);

        dd($gallery_name);

        return view('bakaw.gallerydetails', compact(
            'art'
        ));
    }
}
