@extends('layouts.backend')

@section('page_title', "Détails de l'animal")

@section('content')
<form action="{{route('update.animal', $animal)}}" method="POST">
    @csrf
    <input type="text" name="name" value="{{$animal->name}}">
    <input type="date" name="birthday" value="{{$animal->birthday}}">

    <input type="submit">

@endsection