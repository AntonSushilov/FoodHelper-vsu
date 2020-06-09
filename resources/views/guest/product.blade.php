@extends('layouts.app')

@section('title',"$product->title".' - FoodHelper')

@section('content')


    <div class="container">
        <div class="both__1">
            <img class="img_preview_smal" src="{{ asset('/storage/'. $product->path_foto)}}" width="50" height="50" alt="Фото">
            <div>
                <div class="decrip it jumbotron"><span>Название:</span> {{$product->title}}</div>
                <div class="both__2">
                    <div class="decrip jumbotron"><span>Ккал:</span> {{$product->kcal}}</div>
                </div>
                <div class="both__2">
                    <div class="decrip jumbotron"><span>Белки: </span>{{$product->protein}}</div>
                    <div class="decrip jumbotron"><span>Жиры:</span> {{$product->fat}}</div>
                    <div class="decrip jumbotron"><span>Углеводы:</span> {{$product->carbohydrate}}</div>
                </div>
            </div>
        </div>

        <div class="decrip jumbotron"><span>Информация:</span> {{$product->info}}</div>
        <div class="decrip jumbotron"><span>Свойства:</span> {{$product->properties}}</div>
        <div class="decrip jumbotron"><span>Состав:</span> {{$product->composition}}</div>


    </div>


@endsection
