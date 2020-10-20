<?php

namespace App\Observers\Art;

use App\Model\Art\Material;
use Auth;

class MaterialObserver
{
    /**
     * Handle the material "created" event.
     *
     * @param  \App\Model\Art\Material  $material
     * @return void
     */
    public function created(Material $material)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $material->name])
            ->log('Art material component created successfully.');
    }

    /**
     * Handle the material "updated" event.
     *
     * @param  \App\Model\Art\Material  $material
     * @return void
     */
    public function updated(Material $material)
    {
        //
    }

    /**
     * Handle the material "deleted" event.
     *
     * @param  \App\Model\Art\Material  $material
     * @return void
     */
    public function deleted(Material $material)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $material->name])
            ->log('Art material component deleted successfully.');
    }

    /**
     * Handle the material "restored" event.
     *
     * @param  \App\Model\Art\Material  $material
     * @return void
     */
    public function restored(Material $material)
    {
        //
    }

    /**
     * Handle the material "force deleted" event.
     *
     * @param  \App\Model\Art\Material  $material
     * @return void
     */
    public function forceDeleted(Material $material)
    {
        //
    }
}
