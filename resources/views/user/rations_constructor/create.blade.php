@extends('layouts.app')

@section('title','Конструктор рациона'.' - FoodHelper')

@section('content')

   <div class="container">
       <div class="both7 parent">
           <div class="left">
               <div class="prod jumbotron" id="divLeft">
                    <div class="both7 up">
                       <h3>Продукты</h3>
                       <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по продуктам">
                    </div>
                    <div class="cardss" id="divLeft1">
                        @foreach ($products as $product)
                            <div class="card" draggable="true" ondragstart="drag(event)" id="{{$product->id}}">
                                <input type="text" placeholder="Граммы" name="mass1[]">
                                <img class="card-image" src="{{ asset('/storage/'. $product->path_foto)}}" alt="Фото продукта">
                                <div class="card-text" id="mydivheader">
                                    <p >{{$product->title}}</p>


                                </div>
                            </div>
                        @endforeach

                    </div>

               </div>
               <div class="prod jumbotron" id="divLeft">
                   <div class="both7 up">
                       <h3>Блюда</h3>
                       <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по блюдам">
                   </div>
                   <div class="cardss" id="divLeft1">
                    @foreach ($dishes as $dish)
                        <div class="card" draggable="true" ondragstart="drag(event)" id="{{$dish->id}}">
                            <img class="card-image" src="{{ asset('/storage/'. $dish->path_foto)}}" alt="Фото продукта">
                            <div class="card-text">
                                <p >{{$dish->title}}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
               </div>
           </div>
           <div class="right" id="divRight">
            <form class="form-horizontal" action="{{route('user.ration_constructor.store')}}" method="post">
                {{ csrf_field() }}
                <div class="day jumbotron" >
                  <h3>Завтрак</h3>

                     <div class="zone" id="divRight1" ondrop="drop(event)" ondragover="allowDrop(event)">

                     </div>

                </div>
                <div class="day jumbotron">
                  <h3>Обед</h3>

                     <div class="zone" id="divRight2" ondrop="drop(event)" ondragover="allowDrop(event)">

                     </div>

                </div>
                <div class="day jumbotron">
                  <h3>Ужин</h3>

                     <div class="zone" id="divRight3" ondrop="drop(event)" ondragover="allowDrop(event)">

                     </div>

                </div>

                <input class="btn btn-primary" type="submit" value="Сохранить">
            </form>
           </div>
       </div>
   </div>


<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    var nodeCopy = document.getElementById(data).cloneNode(true);
    ev.target.appendChild(nodeCopy);
    ev.stopPropagation();
    return false;
}
</script>


@endsection

