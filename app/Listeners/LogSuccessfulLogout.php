<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Auth\Events\Login;
use Spatie\Activitylog\Models\Activity;
use Auth;
use Log;

class LogSuccessfulLogout
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        Log::info('Logout successful', ['uuid' => $event->user->uuid]); //System Log

        $event->subject = 'Logout';
        $event->description = 'Logout successful';
        activity($event->subject)
            ->by($event->user)
            ->log($event->description);
    }
}
