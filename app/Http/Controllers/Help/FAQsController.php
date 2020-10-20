<?php

namespace App\Http\Controllers\Help;

use App\Http\Controllers\Controller;
use App\Model\FAQs;
use Illuminate\Http\Request;
use Auth;

class FAQsController extends Controller
{

    public function index()
    {
        $data = FAQs::select(['id', 'uuid', 'title'])->get();

        return view('help.faq.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('help.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required | string',
            'description'   => 'required',
        ]);

        FAQs::create($request->all());

        flash('FAQs Added successfully')->success()->important();

        return redirect()->route('FAQs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function show(FAQs $faqs)
    {
        dd($faqs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQs $faqs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQs $faqs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\FAQs  $fAQs
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQs $faqs)
    {
        //
    }
}
