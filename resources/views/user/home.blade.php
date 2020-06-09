@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!


                </div>

            </div>
            <a class="btn btn-block btn-default" href="{{route('user.ration_constructor.create')}}">Создать рацион</a>
            <h1>Созданные мной</h1>
            <div class="cards">
                @if ($rations != '[]')
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
                @else
                    <h1>Вы еще не создали ни одного рациона</h1>
                @endif

            </div>
            <h1>Избранные</h1>
        </div>
    </div>
</div>
@endsection
