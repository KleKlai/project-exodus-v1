<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{

    public function store(Request $request)
    {
        if (Newsletter::isSubscribed($request->email) )
        {
            return redirect('newsletter')->with('failure', 'Sorry! You have already subscribed ');
        }

        Newsletter::subscribePending($request->email);

        flash('Sweet! Be on the lookout for updates.')->success()->important();

        return redirect()->back();
    }
}
