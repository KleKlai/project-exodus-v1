<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Model\Art;

class LandingController extends Controller
{
    public function index()
    {
        $user    = User::with('art')->has('art')->role('Artist')->inRandomOrder()->limit(6)->get();
        $arts    = Art::take(6)->get();

        return view('welcome', compact(
            'user',
            'arts'
        ));
    }

    public function artwork()
    {
        // $art = Art::all();
        $art = Art::paginate(5);

        return view('artworks', compact('art'));
    }

    public function artist()
    {
        $user   = User::with('art')->has('art')->role('Artist')->latest()->get();

        return view('artists', compact('user'));
    }

    public function artistProfile(User $user)
    {

        $art = Art::where('user_id', $user->id)->get();

        return view('artistprofile', compact('art', 'user'));
    }
}
