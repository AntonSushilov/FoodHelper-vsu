@extends('layouts.app')

@section('title',"$ration->title".' - FoodHelper')

@section('content')


<div class="container rati">

<!--     @if (Auth::check())
    @if (auth()->user()->selectRation->contains($ration))
    <a class="" href="{{route('favorite', $ration)}}"><img class="img" src="{{asset('img/icons/health-s.png')}}" alt=""></a>
    @else
    <a class="" href="{{route('favorite', $ration)}}"><img class="img" src="{{asset('img/icons/health-o.png')}}" alt=""></a>
    @endif
    @if ( Auth::user()->name  == $ration->user->name)

    <form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('user.ration_constructor.destroy', $ration)}}" method="post">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}

        <div class="red">
            <button type="submit" class="btn btn-danger"> Удалить </button>
        </div>

    </form>
    <form action="{{route('user.ration_constructor.edit', $ration)}}" method="get">
        {{ csrf_field() }}

        <button class="btn btn-primary"> Изменить </button>

    </form>
    @endif
@endif -->





    <div class="decrip it jumbotron"><span>Создатель:</span> {{$ration->user->name}}     
        @if (Auth::check())
        <div class="both7">
            @if (auth()->user()->selectRation->contains($ration))
        <a class="" href="{{route('favorite', $ration)}}"><img class="img" src="{{asset('img/icons/health-s.png')}}" alt=""></a>
        @else
        <a class="" href="{{route('favorite', $ration)}}"><img class="img" src="{{asset('img/icons/health-o.png')}}" alt=""></a>
        @endif
        @if ( Auth::user()->name  == $ration->user->name)

       <div>
            <form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('user.ration_constructor.destroy', $ration)}}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}

            <div class="red">
                <button type="submit" class="btn btn-danger"> Удалить </button>
            </div>

        </form>
        <form action="{{route('user.ration_constructor.edit', $ration)}}" method="get">
            {{ csrf_field() }}

            <button class="btn btn-primary"> Изменить </button>

        </form>
       </div>
        @endif
        </div>
    @endif</div>
    <div class="decrip it jumbotron"><span>Название рациона:</span>{{$ration->title}}</div>
    <div class="decrip it jumbotron"><span>Информация о рационе:</span>{{$ration->info}}</div>
    <div class="decrip it jumbotron"><span>Завтрак:</span><br>
        <ins>Продукты:</ins><br>
        @forelse ($ration->product as $product)
            @if ($product->pivot->food == 'Завтрак')
            {{$product->title}}&nbsp;{{$product->pivot->mass}}гр<br>
            @endif
        @empty
            <td colspan="2" class="text-center"><h3>Данные отсутствуют</h3></td>
        @endforelse

        <ins>Блюда:</ins><br>
            @forelse ($ration->dish as $dish)
            @if ($dish->pivot->food == 'Завтрак')
            {{$dish->title}}<br>
            @endif
        @empty
            <h3>Данные отсутствуют</h3>
        @endforelse
    </div>
    <div class="decrip it jumbotron"><span>Обед:</span><br>
        <ins>Продукты:</ins><br>
        @forelse ($ration->product as $product)
            @if ($product->pivot->food == 'Обед')
            {{$product->title}}&nbsp;{{$product->pivot->mass}}гр<br>
            @endif
        @empty
            <td colspan="2" class="text-center"><h3>Данные отсутствуют</h3></td>
        @endforelse

        <ins>Блюда:</ins><br>
            @forelse ($ration->dish as $dish)
            @if ($dish->pivot->food == 'Обед')
            {{$dish->title}}<br>
            @endif
        @empty
            <h3>Данные отсутствуют</h3>
        @endforelse
    </div>
    <div class="decrip it jumbotron"><span>Ужин:</span><br>
        <ins>Продукты:</ins><br>
        @forelse ($ration->product as $product)
            @if ($product->pivot->food == 'Ужин')
            {{$product->title}}&nbsp;{{$product->pivot->mass}}гр<br>
            @endif
        @empty
            <td colspan="2" class="text-center"><h3>Данные отсутствуют</h3></td>
        @endforelse

        <ins>Блюда:</ins><br>
            @forelse ($ration->dish as $dish)
            @if ($dish->pivot->food == 'Ужин')
            {{$dish->title}}<br>
            @endif
        @empty
            <h3>Данные отсутствуют</h3>
        @endforelse
    </div>


</div>
@endsection
