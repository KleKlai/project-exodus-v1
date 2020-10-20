<?php

namespace App\Observers\Art;

use App\Model\Art\Subject;

use Auth;

class SubjectObserver
{
    /**
     * Handle the subject "created" event.
     *
     * @param  \App\Model\Art\Subject  $subject
     * @return void
     */
    public function created(Subject $subject)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $subject->name])
            ->log('Art subject component created successfully.');
    }

    /**
     * Handle the subject "updated" event.
     *
     * @param  \App\Model\Art\Subject  $subject
     * @return void
     */
    public function updated(Subject $subject)
    {
        //
    }

    /**
     * Handle the subject "deleted" event.
     *
     * @param  \App\Model\Art\Subject  $subject
     * @return void
     */
    public function deleted(Subject $subject)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $subject->name])
            ->log('Art subject component deleted successfully.');
    }

    /**
     * Handle the subject "restored" event.
     *
     * @param  \App\Model\Art\Subject  $subject
     * @return void
     */
    public function restored(Subject $subject)
    {
        //
    }

    /**
     * Handle the subject "force deleted" event.
     *
     * @param  \App\Model\Art\Subject  $subject
     * @return void
     */
    public function forceDeleted(Subject $subject)
    {
        //
    }
}
