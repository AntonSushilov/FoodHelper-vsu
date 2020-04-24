@extends('layouts.app')

@section('title','Продукты'.' - FoodHelper')

@section('content')


    <div class="container">

        <a class="btn btn-block btn-default" href="{{route('user.ration_constructor.create')}}">Создать рацион</a>

        <div class="cards">
            @foreach ($rations as $ration)
            <a href="{{route('ration', ['ration'=>$ration->id])}}" class="card">
                <div class="card-text">
                    <div class="card-heading">
                        <h3 class="card-title">{{$ration->title}}</h3>
                    </div>
                    <div class="card-info">
                        {{$ration->info}}
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </div>


@endsection
