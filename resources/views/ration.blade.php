@extends('layouts.app')

@section('title','Продукты'.' - FoodHelper')

@section('content')


    <div class="container">
                    <th>{{$ration->user->name}}</th><br>
                    <th>{{$ration->title}}</th><br>
                    <th>{{$ration->info}}</th><br>
                    <th>
                        <b>Завтрак</b><br>
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

                        <b>Обед</b><br>
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

                        <b>Ужин</b><br>
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
                    </th>
    </div>


@endsection
