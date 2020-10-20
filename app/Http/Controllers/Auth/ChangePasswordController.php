<?php

namespace App\Http\Controllers\Auth;

use App\Services\NotificationService as Notify;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use Auth;

/**
 *
 * This page is use for changing the user authenticated password.
 *
 */

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function change(ChangePasswordRequest $request, User $user)
    {

        //Check if request password are match with current user database password
        if(!\Hash::check($request->current_password, $user->password)) {
            flash('Current password is incorrect')->error()->important();
            return back();
        }

        //Check if request password are match with current user database password
        if(\Hash::check($request->password, $user->password)) {
            flash('Your new password cannot be the same as your current password')->error()->important();
            return back();
        }

        $user->update([
            'password' => \bcrypt($request->password)
        ]);

        //Create Flash message to see if password already changed
        flash('Your password has been changed successfully')->success();

        //Send Notification to the system
        Notify::User($user->id, 'System', 'Your password has been changed at '. date('h:i A'). ' (UTC) on ' . date('l, F d, Y'));

        return redirect()->route('my.profile');
    }
}
