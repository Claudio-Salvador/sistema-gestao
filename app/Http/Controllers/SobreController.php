<?php

namespace App\Http\Controllers;

use App\sobre;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sistema.sobre');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function show(sobre $sobre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function edit(sobre $sobre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sobre $sobre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sobre  $sobre
     * @return \Illuminate\Http\Response
     */
    public function destroy(sobre $sobre)
    {
        //
    }
}
