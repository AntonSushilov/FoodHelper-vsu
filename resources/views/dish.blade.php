@extends('layouts.app')

@section('title','Продукты'.' - FoodHelper')

@section('content')


    <div class="container">
        <h1>{{$dish->id}}</h1>
        <h1>{{$dish->category->title}}</h1>
        <h1>{{$dish->title}}</h1>
        <h1><img class="img_preview_small" src="{{ asset('/storage/'. $dish->path_foto)}}" width="50" height="50" alt="Фото"></h1>
        <h1>{{$dish->info}}</h1>


            @forelse ($dish->product as $product)
            <h1>{{$product->title}}&nbsp;{{$product->pivot->mass}}гр</h1>
            @empty
                <h2>Данные отсутствуют</h2>
            @endforelse


        <h1>{{$dish->recipe}}</h1>
        <h1>{{$dish->kcal}}</h1>
        <h1>{{$dish->protein}}</h1>
        <h1>{{$dish->fat}}</h1>
        <h1>{{$dish->carbohydrate}}</h1>
    </div>


@endsection
