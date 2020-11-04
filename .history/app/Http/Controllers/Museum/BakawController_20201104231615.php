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
        $artist = User::with('art')->has('art')->inRandomOrder()->limit(6)->get();

        dd($artist[0]->uuid);

        $gallery_name = ucwords(str_replace("-", " ", $gallery));

        return view('Museum.bakaw.gallerydetails', compact(
            'artist',
            'gallery_name'
        ));
    }
}
