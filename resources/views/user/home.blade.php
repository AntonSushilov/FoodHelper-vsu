@extends('layouts.app')

@section('content')
<div class="container rat">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-block btn-default" href="{{route('user.ration_constructor.create')}}">Создать рацион</a>
            <h1>Рационы созданные мной</h1>
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
                            <div class="both7">
                                <form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('user.ration_constructor.destroy', $ration)}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}

                                    <div class="red">
                                        <button type="submit" class="btn btn-danger"> Удалить </button>
                                    </div>

                                </form>
                                <form action="{{route('user.ration_constructor.edit', $ration)}}" class="bottem" method="get">
                                    {{ csrf_field() }}

                                    <button class="btn btn-primary"> Изменить </button>

                                </form>


                            </div>
                        </div>
                    </a>

                    @endforeach
                @else
                    <h3>Вы еще не создали ни одного рациона</h3>
                @endif

            </div>
            <h1>Рационы добавленные в избранные</h1>

            <div class="cards">
                @if ($rations != '[]')
                    @foreach ($selectRations as $ration)

                        <form class="card">
                            <a href="{{route('ration', ['ration'=>$ration->id])}}" >
                                <div class="card-text">
                                    <div class="card-heading">
                                        <h3 class="card-title">{{$ration->title}}</h3>
                                    </div>
                                    <div class="card-info">
                                        {{$ration->info}}
                                    </div>

                                </div>
                            </a>
                            <a class="" href="{{route('favorite', $ration)}}"><img class="img" src="{{asset('img/icons/health-s.png')}}" alt=""></a>
                        </form>


                    @endforeach
                @else
                    <h3>Вы еще не создали ни одного рациона</h3>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
