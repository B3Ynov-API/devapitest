<h1>{{$enclosure->name}}</h1>

<form action="{{route('enclosure.update', $enclosure->id)}}" method="POST">
    @csrf
    <select name="animal_id" id="">
        @foreach($animals as $animal)
            <option value="{{$animal->id}}">
                {{$animal->name}}
            </option>
        @endforeach
    </select>
    <input type="submit" value="Enregistrer">
</form>