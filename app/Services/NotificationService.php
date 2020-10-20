<?php

namespace App\Services;

use Illuminate\Support\Facades\Notification;
use App\User;
use Auth;

class NotificationService {

    /**
     * Notify Only Admin
     */

    static function Admin($subject, $message)
    {
        $user = User::role('Admin')->get(); //Get all Administrator $user

        $data = [
            'header'    => Auth::user()->name,
            'subject'   => $subject,
            'body'      => $message,
        ];

        //Send notification to all $user where role is Administrator
        Notification::send($user, new \App\Notifications\ArtNotification($data));
    }

    /**
     * Notify only Curator Role
     *
     */

    static function Curator($subject, $message)
    {
        $user = User::role('Curator')->get(); //Get all Curator $user

        $data = [
            'header'    => Auth::user()->name,
            'subject'   => $subject,
            'body'      => $message,
        ];

        //Send notification to all $user where role is Administrator
        Notification::send($user, new \App\Notifications\ArtNotification($data));
    }

    /**
     * Notify Both Admin and Curator
     */
    function Both($subject, $message)
    {
        CustomNotify::Curator($subject, $message);
        CustomNotify::Admin($subject, $message);
    }

    /**
     * Notify Artist
     */
    static function User($user, $subject, $message)
    {
        $user = User::findOrFail($user);

        $data = [
            'header'    => Auth::user()->name,
            'subject'   => $subject,
            'body'      => $message,
        ];

        $user->notify(new \App\Notifications\ArtNotification($data));
    }

    function Broadcast($subject, $message)
    {
        $user = User::all();

        $data = [
            'header'    => 'Mindanao Art',
            'subject'   => $subject,
            'body'      => $message,
        ];

        //Send notification to all $user
        Notification::send($user, new \App\Notifications\ArtNotification($data));
    }

}
