<?php

namespace App\Http\Controllers;

use App\Models\Bonjour;
use App\Http\Requests\StoreBonjourRequest;
use App\Http\Requests\UpdateBonjourRequest;

class BonjourController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBonjourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBonjourRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bonjour  $bonjour
     * @return \Illuminate\Http\Response
     */
    public function show(Bonjour $bonjour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bonjour  $bonjour
     * @return \Illuminate\Http\Response
     */
    public function edit(Bonjour $bonjour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBonjourRequest  $request
     * @param  \App\Models\Bonjour  $bonjour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBonjourRequest $request, Bonjour $bonjour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bonjour  $bonjour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bonjour $bonjour)
    {
        //
    }
}
