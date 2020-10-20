<?php

namespace App\Http\Controllers\Admin\Export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use App\Exports\UserExport;
use App\Exports\ArtExport;

class Exports extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function UserExport()
    {
        return Excel::download(new UserExport, 'User.xlsx');
    }

    public function ArtExport()
    {
        return Excel::download(new ArtExport, 'Art.xlsx');
    }
}
