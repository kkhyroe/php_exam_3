@extends('layouts.main')

@section('content')
    <form action="{{route('places.update',$place->id)}}" method="post" class="col-md-3">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Название</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{{$place->name}}">
        </div>
        <div class="form-group">
            <label for="content">Описание</label>
            <textarea name="description" class="form-control" id="description"
                      placeholder="Content">{{$place->description}}</textarea>
        </div>
        @if($place->is_repair==1)
            <div class="form-check" style="margin-bottom: 20px">
                <input class="form-check-input" type="checkbox" value="1"
                       id="flexCheckDefault1" name="is_repair" checked>
                <label class="form-check-label" for="flexCheckDefault1">
                    Это специальное место?
                </label>
            </div>
        @else
            <div class="form-check" style="margin-bottom: 20px">
                <input class="form-check-input" type="checkbox" value="1"
                       id="flexCheckDefault1" name="is_repair">
                <label class="form-check-label" for="flexCheckDefault1">
                    Это специальное место?
                </label>
            </div>
        @endif
        @if($place->is_working==1)
            <div class="form-check" style="margin-bottom: 20px">
                <input class="form-check-input" type="checkbox" value="1"
                       id="flexCheckDefault2" name="is_working" checked>
                <label class="form-check-label" for="flexCheckDefault2">
                    Находится в работе?
                </label>
            </div>
        @else
            <div class="form-check" style="margin-bottom: 20px">
                <input class="form-check-input" type="checkbox" value="1"
                       id="flexCheckDefault2" name="is_working" checked>
                <label class="form-check-label" for="flexCheckDefault2">
                    Находится в работе?
                </label>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
@endsection
