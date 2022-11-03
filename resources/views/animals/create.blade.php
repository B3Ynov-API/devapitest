@extends('layouts.backend')

@section('page_title', "Détails de l'animal")

@section('content')
<form action="{{route('animal.store')}}" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="date" name="birthday">

    <select name="specy">
        @foreach ($species as $specy)
            <option value="{{$specy->id}}">{{$specy->name}}</option>
        @endforeach
    </select>

    @foreach ($enclosures as $enclosure)
        <p><input type="checkbox" name="enclosuresCheck[]" value="{{$enclosure->id}}">{{$enclosure->name}}</p>
        @endforeach

    <input type="submit">

@endsection