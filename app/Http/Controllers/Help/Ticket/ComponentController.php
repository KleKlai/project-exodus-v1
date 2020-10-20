<?php

namespace App\Http\Controllers\Help\Ticket;

use App\Http\Controllers\Controller;
use App\Model\Support\Ticket;
use Illuminate\Http\Request;
use App\User;
use Auth;

class ComponentController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update','delete']]);

        $this->middleware('permission:save note ticket', ['only' => ['saveNotes']]);

        $this->middleware('permission:archive ticket', ['only' => ['archive']]);

        $this->middleware('permission:update status ticket', ['only' => ['status']]);
    }

    public function saveNotes(Request $request, Ticket $ticket)
    {
        if($ticket->archive){
            flash($ticket->id . ' already in archive and can not be modify.')->warning()->important();
            return redirect()->back();
        }

        $ticket->update([
            'note'  => $request->note,
        ]);

        return redirect()->back();
    }

    public function archive(Ticket $ticket)
    {
        if($ticket->archive){
            flash($ticket->id . ' already in archive')->warning()->important();
            return redirect()->back();
        }

        $ticket->update([
            'status'    => 'Closed',
            'archive'   => true
        ]);

        flash($ticket->id . ' has been archive')->important();

        return redirect()->route('ticket.index');
    }

    public function status(Request $request, Ticket $ticket)
    {
        $ticket->update([
            'status'    => $request->status
        ]);

        flash('Status updated successfully')->success()->important();

        return redirect()->back();
    }
}
