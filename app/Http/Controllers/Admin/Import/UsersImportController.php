<?php

namespace App\Http\Controllers\Admin\Import;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\User;

class UsersImportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:import art');

    }

    public function import(Request $request)
    {

        Excel::import(new UsersImport, $request->file);

        flash('Import success')->success();

        return redirect()->back();
    }

    public function makeAllArtist()
    {
        $user = User::role('Standard')->get();

        foreach($user as $user){
            //Detach all roles
            $user->roles()->detach();

            //Assign role as an artist
            $user->assignRole('Artist');
        }

        flash('Successfully changing all roles')->success();

        return redirect()->back();
    }
}
