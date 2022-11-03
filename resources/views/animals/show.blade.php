@extends('layouts.backend')

@section('page_title', "Détails de l'animal")

@section('content')
<p>Nom : {{$animal->name}}</p>
<p>Date de naissance : {{$animal->birthday}}</p>
@if ($animal->deathday != null)
    <p>Date de décès : {{$animal->deathday}}</p>    
@endif
<p>Espèce : {{$animal->specy->name}}</p> 

<h3>Cet animal est présent dans les enclos :</h3>
@foreach ($animal->enclosures as $enclosure)
    <p>N°{{$enclosure->id}} - {{$enclosure->name}}</p>    
@endforeach

<a href="{{route('animal.edit', $animal)}}">Modifier</a>

@endsection