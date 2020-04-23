@extends('layouts.app')

@section('title','Конструктор рациона'.' - FoodHelper')

@section('content')

   <div class="container">
       <div class="both7 parent">
           <div class="left">
               <div class="prod jumbotron" id="q1">
                    <div class="both7 up">
                       <h3>Продукты</h3>
                       <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по продуктам">
                    </div>
                    <div class="cardss" >
                        <div class="card" draggable="true" ondragstart="drag(event)" id="drag1">
                            <img class="card-image" src="../../public/img/dim.jpg" alt="Фото продукта">
                            <div class="card-text" id="mydivheader">
                                <p >котлета</p>
                            </div>
                        </div>
                        <div class="card" raggable="true" ondragstart="drag(event)" id="drag2" >
                            <img class="card-image" src="../../public/img/dim.jpg" alt="Фото продукта">
                            <div class="card-text" id="mydivheader">
                                <p >котлета</p>
                            </div>
                        </div>

                    </div>

               </div>
               <div class="prod jumbotron">
                   <div class="both7 up">
                       <h3>Блюда</h3>
                       <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по блюдам">
                   </div>
                   <div class="cardss" id='draggableSpan2' draggable='true' ondragstart='onDragStart(event);'>
                        <div class="card">
                            <img class="card-image" src="../../public/img/dim.jpg" alt="Фото продукта">
                            <div class="card-text">
                                <p >Котлеты</p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
           <div class="right">
                <div class="day jumbotron" >
                  <h3>Завтрак</h3>
                  <form action="" >
                     <div class="zone" ondrop="drop(event)" ondragover="allowDrop(event)">

                     </div>
                  </form>
                </div>
                <div class="day jumbotron">
                  <h3>Обед</h3>
                  <form action="">
                     <div class="zone" ondrop="drop(event)" ondragover="allowDrop(event)">

                     </div>
                  </form>
                </div>
                <div class="day jumbotron">
                  <h3>Ужин</h3>
                  <form action="">
                     <div class="zone" ondrop="drop(event)" ondragover="allowDrop(event)">

                     </div>
                  </form>
                </div>
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
   /* const firstDiv = document.querySelector( ".card" );



    function onDragStart(event) {
        event
        .dataTransfer
        .setData('text/plain', event.target.id);

        event
        .currentTarget
        .style
        .backgroundColor = '';
    }

    function onDragOver(event) {
        event.preventDefault();
    }

    function onDrop(event) {
        const id = event
        .dataTransfer
        .getData('text');

        const draggableElement = document.getElementById(id);
        const dropzone = event.target;

        dropzone.appendChild(draggableElement);
        const newDiv = firstDiv.cloneNode( true ); // клонируем элемент с его потомками
        document.p.appendChild( newDiv ); // добавляем клонированный элемент элементу <body>



        event
        .dataTransfer
        .clearData();
    }*/
</script>


@endsection

