<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserUpdateRequest;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\Mail\DeleteUserMail;
use App\Model\Art;
use App\User;
use Auth;

//Register Component
use App\Model\Profile\Type;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:read user', ['only' => ['index', 'show']]);

        $this->middleware('permission:update user', ['only' => ['edit', 'update']]);

        $this->middleware('permission:delete user', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data = User::with('roles')->get();

        return view('admin.user_management.index', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        //Get all user art
        $art = Art::where('user_id', $user->id)->with('user')->select('uuid', 'name')->get();

        $login = Activity::where('causer_id', $user->id)
            ->where('log_name', 'Login')
            ->select('created_at')
            ->take(5)
            ->get();

        //Get all user activity
        $activity = Activity::where('causer_id', $user->id)
            ->where('log_name', '!=', 'Login')
            ->select(['log_name', 'description', 'properties', 'created_at'])
            ->latest()
            ->take(5)
            ->get();

        return view('admin.user_management.show', compact(['user', 'art', 'activity', 'login']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles      = Role::select('name')->get();

        $permission = (!empty($user->verified)) ? Permission::select('name')->get() : [] ;
        $gallery   = Type::select('name')->get();

        return view('admin.user_management.edit', compact(
            [
                'user',
                'roles',
                'permission',
                'gallery',
            ]
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        // Custom Validate to add subcategory request
        $subcategory = null;

        if(!empty($request['gallery'])){
            $subcategory = $request['gallery'];
        }

        if(!empty($request['regional'])){
            $subcategory = $request['regional'];
        }

        if(!empty($request['special'])){
            $subcategory = $request['special'];
        }

        $user->update([
            'name'          => $request->name,
            'email'         => $request->email,
            'mobile'        => $request->mobile,
            'category'      => $request->category,
            'subcategory'   => $subcategory,
            'bio'           => $request->bio,
        ]);

        //Detach all user roles first
        $user->roles()->detach();

        //Assign new roles
        $user->syncRoles($request->roles);

        flash('Save')->success();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        // Email user that his/her account has been deleted
        $subject = 'Your Mindanao Art Account has been deleted due to Terms of Service violations';
        Mail::to($user->email)->send(new DeleteUserMail($user, $subject));

        flash($user->name . ' deleted successfully.')->success()->important();

        return redirect()->route('user.index');
    }
}
