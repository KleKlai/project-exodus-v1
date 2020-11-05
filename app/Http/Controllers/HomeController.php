<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Services\UserServices;
use App\User;
use SweetAlert;
use App\Model\Art;
use App\Model\Profile\Type;
use App\Model\Support\Ticket;
use App\Model\Art\Reserve;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user       = User::all()->count();
        $artwork    = Art::all()->count();
        $ticket     = Ticket::all()->count();
        $reserve    = Reserve::where('sold', null)->count();
        $sold       = Reserve::where('sold', true)->count();

        $gallery    = Type::select('name')->get();

        $artCollection    = Art::all();

        if(Auth::user()->hasRole('Artist') && empty(Auth::user()->gallery)){
            alert()->warning('Please complete your profile <a href="/profile/'. Auth::user()->uuid .'">Click me</a>', 'Urgent')->html();
        }

        return view('home', compact(
            'user',
            'artwork',
            'ticket',
            'gallery',
            'reserve',
            'sold',
            'artCollection'
        ));
    }
}
