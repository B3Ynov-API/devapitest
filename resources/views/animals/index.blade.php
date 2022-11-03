@extends('layouts.backend')

@section('page_title', "Liste des animaux")

@section('content')
@foreach ($animals as $animal)
    <a href='{{route('animal.show', $animal->id)}}'>{{$animal->name}}</a>
@endforeach

@push('script_backend')
<!--<script>
    alert('coucou');
</script>-->
@endsection