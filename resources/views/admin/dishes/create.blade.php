@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список блюд @endslot
	@slot('parent') Главная @endslot
	@slot('active') Блюда @endslot
	@endcomponent

	<hr />

	<form class="form-horizontal" action="{{route('admin.dish.store')}}" method="post">
		{{ csrf_field() }}


		<label for="">Наименование</label>
		<input type="text" class="form-control" name="title" value="{{$title}}" required>

		<label for="">Категория</label>
		<select class="form-control" name="category_id">
			<option value="0">-- без категории --</option>
				@include('admin.dishes.create_form',['categories' => $categories])
		</select>

		<label for="">Описание</label>
        <textarea type="text" class="form-control" name="info" value="{{$info}}" required></textarea>

		<label for="">Состав</label>
        <textarea type="text" class="form-control" name="composition" value="{{$composition}}" required></textarea>




        <hr>
        <div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <table id="tab">
              <tr class="row">
                <td>
                  <input type="text" placeholder="Продукт" name="products[]">
                </td>
                <td>
                  <input type="text" placeholder="Граммы" name="mass[]">
                </td>
                <td><a href="#" class="delete">x</a>
                </td>
              </tr>
            </table>

            <input type="button" value="добавить строку" id="but">
        </div>


        <hr>





		<label for="">Рецепт</label>
		<textarea type="text" class="form-control" name="recipe" value="{{$recipe}}" required></textarea>

		<label for="">Количество калорий</label>
		<input type="integer" class="form-control" name="kcal" value="{{$kcal}}" required>

		<label for="">Количество белков</label>
		<input type="integer" class="form-control" name="protein" value="{{$protein}}" required>

		<label for="">Количество жиров</label>
		<input type="integer" class="form-control" name="fat" value="{{$fat}}" required>

		<label for="">Количество углеводов</label>
		<input type="integer" class="form-control" name="carbohydrate" value="{{$carbohydrate}}" required>

		<hr>

		<input class="btn btn-primary" type="submit" value="Сохранить">



	</form>

</div>

<script>
    $(function() {
        var i = 1;
        //добавить строку табюлицы
        $('#but').on('click', function() {
            i++;
          var row = $('.row:last');
          row.clone().insertAfter(row);
        });

        //удалить строку таблицы
        $('#tab').on('click', '.delete', removeRow);
        var rows = $('#tab tr').length;
        function removeRow() {
            if(i > 1)
            {
                i--;
                $(this).closest('.row').remove();
            }

        }
      })
</script>

@endsection





