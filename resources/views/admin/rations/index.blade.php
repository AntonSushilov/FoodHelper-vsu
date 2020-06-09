@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список приёмов пищи @endslot
	@slot('parent') Главная @endslot
	@slot('active') Приёмы пищи @endslot
	@endcomponent

    <hr>
    <div class="row">
        <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по ID..">
        <input class="find" type="text" id="myInputNameUser" onkeyup="searchNameUser()" placeholder="Поиск по имени..">
        <input class="find" type="text" id="myInputName" onkeyup="searchName()" placeholder="Поиск по названию..">
    </div>


	<a href="{{route('admin.ration.create')}}" class="btn btn-primary pull-right bot"><i class="fafa-plus-square-o"></i>Создать рацион</a>

</div>
<table class="table table-striped" id="myTable">
        <thead>
            <th>ID</th>
            <th>Имя</th>
            <th>Название</th>
            <th>Информация</th>
            <th>Рацион</th>
            <th class="text-center">Действия</th>
        </thead>
        <tbody>
            @forelse($rations as $ration)
                <tr>
                    <td>{{$ration->id}}</td>
                    <td>{{$ration->user->name}}</td>
                    <td>{{$ration->title}}</td>
                    <td>{{$ration->info}}</td>
                    <td>
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


                    </td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('admin.ration.destroy', $ration)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}

                            <a class="btn btn-default" href="{{route('admin.ration.edit', $ration->id)}}"><i class="fa fa-edit"></i></a>

                            <button type="submit" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                        </form>


                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center"><h2>Данные отсутствуют</h2></td>
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
    function searchNameUser() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInputNameUser");
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
