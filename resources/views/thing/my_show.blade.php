@extends('layouts.main')

@section('content')
    <div>
        <h1>Название: {{$thing->name}}</h1>
        <h3>Описание: </h3>
        <text>{{$thing->description}}</text>
    </div>
    <div style="margin-bottom: 20px;margin-top: 20px;">
        <button type="button" class="btn btn-secondary" onclick="window.location.href = '{{route('main')}}';">Назад</button>
    </div>
    <div style="margin-bottom: 20px;margin-top: 20px;">
        <form action="{{route('things.destroy',$thing->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
    </div>
    <div>
        <button type="button" class="btn btn-primary" onclick="window.location.href = '{{route('things.edit',$thing->id)}}';">Редактировать</button>
    </div>

@endsection
