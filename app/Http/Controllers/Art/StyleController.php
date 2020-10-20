<?php

namespace App\Http\Controllers\Art;

use App\Http\Requests\ArtComponentRequest;
use App\Http\Controllers\Controller;
use App\Model\Art\Style;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index()
    {
        $data = Style::all();

        return view('admin.art_component.style', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtComponentRequest $request)
    {
        Style::create($request->all());

        flash($request->name . ' style created successfully.')->success();

        return redirect()->route('art.style.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ArtUtilities\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function show(Style $style)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ArtUtilities\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function edit(Style $style)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ArtUtilities\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Style $style)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ArtUtilities\Style  $style
     * @return \Illuminate\Http\Response
     */
    public function destroy(Style $style)
    {
        $style->delete();

        //Flash Message
        flash($style->name . ' deleted successfully.')->success();

        return redirect()->route('art.style.index');
    }
}
