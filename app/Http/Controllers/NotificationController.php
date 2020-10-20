<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data = auth()->user()->notifications;
        return view('services.notification', compact('data'));
    }

    public function markAsRead($id)
    {
        $notification = auth()->user()->notifications->where('id', $id)->first();

        if ($notification->read_at == '') {
            $notification->markAsRead();
            return redirect()->route('artwork.show', $notification->data['subject']);
        }

        return redirect()->route('artwork.show', $notification->data['subject']);
    }

    public function singleMarkAsRead($id)
    {
        $notification = auth()->user()->unreadNotifications->where('id',$id)->markAsRead();

        return redirect()->route('notification.view');
    }

    public function markAllAsRead()
    {
        auth()->user()->unreadNotifications->markAsRead();

	    return redirect()->route('notification.view');
    }
}
