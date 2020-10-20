<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Attempting;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Auth\Events\Login;
use Spatie\Activitylog\Models\Activity;
use App\User;
use Auth;
use Log;

class LogAuthenticationAttempt
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
     * @param  Attempting  $event
     * @return void
     */
    public function handle(Attempting $event)
    {

        $user = User::where('email', $event->credentials['email'])->first();

        if(!$user) {
            Log::info('User failed to login', ['email', $event->credentials['email']]);

            return;
        }

        // Bug on this section: always tell login attempt in activity log even thou its not
        // if (!Auth::check()) {

        //     Log::info('Login Failed', ['uuid' => $user->uuid]);

        //     $event->subject = 'Login Attempt';
        //     $event->description = 'Login Failed';
        //     activity($event->subject)
        //         ->by($user)
        //         ->log($event->description);
        // }
    }
}
