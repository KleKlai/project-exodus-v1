<?php

namespace App\Observers;

use App\Services\NotificationService as Notify;
use App\Model\Support\Ticket;
use Auth;
use Log;
use App\User;

class TicketObserver
{
    /**
     * Handle the ticket "created" event.
     *
     * @param  \App\Model\Support\Ticket  $ticket
     * @return void
     */
    public function created(Ticket $ticket)
    {
        // User Activity Log
        activity('Support Ticket')
            ->causedBy(Auth::user()->id)
            ->log($ticket->id . ' has been submitted successfully.');

        // Log into the System
        Log::info(Auth::user()->name . ' submit new ticket ref: '. $ticket->id);

        // Todo: Make Notification
        $message = 'Submit a ticket with ticket ' . $ticket->id;
        Notify::Admin(Auth::user()->name, $message); //Notify Admin for ticket submission
    }

    /**
     * Handle the ticket "updated" event.
     *
     * @param  \App\Model\Support\Ticket  $ticket
     * @return void
     */
    public function updated(Ticket $ticket)
    {
        //
    }

    /**
     * Handle the ticket "deleted" event.
     *
     * @param  \App\Model\Support\Ticket  $ticket
     * @return void
     */
    public function deleted(Ticket $ticket)
    {
        //
    }

    /**
     * Handle the ticket "restored" event.
     *
     * @param  \App\Model\Support\Ticket  $ticket
     * @return void
     */
    public function restored(Ticket $ticket)
    {
        //
    }

    /**
     * Handle the ticket "force deleted" event.
     *
     * @param  \App\Model\Support\Ticket  $ticket
     * @return void
     */
    public function forceDeleted(Ticket $ticket)
    {
        //
    }
}
