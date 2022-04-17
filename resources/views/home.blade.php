@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Главная') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы вошли!') }}
                    <div class="btn btn-success" style="display: flex;margin-top: 10px"><a class="text-white"  href="{{route('main')}}">Продолжить...</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
