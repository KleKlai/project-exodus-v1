<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\User;

class Partial extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function trashUser()
    {
        $data = User::select('id','uuid', 'name', 'category', 'deleted_at')
                ->onlyTrashed()
                ->get();

        return view('admin.user_management.trash', compact('data'));
    }

    public function restore($id)
    {   
        $user = User::onlyTrashed()->find($id);
        $user->restore();

        flash($user->name . ' has been restore')->success()->important();

        return redirect()->route('user.trash');
    }

    public function forceDelete($id)
    {
        $user = User::onlyTrashed()->find($id);

        //Revoke all Roles
        $user->roles()->detach();   
        //Revoke all permission first
        $user->revokePermissionTo($user->getAllPermissions());
        $user->forceDelete();

        return redirect()->route('user.trash');
    }

    public function overridePermission(Request $request, User $user)
    {
        //Revoke all permission first
        $user->revokePermissionTo($user->getAllPermissions());

        //Assign new permission
        $user->givePermissionTo($request->permissions);

        flash('Permission has been set')->success();

        return redirect()->back();
    }
}
