<?php

namespace App\Observers;

use App\Services\NotificationService as Notify;
use App\Model\Art;
use Auth;

class ArtObserver
{
    /**
     * Handle the art "created" event.
     *
     * @param  \App\Model\Art  $art
     * @return void
     */
    public function created(Art $art)
    {
        activity('Art')
            ->causedBy(Auth::user()->id)
            ->log('Art uploaded successfully');

        // Todo: Make Notification
        $message = Auth::user()->name . ' submitted art ' . $art->name;
        Notify::Admin(Auth::user()->name, $message); //Notify Admin for submission
    }

    /**
     * Handle the art "updated" event.
     *
     * @param  \App\Model\Art  $art
     * @return void
     */
    public function updated(Art $art)
    {
        // TODO: Log the process
        activity('Art')
            ->causedBy(Auth::user()->id)
            ->log('Art has been modify');
    }

    /**
     * Handle the art "deleted" event.
     *
     * @param  \App\Model\Art  $art
     * @return void
     */
    public function deleted(Art $art)
    {
        // TODO: Log the process
        activity('Art')
            ->causedBy(Auth::user()->id)
            ->log('Art has been deleted successfully');

        // Todo: Make Notification
        $message = 'Your artwork ' . $art->name . ' has been delete.';
        Notify::User($art->user_id, Auth::user()->name, $message); //Notify Artist for submission
    }

    /**
     * Handle the art "restored" event.
     *
     * @param  \App\Model\Art  $art
     * @return void
     */
    public function restored(Art $art)
    {
        // TODO: Log the process
        activity('Art')
            ->causedBy(Auth::user()->id)
            ->log($art->name . ' successfully restored');

        // Todo: Make Notification
        $message = 'Your artwork ' . $art->name . ' has been restored.';
        Notify::User($art->user_id, 'System', $message); //Notify Artist for submission
    }

    /**
     * Handle the art "force deleted" event.
     *
     * @param  \App\Model\Art  $art
     * @return void
     */
    public function forceDeleted(Art $art)
    {
        // TODO: Log the process
        activity('Art')
            ->causedBy(Auth::user()->id)
            ->log($art->name . ' has been deleted permanently.');
    }
}
