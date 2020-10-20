<?php

namespace App\Http\Controllers;

use App\Services\NotificationService as Notify;
use Illuminate\Http\Request;
use App\Model\Art\Watch;
use App\Model\Art\Reserve;
use App\Model\Art;
use Carbon\Carbon;
use Auth;
use Log;
use DB;

class ArtUtility extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:update art-status', ['only' => ['status']]);
    }

    // Method to change art status
    public function status(Art $art, Request $request) {

        $request->validate([
            'status'    => 'required',
            'remark'    => 'nullable|max:255'
        ]);

        $art->update($request->all());

        //Flash Message to view
        flash($art->name . ' has been approved.')->success();

        //Notify Artist for this art
        Notify::User($art->user_id, 'System', 'Your artwork has been approved.');

        return redirect()->back();
    }

    public function watch($id)
    {
        $watch = Watch::where('art_id', $id)->get();
        dd($watch);
        // if($watch->isEmpty())
        // {
            Watch::create([
                'art_id'    => $id,
                'user_id'   => Auth::user()->id
            ]);
        // }

        return redirect()->back();
    }

    public function reserve(Art $art)
    {
        try {

            DB::beginTransaction();

            $art->update([
                'reserve'   => true
            ]);

            Reserve::create([
                'art_id'    => $art->id,
                'user_id'   => Auth::user()->id,
                'validity'  => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

            DB::commit();

            flash('Item reserve successfully')->success();

            return redirect()->back();

        } catch (Exception $e) {

            Log::error($e);
            DB::rollback();

            flash('Item reserve failed!')->error();

            return redirect()->back();
        }

    }
}
