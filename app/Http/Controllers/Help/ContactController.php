<?php

namespace App\Http\Controllers\Help;

use App\Http\Controllers\Controller;
use App\Model\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('help.contact');
    }

    public function send(Request $request)
    {
        dd($request);
    }

}
