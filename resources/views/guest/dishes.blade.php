@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="cards">
            @foreach ($dishes as $dish)
            <a href="{{route('dish', ['dish'=>$dish->id])}}" class="card">
                <img class="card-image" src="{{ asset('/storage/'. $dish->path_foto)}}" alt="Фото продукта">
                <div class="card-text">
                    <div class="card-heading">
                        <h3 class="card-title">{{$dish->title}}</h3>
                    </div>
                    <div class="card-info">
                        {{$dish->info}}
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        {{$dishes->links()}}
    </div>

@endsection
