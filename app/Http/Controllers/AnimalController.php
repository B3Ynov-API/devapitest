<?php

namespace App\Http\Controllers;

use App\Models\Specy;
use App\Models\animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return animal::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        animal::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(animal $animal)
    {
        return view('animals.index', compact ('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('animals.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $animal = animal::find($request->id);
        $animal->fill($request->input());
        $animal->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function add_specy(Request $request, Animal $animal, Specy $specy)
    {
        $animal->specy()->associate($specy);
        $animal->save();
    }
}
