@extends('layouts.main')

@section('content')
    <div>
        @foreach($things as $item)
            <div><a href="{{route('things.show',$item->id)}}"> {{$item->id}}. {{$item->name}}</a></div>
        @endforeach
    </div>
@endsection
