<?php

namespace App\Http\Controllers;

use App\Models\Specy;
use App\Models\Animal;
use App\Models\Enclosure;
use Illuminate\Http\Request;
use App\Mail\CreateAnimalEmail;
use Illuminate\Support\Facades\Mail;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $species = Specy::all();
        $enclosures = Enclosure::all();
        return view('animals.create', compact ('species', 'enclosures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal = Animal::create($request->input());
        
        $animal->specy()->associate(Specy::find($request->specy));
        
        foreach($request->enclosuresCheck as $check)
        {
            $animal->enclosures()->attach($check);
        }
        $animal->save();
        $animal = $animal->fresh();

        Mail::to('evan.lefevre108@gmail.com')->send(new CreateAnimalEmail($animal->name));

        return redirect()->route('animal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return view('animals.show', compact ('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $animal->fill($request->input());
        $animal->save();
        return redirect()->route('animal.show', compact('animal'));
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
