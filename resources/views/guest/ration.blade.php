@extends('layouts.app')

@section('title',"$ration->title".' - FoodHelper')

@section('content')


<div class="container rati">

    @if (auth()->user()->selectRation->contains($ration))
        <a class="" href="{{route('favorite', $ration)}}"><img class="img" src="{{asset('img/icons/heart-s.png')}}" alt=""></a>
    @else
        <a class="" href="{{route('favorite', $ration)}}"><img class="img" src="{{asset('img/icons/heart-o.png')}}" alt=""></a>
    @endif




    <div class="decrip it jumbotron"><span>Создатель:</span> {{$ration->user->name}} </div>
    <div class="decrip it jumbotron"><span>Название рациона:</span>{{$ration->title}}</div>
    <div class="decrip it jumbotron"><span>Информация о рационе:</span>{{$ration->info}}</div>
    <div class="decrip it jumbotron"><span>Завтрак:</span><br>
        <ins>Продукты:</ins><br>
        @forelse ($ration->product as $product)
            @if ($product->pivot->food == 'Завтрак')
            {{$product->title}}&nbsp;{{$product->pivot->mass}}гр<br>
            @endif
        @empty
            <td colspan="2" class="text-center"><h2>Данные отсутствуют</h2></td>
        @endforelse

        <ins>Блюда:</ins><br>
            @forelse ($ration->dish as $dish)
            @if ($dish->pivot->food == 'Завтрак')
            {{$dish->title}}<br>
            @endif
        @empty
            <h2>Данные отсутствуют</h2>
        @endforelse
    </div>
    <div class="decrip it jumbotron"><span>Обед:</span><br>
        <ins>Продукты:</ins><br>
        @forelse ($ration->product as $product)
            @if ($product->pivot->food == 'Обед')
            {{$product->title}}&nbsp;{{$product->pivot->mass}}гр<br>
            @endif
        @empty
            <td colspan="2" class="text-center"><h2>Данные отсутствуют</h2></td>
        @endforelse

        <ins>Блюда:</ins><br>
            @forelse ($ration->dish as $dish)
            @if ($dish->pivot->food == 'Обед')
            {{$dish->title}}<br>
            @endif
        @empty
            <h2>Данные отсутствуют</h2>
        @endforelse
    </div>
    <div class="decrip it jumbotron"><span>Ужин:</span><br>
        <ins>Продукты:</ins><br>
        @forelse ($ration->product as $product)
            @if ($product->pivot->food == 'Ужин')
            {{$product->title}}&nbsp;{{$product->pivot->mass}}гр<br>
            @endif
        @empty
            <td colspan="2" class="text-center"><h2>Данные отсутствуют</h2></td>
        @endforelse

        <ins>Блюда:</ins><br>
            @forelse ($ration->dish as $dish)
            @if ($dish->pivot->food == 'Ужин')
            {{$dish->title}}<br>
            @endif
        @empty
            <h2>Данные отсутствуют</h2>
        @endforelse
    </div>


</div>
@endsection
