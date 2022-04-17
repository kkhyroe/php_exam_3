@extends('layouts.main')
@section('content')
    <div class="row">
        <form action="{{route('things.store')}}" method="post" class="col-md-3">
            @csrf
            <div class="form-group">
                <label for="name">Название</label>
                <input
                    value="{{old('name')}}"

                    name="name" type="text" class="form-control" id="name" placeholder="Вещь">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Описание</label>
                <textarea value="{{old('description')}}" name="description" class="form-control" id="content"
                          placeholder="Описание вещи"></textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="wrnt">Гарантия / Срок годности</label>
                <input name="wrnt" class="form-control" id="wrnt" placeholder="1000" type="number">
            </div>
            <input type="hidden" name="master_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
            <div class="form-group" style="margin-top: 20px;margin-bottom: 20px">
                <select value="{{old('place_id')}}" class="form-select" aria-label="Default select example"
                        name="place_id">
                    <option disabled selected>Место для хранения</option>
                    @foreach($places as $place)
                        <option value="{{$place->id}}">{{$place->name}}</option>
                    @endforeach
                </select>
                @error('place_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>

@endsection
