<?php

namespace App\Http\Controllers\Admin\Export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use App\Exports\UserExportDefault;
use App\Exports\ArtExportDefault;
use App\Exports\UserExportCustom;
use App\Exports\ArtExportCustom;
use Spatie\Permission\Models\Role;

class Exports extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userfields = \DB::getSchemaBuilder()->getColumnListing('users');
        $userfields = \array_diff($userfields, ["password", "remember_token"]); //Remove Element in Array

        $artfields = \DB::getSchemaBuilder()->getColumnListing('art');

        $role = Role::all();

        return view('admin.export.export', compact(
            'userfields',
            'artfields',
            'role'
        ));
    }

    public function UserExportDefault()
    {
        return Excel::download(new UserExportDefault, 'User('. date('m-d-y') .').xlsx');
    }

    public function ArtExportDefault()
    {
        return Excel::download(new ArtExportDefault, 'Art('. date('m-d-y') .').xlsx');
    }

    public function UserExportCustom(Request $request)
    {
        return Excel::download(new UserExportCustom($request->all()), 'User('. date('m-d-y') .').' . $request->format);
    }

    public function ArtExportCustom(Request $request)
    {
        return Excel::download(new ArtExportCustom($request->all()), 'Art('. date('m-d-y') .').' . $request->format);
    }
}
