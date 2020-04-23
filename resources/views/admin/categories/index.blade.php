@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список категорий @endslot
	@slot('parent') Главная @endslot
	@slot('active') Категории @endslot
	@endcomponent

    <hr>
    <div class="row">
        <input class="find" type="text" id="myInputId" onkeyup="searchId()" placeholder="Поиск по ID..">
        <input class="find" type="text" id="myInputName" onkeyup="searchName()" placeholder="Поиск по наименованию..">
    </div>


	<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right bot"><i class="fafa-plus-square-o"></i>Создать категорию</a>

</div>
<table class="table table-striped" id="myTable">
    <thead>
      <th>ID</th>
      <th>Наименование</th>
      <th class="text-center">Действия</th>
    </thead>
    <tbody>
      @forelse($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->title}}</td>
          <td class="text-right">
            <form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('admin.category.destroy', $category)}}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

              <a class="btn btn-default" href="{{route('admin.category.edit', $category->id)}}"><i class="fa fa-edit"></i></a>

              <button type="submit" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
            </form>


          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
    <tfoot>
      <tr>
        <td>
          <ul class="pagination pull-right">
            {{$categories->links()}}
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
