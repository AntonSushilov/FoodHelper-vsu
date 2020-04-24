@extends('layouts.app')

@section('title','Продукты'.' - FoodHelper')

@section('content')


    <div class="container">
        <div class="cards">
            @foreach ($products as $product)
            <a href="{{route('product', ['product'=>$product->id])}}" class="card">
                <img class="card-image card-image-prod" src="{{ asset('/storage/'. $product->path_foto)}}" alt="Фото продукта">
                <div class="card-text">
                    <div class="card-heading">
                        <h3 class="card-title">{{$product->title}}</h3>
                    </div>
                    <div class="card-info clip">
                        {{$product->info}}
                    </div>
                </div>
            </a>
            @endforeach

        </div>
    </div>


@endsection
