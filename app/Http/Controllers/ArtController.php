<?php

namespace App\Http\Controllers;

use App\Model\Art;
use Illuminate\Http\Request;
use App\Services\FileUpload as Upload;
use App\Http\Requests\ArtStoreRequest;
use App\Model\Art\Status;
use App\Model\Art\Watch;
use Log;
use DB;
use Auth;

/**
 * @param App\Model\Art components
 *
 */

use App\Model\Art\Subject;
use App\Model\Art\Category;
use App\Model\Art\Style;
use App\Model\Art\Medium;
use App\Model\Art\Material;
use App\Model\Art\Size;

class ArtController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'update','delete']]);

        $this->middleware('permission:create art', ['only' => ['create', 'store']]);

        $this->middleware('permission:update art', ['only' => ['edit', 'update']]);

        $this->middleware('permission:delete art', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Art::with('user')->get();

        return view('art.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Specify which column to get to optimize loading time

        $subject    = Subject::all('name');
        $category   = Category::all('name');
        $style      = Style::all('name');
        $medium     = Medium::all('name');
        $material   = Material::all('name');
        $size       = Size::all('name');

        return view('art.create', compact(
            'subject',
            'category',
            'style',
            'medium',
            'material',
            'size'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtStoreRequest $request)
    {

        try{

            DB::beginTransaction();

            if($request->hasFile('file'))
            {
                $file_name = Upload::ArtUploadFile($request);
                $request->merge(['attachment' => $file_name]);
            }

            $request->request->add(['user_id' => \Auth::user()->id]);
            $request->request->add(['status' => 'Pending']);

            // Send to database
            Art::create($request->except(['file']));

            DB::commit();

            flash('Great! Your art has been uploaded successfully.')->success();

            return redirect()->route('art.index');

        }catch (Exception $e) {

            flash("Whoops! something bad happen. Don't worry its not your fault.")->error();

            Log::error($e);
            DB::rollback();

            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function show(Art $art)
    {
        if(Auth::check()){ // If there is authenticated user log it
            Log::info(Auth::user()->name . ' open ' . $art->name . ' ' .$art->category);
        }

        $status = Status::all('name');

        return view('art.show', compact(['art', 'status']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function edit(Art $art)
    {
        $subject    = Subject::all();
        $category   = Category::all();
        $style      = Style::all();
        $medium     = Medium::all();
        $material   = Material::all();
        $size       = Size::all();

        return view('art.edit', compact(
            'subject',
            'category',
            'style',
            'medium',
            'material',
            'size',
            'art'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function update(ArtStoreRequest $request, Art $art)
    {
        $art->update($request->all());

        return redirect()->route('art.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function destroy(Art $art)
    {
        //Delete the file first
        if(\Storage::exists('public/artwork/'.$art->attachment)){
            \Storage::delete('public/artwork/'.$art->attachment);

            //Delete method
            $art->delete();

            flash($art->name . ' has been deleted.')->success(); // Flash Message

            return redirect()->route('art.index');
        }

        return abort(404, 'Incomplete Action');
    }
}
