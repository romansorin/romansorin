<?php

namespace romansorin\Http\Controllers;

use romansorin\InsightPost;
use Illuminate\Http\Request;

class InsightPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insights.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.insights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \romansorin\InsightPost  $insightPost
     * @return \Illuminate\Http\Response
     */
    public function show(InsightPost $insightPost)
    {
        return view('insights.show', compact('insightPost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \romansorin\InsightPost  $insightPost
     * @return \Illuminate\Http\Response
     */
    public function edit(InsightPost $insightPost)
    {
        return view('auth.insights.edit', compact('insightPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \romansorin\InsightPost  $insightPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InsightPost $insightPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \romansorin\InsightPost  $insightPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsightPost $insightPost)
    {
        //
    }
}
