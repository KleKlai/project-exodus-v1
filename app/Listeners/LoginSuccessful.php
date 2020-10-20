<?php

namespace App\Listeners;

use IlluminateAuthEventsLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Auth\Events\Login;
use Spatie\Activitylog\Models\Activity;
use Auth;
use Log;

class LoginSuccessful
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
     * @param  IlluminateAuthEventsLogin  $event
     * @return void
     */
    public function handle(Login $event)
    {
        Log::info('Login successful', ['uuid' => $event->user->uuid]); //System Log

        $event->subject = 'Login';
        $event->description = 'Login successful';
        activity($event->subject)
            ->by($event->user)
            ->log($event->description);
    }
}
