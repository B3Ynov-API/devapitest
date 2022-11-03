@extends('layouts.backend')

@section('page_title', "Liste des animaux")

@section('content')
@foreach ($animals as $animal)
    <p><a href='{{route('animal.show', $animal->id)}}'>{{$animal->name}}</a></p>
@endforeach

<p><a href="{{route('animal.create')}}">Créer un nouvel animal</a></p>
 
@endsection