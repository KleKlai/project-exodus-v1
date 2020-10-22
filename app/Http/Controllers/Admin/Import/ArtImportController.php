<?php

namespace App\Http\Controllers\Admin\Import;

use App\Imports\ArtsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ArtImportController extends Controller
{
    public function import(Request $request)
    {

        Excel::import(new ArtsImport, $request->file);

        flash('Import success')->success();

        return redirect()->back();
    }
}
