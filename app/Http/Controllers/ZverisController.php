<?php

namespace App\Http\Controllers;

use App\Zveris;
use Illuminate\Http\Request;

class ZverisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zveris.create');
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
     * @param  \App\Zveris  $zveris
     * @return \Illuminate\Http\Response
     */
    public function show(Zveris $zveris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zveris  $zveris
     * @return \Illuminate\Http\Response
     */
    public function edit(Zveris $zveris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zveris  $zveris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zveris $zveris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zveris  $zveris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zveris $zveris)
    {
        //
    }
}
