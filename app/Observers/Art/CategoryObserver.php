<?php

namespace App\Observers\Art;

use App\Model\Art\Category;
use Auth;

class CategoryObserver
{
    /**
     * Handle the category "created" event.
     *
     * @param  \App\Model\Art\Category  $category
     * @return void
     */
    public function created(Category $category)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $category->name])
            ->log('Art category component created successfully.');
    }

    /**
     * Handle the category "updated" event.
     *
     * @param  \App\Model\Art\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        //
    }

    /**
     * Handle the category "deleted" event.
     *
     * @param  \App\Model\Art\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        activity('Art Component')
            ->causedBy(Auth::user()->id)
            ->withProperties(['name' => $category->name])
            ->log('Art category component deleted successfully.');
    }

    /**
     * Handle the category "restored" event.
     *
     * @param  \App\Model\Art\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the category "force deleted" event.
     *
     * @param  \App\Model\Art\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }
}
