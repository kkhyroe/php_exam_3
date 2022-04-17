@extends('layouts.main')

@section('content')
    <form action="{{route('things.update',$thing->id)}}" method="post" class="col-md-3">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Название</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="name" value="{{$thing->name}}">
        </div>
        <div class="form-group">
            <label for="content">Описание</label>
            <textarea name="description" class="form-control" id="description"
                      placeholder="Content">{{$thing->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="wrnt">Гарантия \ Срок годности</label>
            <input name="wrnt" class="form-control" id="wrnt" placeholder="Wrnt" value="{{$thing->wrnt}}" type="number">
        </div>
        <input type="hidden" name="master_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">

        <div class="form-group" style="margin-top: 20px; margin-bottom: 20px">
            <label for="place_id">Место хранения</label>
            <select class="form-select" aria-label="Default select example" name="place_id">
                @foreach($places as $place)
                    @if($place_id==$place->id)
                        <option value="{{$place->id}}" selected>{{$place->name}}</option>
                    @else
                        <option value="{{$place->id}}">{{$place->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
@endsection
