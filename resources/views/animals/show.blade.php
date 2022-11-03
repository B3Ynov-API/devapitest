@extends('layouts.backend')

@section('page_title', "Détails de l'animal")

@section('content')
<p>{{$animal->name}}</p>
<p>{{$animal->birthday}}</p>
@if ($animal->deathday != null)
    <p>{{$animal->deathday}}</p>    
@endif

<h3>Cet animal est présent dans les enclos :</h3>
@foreach ($animal->enclosures as $enclosure)
    <p>N°{{$enclosure->id}} - {{$enclosure->name}}</p>    
@endforeach
    
@endsection