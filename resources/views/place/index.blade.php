@extends('layouts.main')

@section('content')
    <div>
        @foreach($places as $item)
            <div><a href="{{route('places.show',$item->id)}}"> {{$item->id}}. {{$item->name}}</a></div>
        @endforeach
    </div>
@endsection
