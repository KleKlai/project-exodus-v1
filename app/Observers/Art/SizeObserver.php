<?php

namespace App\Observers\Art;

use App\Model\Art\Size;
use Auth;

class SizeObserver
{
    /**
     * Handle the size "created" event.
     *
     * @param  \App\Model\Art\Size  $size
     * @return void
     */
    public function created(Size $size)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $size->name])
            ->log('Art size component created successfully.');
    }

    /**
     * Handle the size "updated" event.
     *
     * @param  \App\Model\Art\Size  $size
     * @return void
     */
    public function updated(Size $size)
    {
        //
    }

    /**
     * Handle the size "deleted" event.
     *
     * @param  \App\Model\Art\Size  $size
     * @return void
     */
    public function deleted(Size $size)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $size->name])
            ->log('Art size component deleted successfully.');
    }

    /**
     * Handle the size "restored" event.
     *
     * @param  \App\Model\Art\Size  $size
     * @return void
     */
    public function restored(Size $size)
    {
        //
    }

    /**
     * Handle the size "force deleted" event.
     *
     * @param  \App\Model\Art\Size  $size
     * @return void
     */
    public function forceDeleted(Size $size)
    {
        //
    }
}
