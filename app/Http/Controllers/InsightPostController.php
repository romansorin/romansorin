<?php

namespace romansorin\Http\Controllers;

use romansorin\InsightPost;

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
        $insights = InsightPost::simplePaginate(15);
        return view('insights.index', compact('insights'));
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
    public function store()
    {
        $attributes = request()->validate([]);

        InsightPost::create($attributes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \romansorin\InsightPost  $insightPost
     * @return \Illuminate\Http\Response
     */
    public function show(InsightPost $insightPost)
    {
        // Decide what to use as parameter
        $insight = InsightPost::where('...');
        return view('insights.show', compact('insight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \romansorin\InsightPost  $insightPost
     * @return \Illuminate\Http\Response
     */
    public function edit(InsightPost $insightPost)
    {
        $insight = InsightPost::where('...');
        return view('auth.insights.edit', compact('insight'));
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
        // Destroy where id matches given post
        InsightPost::destroy('...');
    }
}
