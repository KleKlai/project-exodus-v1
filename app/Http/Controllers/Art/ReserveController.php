<?php

namespace App\Http\Controllers\Art;

use App\Http\Requests\ArtComponentRequest;
use App\Http\Controllers\Controller;
use App\Model\Art\Reserve;
use Illuminate\Http\Request;
use App\Model\Art;
use Carbon\Carbon;
use Auth;
use Log;
use DB;

class ReserveController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $data = Reserve::with(['art', 'user'])->where('sold', null)->get();

        return view('art.reserve', compact('data'));
    }

    public function reserve(Art $art)
    {
        try {

            DB::beginTransaction();

            Reserve::create([
                'art_id'    => $art->id,
                'user_id'   => Auth::user()->id,
                'validity'  => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

            DB::commit();

            flash('Art reserve successfully')->success();

            return redirect()->back();

        } catch (Exception $e) {

            Log::error($e);
            DB::rollback();

            flash('Item reserve failed!')->error();

            return redirect()->back();
        }

    }

    public function cancelReservation(Reserve $reserve)
    {
        try {

            DB::beginTransaction();

            $reserve->delete();

            DB::commit();
            return redirect()->back();

        } catch (Exception $e) {
            Log::error($e);
            DB::rollback();

            flash('Reserve cancellation failed!');

            return redirect()->back();
        }
    }

    public function sold(Reserve $reserve)
    {
        $reserve->update([
            'sold'  =>  true,
        ]);

        flash('save successfully')->success();

        return redirect()->back();
    }

    public function adminSold(Art $art)
    {
        try {

            DB::beginTransaction();

            Reserve::create([
                'art_id'    => $art->id,
                'user_id'   => Auth::user()->id,
                'sold'      => true,
                'validity'  => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

            DB::commit();

            flash('Art mark sold successfully')->success();

            return redirect()->back();

        } catch (Exception $e) {

            Log::error($e);
            DB::rollback();

            flash('Item reserve failed!')->error();

            return redirect()->back();
        }
    }
}
