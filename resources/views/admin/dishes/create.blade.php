@extends('admin.layouts.app_admin')

@section('name')
@include('admin.dishes.inc.select')

@endsection
@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список блюд @endslot
	@slot('parent') Главная @endslot
	@slot('active') Блюда @endslot
	@endcomponent

	<hr />

	<form class="form-horizontal" action="{{route('admin.dish.store')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}


		<label for="">Наименование</label>
		<input type="text" class="form-control" name="title" value="{{$title}}" required>

        <label for="">Картинка</label>
        <div class="form-group">
            <input type="file" name="image">
        </div>

		<label for="">Категория</label>
		<select class="form-control" name="category_id">
			<option value="0">-- без категории --</option>
				@include('admin.dishes.inc.create_form',['categories' => $categories])
		</select>

		<label for="">Описание</label>
        <textarea type="text" class="form-control" name="info" value="{{$info}}" required></textarea>

		<label for="">Состав</label>
        <table id="tab">
            <tr>
            </tr>
        </table>
        <input type="button" value="+" id="add">

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

    var str = '<tr><td><select class="select-chosen" name="products[]">'+
        '@include("admin.dishes.inc.select")'+
        '<td><input type="text" placeholder="Граммы" name="mass[]"></td>'+
        '<td><input type="button" value="-" class="delrow" /></td></select></td></tr>';

    $(function table() {
        //добавить строку табюлицы
        $('#add').click(function(){
            $('#tab').append(str);
            $('tr')
            .find('td')
            .parent()//traversing to 'tr' Element
            .append('');


        $('.delrow').click(function(){
            $(this).parent().parent().remove(); //Deleting the Row (tr) Element
        });
            $(function select(){
                $('.select-chosen').chosen({
                    width: 250,
                    no_results_text: "Нет такого продукта!",
                    placeholder_text_single: "Выберите продукт",
                    search_contains: true,
                    max_shown_results: 10
                });
            })
        })


    })


</script>

@endsection






