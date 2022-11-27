<?php

namespace App\Http\Controllers;

use App\Models\Posko;
use Illuminate\Http\Request;

class PoskoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
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
     * @param  \App\Models\Posko  $posko
     * @return \Illuminate\Http\Response
     */
    public function show(Posko $posko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posko  $posko
     * @return \Illuminate\Http\Response
     */
    public function edit(Posko $posko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posko  $posko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posko $posko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posko  $posko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posko $posko)
    {
        //
    }
}
