<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use App\Model\Profile\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $data = Type::select(['id', 'name', 'description'])->get();

        return view('admin.profile_component.category', compact('data'));
    }

    public function create()
    {
        return view('admin.profile_component.create');
    }

    public function edit(Type $type)
    {
        return view('admin.profile_component.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {

        $request->validate([
            'name'          => 'required',
            'description'   => 'nullable'
        ]);

        $res = $type->update([
            'name'          => $request->name,
            'description'   => $request->description
        ]);

        alert()->success($request->name . ' updated successfully.');

        return redirect()->route('artist.category.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'nullable'
        ]);

        Type::create([
            'name'      => ucwords($request->name),
            'description'   => $request->description
        ]);

        flash('Successfully save')->success()->important();

        return \redirect()->route('artist.category.index');
    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        flash('Gallery deleted successfully')->success()->important();

        return redirect()->back();
    }
}
