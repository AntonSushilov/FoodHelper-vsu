@extends('layouts.app')

@section('title','Продукты'.' - FoodHelper')

@section('content')


    <div class="container">
        <h1>{{$product->id}}</h1>
        <h1>{{$product->title}}</h1>
        <h1><img class="img_preview_small" src="{{ asset('/storage/'. $product->path_foto)}}" width="50" height="50" alt="Фото"></h1>
        <h1>{{$product->info}}</h1>
        <h1>{{$product->properties}}</h1>
        <h1>{{$product->composition}}</td>
        <h1>{{$product->kcal}}</h1>
        <h1>{{$product->protein}}</h1>
        <h1>{{$product->fat}}</h1>
        <h1>{{$product->carbohydrate}}</h1>
    </div>


@endsection
