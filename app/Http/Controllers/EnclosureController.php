<?php

namespace App\Http\Controllers;

use App\Models\animal;
use App\Models\Enclosure;
use App\Http\Requests\StoreEnclosureRequest;
use App\Http\Requests\UpdateEnclosureRequest;

class EnclosureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enclosures = Enclosure::all();
        return view('enclosures.index', compact('enclosures'));
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
     * @param  \App\Http\Requests\StoreEnclosureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnclosureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enclosure  $enclosure
     * @return \Illuminate\Http\Response
     */
    public function show(Enclosure $enclosure)
    {
        $animals = animal::all();
        return view('enclosures.show', compact('enclosure', 'animals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enclosure  $enclosure
     * @return \Illuminate\Http\Response
     */
    public function edit(Enclosure $enclosure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnclosureRequest  $request
     * @param  \App\Models\Enclosure  $enclosure
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnclosureRequest $request, Enclosure $enclosure)
    {
        $enclosure->animals()->attach(Animal::find($request->animal_id));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enclosure  $enclosure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enclosure $enclosure)
    {
        //
    }
}
