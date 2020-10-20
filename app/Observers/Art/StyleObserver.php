<?php

namespace App\Observers\Art;

use App\Model\Art\Style;
use Auth;

class StyleObserver
{
    /**
     * Handle the style "created" event.
     *
     * @param  \App\Model\Art\Style  $style
     * @return void
     */
    public function created(Style $style)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $style->name])
            ->log('Art style component created successfully.');
    }

    /**
     * Handle the style "updated" event.
     *
     * @param  \App\Model\Art\Style  $style
     * @return void
     */
    public function updated(Style $style)
    {
        //
    }

    /**
     * Handle the style "deleted" event.
     *
     * @param  \App\Model\Art\Style  $style
     * @return void
     */
    public function deleted(Style $style)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $style->name])
            ->log('Art style component deleted successfully.');
    }

    /**
     * Handle the style "restored" event.
     *
     * @param  \App\Model\Art\Style  $style
     * @return void
     */
    public function restored(Style $style)
    {
        //
    }

    /**
     * Handle the style "force deleted" event.
     *
     * @param  \App\Model\Art\Style  $style
     * @return void
     */
    public function forceDeleted(Style $style)
    {
        //
    }
}
