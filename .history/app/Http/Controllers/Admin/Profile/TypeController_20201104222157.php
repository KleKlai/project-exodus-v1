<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Model\Profile\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $data = Type::select(['id', 'name'])->get();

        return view('admin.profile_component.category', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
        ]);

        Type::create([
            'name'      => ucwords($request->name),
        ]);

        flash('Successfully save')->success()->important();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        flash('Category deleted successfully')->success()->important();

        return redirect()->back();
    }
}
