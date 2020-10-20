<?php

namespace App\Observers\Art;

use App\Model\Art\Medium;
use Auth;

class MediumObserver
{
    /**
     * Handle the medium "created" event.
     *
     * @param  \App\Model\Art\Medium  $medium
     * @return void
     */
    public function created(Medium $medium)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $medium->name])
            ->log('Art medium component created successfully.');
    }

    /**
     * Handle the medium "updated" event.
     *
     * @param  \App\Model\Art\Medium  $medium
     * @return void
     */
    public function updated(Medium $medium)
    {
        //
    }

    /**
     * Handle the medium "deleted" event.
     *
     * @param  \App\Model\Art\Medium  $medium
     * @return void
     */
    public function deleted(Medium $medium)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $medium->name])
            ->log('Art medium component deleted successfully.');
    }

    /**
     * Handle the medium "restored" event.
     *
     * @param  \App\Model\Art\Medium  $medium
     * @return void
     */
    public function restored(Medium $medium)
    {
        //
    }

    /**
     * Handle the medium "force deleted" event.
     *
     * @param  \App\Model\Art\Medium  $medium
     * @return void
     */
    public function forceDeleted(Medium $medium)
    {
        //
    }
}
