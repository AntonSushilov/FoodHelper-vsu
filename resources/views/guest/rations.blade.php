@extends('layouts.app')

@section('title','Продукты'.' - FoodHelper')

@section('content')


    <div class="container rat">

        <a class="btn btn-block btn-default" href="{{route('user.ration_constructor.create')}}">Создать рацион</a>

        <div class="cards">
            @foreach ($rations as $ration)
            <div class="card">
                <a href="{{route('ration', ['ration'=>$ration->id])}}" >
                    <div class="card-text">
                        <div class="card-heading"><h3 class="card-title">{{$ration->title}}</h3></div>
                        <div class="card-info">{{$ration->info}}</div>
                    </div>
                </a>
                @if (Auth::check())
                    @if (auth()->user()->selectRation->contains($ration))
                    <a class="" href="{{route('favorite', $ration)}}"><img class="img" src="{{asset('img/icons/health-s.png')}}" alt=""></a>
                    @else
                    <a class="" href="{{route('favorite', $ration)}}"><img class="img" src="{{asset('img/icons/health-o.png')}}" alt=""></a>
                    @endif

                @endif

            </div>


            @endforeach

        </div>
        {{$rations->links()}}
    </div>


@endsection
