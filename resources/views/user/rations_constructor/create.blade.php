@extends('layouts.app')

@section('title','Конструктор рациона'.' - FoodHelper')

@section('content')

   <div class="container">
       <div class="both7 parent">

           <div class="left">

               <div class="prod jumbotron" id="divLeft1">
                   <div class="both7 up">
                       <h3>Продукты</h3>
                       <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по продуктам">
                    </div>
                    <div class="cardss" id="divLeft1">

                        @foreach ($products as $product)
                        <div class="card" draggable="true" ondragstart="drag(event)" id="{{$product->id}}">

                            <img class="card-image" id="{{$product->id}}" src="{{ asset('/storage/'. $product->path_foto)}}" alt="Фото продукта">
                            <div class="card-text">
                                <p >{{$product->title}}</p>
                            </div>
                            <input type="text" placeholder="Граммы" name="mass1[]">

                        </div>
                        @endforeach

                    </div>

               </div>
               <div class="prod jumbotron" id="divLeft2">
                <div class="both7 up">
                       <h3>Блюда</h3>
                       <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по блюдам">
                   </div>
                   <div class="cardss" id="divLeft2">
                    @foreach ($dishes as $dish)
                        <div class="card" draggable="true" ondragstart="drag(event)" id="a{{$dish->id}}">
                            <span class="close" id="a{{$dish->id}}"></span>
                            <img class="card-image" id="a{{$dish->id}}" src="{{ asset('/storage/'. $dish->path_foto)}}" alt="Фото продукта">
                            <div class="card-text">
                                <p >{{$dish->title}}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
               </div>
           </div>




 
           <div class="right" id="divRight">
            <form class="form-horizontal" action="{{route('user.ration_constructor.store')}}" method="post" id="form">
                {{ csrf_field() }}
                <label for="">Наименование</label>
                <input type="text" class="form-control" name="title" placeholder="Название" value="{{$title}}" required>
                <label for="">Описание</label>
                <textarea type="text" class="form-control" name="info" value="{{$info}}" required></textarea>

                <div class="day jumbotron" >
                  <h3>Завтрак</h3>
                  <input type="button" value="Очистить" onclick="but1()">
                        <div class="zone" id="divRight1" ondrop="drop(event)" ondragover="allowDrop(event)" name="breakfast[]">
                            <input type="hidden" id="atr" name="arr1[]" value="">

                        </div>
                </div>

                <div class="day jumbotron">
                  <h3>Обед</h3>
                  <input type="button" value="Очистить" onclick="but2()">
                     <div class="zone" id="divRight2" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <input type="hidden" id="atr2" name="arr2[]" value="">
                     </div>

                </div>

                <div class="day jumbotron">
                  <h3>Ужин</h3>
                  <input type="button" value="Очистить" onclick="but3()">
                     <div class="zone" id="divRight3" ondrop="drop(event)" ondragover="allowDrop(event)">
                        <input type="hidden" id="atr3" name="arr3[]" value="">
                     </div>

                </div>

                <input class="btn" type="submit" value="Сохранить" id="click">
            </form>
           </div>
       </div>
   </div>


<script>


    click.onclick = function() {

        let breakfast = [];
        var elems = document.getElementById('divRight1').getElementsByTagName('div');
        for(var i=0; i<elems.length; i++) {
            if(elems[i].id != "")
            {
                breakfast.push(elems[i].id);

            }
        }
        var elems = document.getElementById('atr').setAttribute('value', breakfast);

        let lunch = [];
        var elems = document.getElementById('divRight2').getElementsByTagName('div');
        for(var i=0; i<elems.length; i++) {
            if(elems[i].id != "")
            {
                lunch.push(elems[i].id);
            }
        }
        var elems = document.getElementById('atr2').setAttribute('value', lunch);

        let dinner = [];
        var elems = document.getElementById('divRight3').getElementsByTagName('div');
        for(var i=0; i<elems.length; i++) {
            if(elems[i].id != "")
            {
                dinner.push(elems[i].id);
            }
        }
        var elems = document.getElementById('atr3').setAttribute('value', dinner);


    };

    function but1() {
        var element = document.getElementById("divRight1");
        while (element.firstChild) {
         element.removeChild(element.firstChild);
        }
    }
    function but2() {
        var element = document.getElementById("divRight2");
        while (element.firstChild) {
         element.removeChild(element.firstChild);
        }
    }
    function but3() {
        var element = document.getElementById("divRight3");
        while (element.firstChild) {
         element.removeChild(element.firstChild);
        }
    }

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

