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
        $art = User::with('art')->inRandomOrder()->limit(6)->get();

        $gallery_name = ucwords(str_replace("-", " ", $gallery));

        return view('Museum.bakaw.gallerydetails', compact(
            'art',
            'gallery_name'
        ));
    }
}
