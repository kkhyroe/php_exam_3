@extends('layouts.main')

@section('content')
    <div>
        <h1 class="h-25">Вещи: </h1>
        <div style="display: flex; flex-wrap: wrap; padding: 30px; margin-bottom: 30px">
            @foreach($things as $thing)
                <div class="card" style="width: 18rem;margin-right: 30px;flex: 0 0 30%; margin-top: 30px">
                    <div class="card-body">
                        <h5 class="card-title">{{$thing->name}}</h5>
                        <p class="card-text">{{$thing->description}}</p>
                        <a href="{{route('things.show',$thing->id)}}" class="card-link">Подробнее</a>
                    </div>
                </div>

            @endforeach
        </div>
        <h1 class="h-25">Места: </h1>
        <div style="display: flex; flex-wrap: wrap; padding: 30px; margin-bottom: 30px">
            @foreach($places as $place)
                <div class="card" style="width: 18rem;margin-right: 30px;flex: 0 0 30%; margin-top: 30px">
                    <div class="card-body"> 
                        <h5 class="card-title">{{$place->name}}</h5>
                        <p class="card-text">{{$place->description}}</p>
                        <a href="{{route('places.show',$place->id)}}" class="card-link">Подробнее</a>
                    </div>
                </div>

            @endforeach
        </div>

    </div>
@endsection
