@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список блюд @endslot
	@slot('parent') Главная @endslot
	@slot('active') Блюда @endslot
	@endcomponent

    <hr>
    <div class="row">
        <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по ID..">
        <input class="find" type="text" id="myInputCategory" onkeyup="searchCategory()" placeholder="Поиск по категории..">
        <input class="find" type="text" id="myInputName" onkeyup="searchName()" placeholder="Поиск по наименованию..">
    </div>


	<a href="{{route('admin.dish.create')}}" class="btn btn-primary pull-right bot"><i class="fafa-plus-square-o"></i>Создать блюдо</a>

</div>
<table class="table table-striped" id="myTable">
    <thead>
      <th>ID</th>
      <th>Категория</th>
            <th>Наименование</th>
            <th>Фото</th>
      <th>Информация</th>
      <th>Состав</th>
      <th>Рецепт</th>
      <th>Ккал</th>
      <th>Белки</th>
      <th>Жиры</th>
      <th>Углеводы</th>
      <th class="text-center">Действия</th>
    </thead>
    <tbody>
      @forelse($dishes as $dish)
        <tr>
          <td>{{$dish->id}}</td>
          <td>{{$dish->category->title}}</td>
                    <td>{{$dish->title}}</td>
                    <td><img class="img_preview_small" src="{{ asset('/storage/'. $dish->path_foto)}}" width="50" height="50" alt="Фото"></td>
                    <td>{{$dish->info}}</td>

                    <td>
                        @forelse ($dish->product as $product)
                            {{$product->title}}&nbsp;{{$product->pivot->mass}}гр
                        @empty
                            <td colspan="2" class="text-center"><h2>Данные отсутствуют</h2></td>
                        @endforelse
                    </td>

          <td>{{$dish->recipe}}</td>
          <td>{{$dish->kcal}}</td>
          <td>{{$dish->protein}}</td>
          <td>{{$dish->fat}}</td>
          <td>{{$dish->carbohydrate}}</td>
          <td class="text-right">
            <form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('admin.dish.destroy', $dish)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

              <a class="btn btn-default" href="{{route('admin.dish.edit', ['dish'=>$dish->id])}}"><i class="fa fa-edit"></i></a>

              <button type="submit" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
            </form>


          </td>
        </tr>
      @empty
        <tr>
          <td colspan="12" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
    <tfoot>
      <tr>
        <td>
          <ul class="pagination pull-right">
            {{$dishes->links()}}
          </ul>
        </td>
      </tr>
    </tfoot>
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
    function searchCategory() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInputCategory");
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
    function searchName() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInputName");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[2];
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
