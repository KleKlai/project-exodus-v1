<?php

namespace App\Services;

use App\Model\Art;
use Illuminate\Http\Request;
use App\Services\NotificationService as Notify;

class ArtServices {

    function status(Request $request, artwork $artwork)
    {
        $artwork->update($request->all());

        // Todo: Make Notification
        $message = 'Your artwork ' . $art->name . ' has been updated to ' . $artwork->status;
        Notify::Artist($art->user_id, 'System', $message); //Notify Artist for submission
    }

}
