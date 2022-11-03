@extends('layouts.backend')

@section('page_title', "Détails de l'animal")

@section('content')
<form action="{{route('update.animal')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$id}}">
    <input type="text" name="name">
    <input type="date" name="birthday">

    <input type="submit">

@endsection