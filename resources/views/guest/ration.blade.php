@extends('layouts.app')

@section('title',"$ration->title".' - FoodHelper')

@section('content')


<div class="container rati">

    <?xml version="1.0"?><svg width="640" height="480" viewbox="0 0 640 480" xmlns="http://www.w3.org/2000/svg">
 <title>Small red heart with transparent background</title>
 <g>
  <title>Layer 1</title>
  <g id="layer1">
   <path id="svg_2" d="m219.28949,21.827393c-66.240005,0 -119.999954,53.76001 -119.999954,120c0,134.755524 135.933151,170.08728 228.562454,303.308044c87.574219,-132.403381 228.5625,-172.854584 228.5625,-303.308044c0,-66.23999 -53.759888,-120 -120,-120c-48.047913,0 -89.401611,28.370422 -108.5625,69.1875c-19.160797,-40.817078 -60.514496,-69.1875 -108.5625,-69.1875z"/>
  </g>
 </g>
</svg>
<?xml version="1.0"?><svg width="640" height="480" viewbox="0 0 640 480" xmlns="http://www.w3.org/2000/svg">
 <title>Small red heart with transparent background</title>
 <g>
  <title>Layer 1</title>
  <g id="layer1">
   <path id="svg_3" d="m219.28949,21.827393c-66.240005,0 -119.999954,53.76001 -119.999954,120c0,134.755524 135.933151,170.08728 228.562454,303.308044c87.574219,-132.403381 228.5625,-172.854584 228.5625,-303.308044c0,-66.23999 -53.759888,-120 -120,-120c-48.047913,0 -89.401611,28.370422 -108.5625,69.1875c-19.160797,-40.817078 -60.514496,-69.1875 -108.5625,-69.1875z"/>
  </g>
 </g>
</svg>
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
