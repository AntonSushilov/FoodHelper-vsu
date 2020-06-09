@extends('layouts.app')

@section('title',"$dish->title".' - FoodHelper')

@section('content')

<div class="container">
    <div class="both__1">
        <img class="img_preview_smal" src="{{ asset('/storage/'. $dish->path_foto)}}" width="50" height="50" alt="Фото">
        <div>
            <div class="decrip it jumbotron"><span>Название:</span>{{$dish->title}}</div>
            <div class="decrip it jumbotron"><span>Категория блюда:</span>{{$dish->category->title}}</div>
            <div class="both__2">
                <div class="decrip jumbotron"><span>Ккал:</span> {{$dish->kcal}}</div>
            </div>
            <div class="both__2">
                <div class="decrip jumbotron"><span>Белки: </span>{{$dish->protein}}</div>
                <div class="decrip jumbotron"><span>Жиры:</span> {{$dish->fat}}</div>
                <div class="decrip jumbotron"><span>Углеводы:</span> {{$dish->carbohydrate}}</div>
            </div>
        </div>
    </div>

    <div class="decrip jumbotron"><span>Информация:</span> {{$dish->info}}</div>
    <div class="decrip jumbotron"><span>Рецепт:</span> {{$dish->recipe}}</div>
    <div class="decrip jumbotron"><span>Состав:</span> <br>
        @forelse ($dish->product as $product)
        {{$product->title}}&nbsp;{{$product->pivot->mass}}гр<br>
        @empty
            <h2>Данные отсутствуют</h2>
        @endforelse
    </div>


</div>






@endsection
