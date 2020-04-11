@extends('layouts.app')

@section('title','Продукты'.' - FoodHelper')

@section('content')


    <div class="container">
        <div class="both__1">
            <img class="img_preview_smal" src="{{ asset('/storage/'. $product->path_foto)}}" width="50" height="50" alt="Фото">
            <div>
                <div class="decrip"><span>id:</span> {{$product->id}}</div> 
                <div class="decrip"><span>Название:</span> {{$product->title}}</div>
                <div class="decrip"><span>Информация:</span> {{$product->info}}</div>
                <div class="decrip"><span>Свойства:</span> {{$product->properties}}</div>
                <div class="decrip"><span>Состав:</span> {{$product->composition}}</div>
            </div>
        </div>

        <div class="both__2">
            <div class="decrip it"><span>Ккал:</span> {{$product->kcal}}</div>
            <div class="decrip it"><span>Белки: </span>{{$product->protein}}</div>
            <div class="decrip it"><span>Жиры:</span> {{$product->fat}}</div>
            <div class="decrip it"><span>Углеводы:</span> {{$product->carbohydrate}}</div>
        </div>
    </div>


@endsection
