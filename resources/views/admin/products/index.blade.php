@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список продуктов @endslot
	@slot('parent') Главная @endslot
	@slot('active') Продукты @endslot
	@endcomponent

    <hr>
    <div class="row">
        <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по ID..">
        <input class="find" type="text" id="myInputName" onkeyup="searchName()" placeholder="Поиск по наименованию..">
    </div>

	<a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right bot"><i class="fafa-plus-square-o"></i>Создать продукт</a>

</div>

<table class="table table-striped" id="myTable">
		<thead>
			<th>ID</th>
            <th>Наименование</th>
            <th>Фото</th>
			<th>Информация</th>
			<th>Свойства</th>
			<th>Состав</th>
			<th>Ккал</th>
			<th>Белки</th>
			<th>Жиры</th>
			<th>Углеводы</th>
			<th>Действия</th>
		</thead>
		<tbody>
			@forelse($products as $product)
				<tr>
					<td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td><img class="img_preview_small" src="{{ asset('/storage/'. $product->path_foto)}}" width="50" height="50" alt="Фото"></td>
					<td>{{$product->info}}</td>
					<td>{{$product->properties}}</td>
					<td>{{$product->composition}}</td>
					<td>{{$product->kcal}}</td>
					<td>{{$product->protein}}</td>
					<td>{{$product->fat}}</td>
					<td>{{$product->carbohydrate}}</td>
					<td>
						<form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('admin.product.destroy', $product)}}" method="post">
							<input type="hidden" name="_method" value="DELETE">
							{{ csrf_field() }}

							<a class="btn btn-default" href="{{route('admin.product.edit', ['product'=>$product->id])}}"><i class="fa fa-edit"></i></a>

							<button type="submit" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
						</form>


					</td>
				</tr>
			@empty
				<tr>
					<td colspan="11" class="text-center"><h2>Данные отсутствуют</h2></td>
				</tr>
			@endforelse
		</tbody>
	</table>

<script>
    function searchId() {
      // Declare variables
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInputId");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }

    function searchName() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInputName");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
          if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
</script>
@endsection
