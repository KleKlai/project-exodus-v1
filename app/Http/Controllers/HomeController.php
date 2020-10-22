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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

        $gallery    = Type::select('name')->get();

        $table = \DB::getSchemaBuilder()->getColumnListing('users');

        //Remove Element in Array
        $table = \array_diff($table, ["password", "remember_token"]);

        UserServices::assignMuseum(\Auth::user());

        return view('home', compact(
            'user',
            'artwork',
            'ticket',
            'table',
            'gallery'
        ));
    }
}
