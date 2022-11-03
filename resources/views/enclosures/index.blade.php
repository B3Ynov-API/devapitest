@foreach($enclosures as $enclosure)
    <a href="{{route('enclosure.show', $enclosure->id)}}">{{$enclosure->name}}</a>
@endforeach