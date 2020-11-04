<?php

namespace App\Http\Controllers\Admin\Import;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class UsersImportController extends Controller
{
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
            $user->assignRole('Artist');
        }

        return redirect()->back();
    }
}
