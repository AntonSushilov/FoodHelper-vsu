@extends('layouts.app')

@section('title','Конструктор рациона'.' - FoodHelper')

@section('content')

<div class="container">

    <div class="app">
		<div class="lists">

			<div class="list">
                <div class="both7 up">
                    <h3>Продукты</h3>
                    <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по продуктам">
                 </div>
                 @foreach ($products as $product)
                 <div class="list-item" draggable="true" id="{{$product->id}}">
                     <input type="text" placeholder="Граммы" name="mass1[]">
                     <img class="card-image" src="{{ asset('/storage/'. $product->path_foto)}}" alt="Фото продукта">
                     <div class="card-text" id="mydivheader">
                         <p >{{$product->title}}</p>


                     </div>
                 </div>
             @endforeach
				<div class="list-item" draggable="true">List item 1</div>
				<div class="list-item" draggable="true">List item 2</div>
				<div class="list-item" draggable="true">List item 3</div>
			</div>
            <div class="list"></div>

        </div>
        <div class="lists">

			<div class="list">
                <div class="both7 up">
                    <h3>Блюда</h3>
                    <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по продуктам">
                 </div>
                 @foreach ($dishes as $dish)
                 <div class="list-item" draggable="true" id="{{$dish->id}}">
                     <img class="card-image" src="{{ asset('/storage/'. $dish->path_foto)}}" alt="Фото продукта">
                     <div class="card-text">
                         <p >{{$dish->title}}</p>
                     </div>
                 </div>
             @endforeach
				<div class="list-item" draggable="true">List item 1</div>
				<div class="list-item" draggable="true">List item 2</div>
				<div class="list-item" draggable="true">List item 3</div>
			</div>
            <div class="list"></div>

		</div>
	</div>







<script>
    const list_items = document.querySelectorAll('.list-item');
const lists = document.querySelectorAll('.list');

let draggedItem = null;

for (let i = 0; i < list_items.length; i++) {
	const item = list_items[i];

	item.addEventListener('dragstart', function () {
		draggedItem = item;
		setTimeout(function () {
			item.style.display = 'none';
		}, 0)
	});

	item.addEventListener('dragend', function () {
		setTimeout(function () {
			draggedItem.style.display = 'block';
			draggedItem = null;
		}, 0);
	})

	for (let j = 0; j < lists.length; j ++) {
		const list = lists[j];

		list.addEventListener('dragover', function (e) {
			e.preventDefault();
		});

		list.addEventListener('dragenter', function (e) {
			e.preventDefault();
			this.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
		});

		list.addEventListener('dragleave', function (e) {
			this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
		});

		list.addEventListener('drop', function (e) {
			console.log('drop');
			this.append(draggedItem);
			this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
		});
	}
}
</script>


@endsection

