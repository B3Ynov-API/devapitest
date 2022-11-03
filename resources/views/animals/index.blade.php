@extends('layouts.backend')

@section('page_title', "Détails de l'animal")

@section('content')
<h1>Animal {{$animal->name}}
<p>Description de l'animal</p>

@push('script_backend')
<script>
    alert('coucou');
</script>
@endsection