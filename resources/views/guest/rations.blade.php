@extends('layouts.app')

@section('title','Продукты'.' - FoodHelper')

@section('content')


    <div class="container rat">

        <a class="btn btn-block btn-default" href="{{route('user.ration_constructor.create')}}">Создать рацион</a>

        <div class="cards">
            @foreach ($rations as $ration)
            <a href="{{route('ration', ['ration'=>$ration->id])}}" class="card">
                <div class="card-text">
                    <div class="card-heading">
                        <h3 class="card-title">{{$ration->title}}</h3>
                    </div>
                    <div class="card-info">
                        {{$ration->info}}
                    </div>
                   
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
  <title>Layer 2</title>
  <g id="layer2">
   <path id="svg_3" d="m219.28949,21.827393c-66.240005,0 -119.999954,53.76001 -119.999954,120c0,134.755524 135.933151,170.08728 228.562454,303.308044c87.574219,-132.403381 228.5625,-172.854584 228.5625,-303.308044c0,-66.23999 -53.759888,-120 -120,-120c-48.047913,0 -89.401611,28.370422 -108.5625,69.1875c-19.160797,-40.817078 -60.514496,-69.1875 -108.5625,-69.1875z"/>
  </g>
 </g>
</svg>
                        
                    
                </div>
            </a>
            @endforeach

        </div>
        {{$rations->links()}}
    </div>


@endsection
