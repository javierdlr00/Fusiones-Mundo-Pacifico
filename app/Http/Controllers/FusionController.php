<?php

namespace App\Http\Controllers;

use App\Fusion;
use Illuminate\Http\Request;

class FusionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fusiones.index');
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
     * @param  \App\Fusion  $fusion
     * @return \Illuminate\Http\Response
     */
    public function show(Fusion $fusion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fusion  $fusion
     * @return \Illuminate\Http\Response
     */
    public function edit(Fusion $fusion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fusion  $fusion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fusion $fusion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fusion  $fusion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fusion $fusion)
    {
        //
    }
}
