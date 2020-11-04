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

    public function artwork(Request $request)
    {
        $museum = $request->get('museum', 0);
        $gallery = urldecode($request->get('gallery', 'Gall Down South'));

        // 0 - bakaw
        // 1 - kulintang
        // 2 - balangay
        $galleries_arr = [
            0 => [
                'Gall Down South',
                'Datu Bago',
                'TheBauHaus',
                'Sining Mata Visual Art & Music School',
                'Deanna Sipaco (DS) Foundation for the Differently-Abled, Inc.',
                'Kulit Kultura',
            ],
            1 => [
                'Hinigalaay',
                'Studio One Art Iligan',
                'TINTA Artists Iligan',
                'Irinugyun Artist',
                'Talaandig Soil Painters',
                'Erlow Talata',
                'Ronald Tamfalan',
            ],
            2 => [
                'Agusan Artist Association (AAA)',
                'Alampat Gallery',
                'Lumbayao Artist Collective',
                'The Gallery of the Peninsula and the Archipelago',
                'Good Times Café and Art Gallery (Zambo Norte)',
            ],
        ];

        $galleries = $galleries_arr[$museum];

        // $art = Art::all();
        $users = User::where('gallery', $gallery)->pluck('id');
        $art = Art::whereIn('user_id', $users)->paginate(8);

        return view('artworks', compact(
            'art',
            'museum',
            'gallery',
            'galleries'
        ));
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
