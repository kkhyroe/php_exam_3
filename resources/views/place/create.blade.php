@extends('layouts.main')

@section('content')
    <div class="row">
        <form action="{{route('places.store')}}" method="post" class="col-md-3">
            @csrf
            <div class="form-group">
                <label for="name">Название</label>
                <input
                    value="{{old('name')}}"

                    name="name" type="text" class="form-control" id="name" placeholder="Место">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Описание</label>
                <textarea value="{{old('description')}}" name="description" class="form-control" id="content" placeholder="Описание места"></textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-check" style="margin-bottom: 20px">
                <input class="form-check-input" type="checkbox" value="1"
                       id="flexCheckDefault1" name="is_repair">
                <label class="form-check-label" for="flexCheckDefault1">
                    Это специальное место?
                </label>
            </div>
            <div class="form-check" style="margin-bottom: 20px">
                <input class="form-check-input" type="checkbox"value="1"
                       id="flexCheckDefault2" name="is_working">
                <label class="form-check-label" for="flexCheckDefault2">
                    Находится в работе?
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>

@endsection
