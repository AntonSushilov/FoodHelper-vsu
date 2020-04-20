@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список категорий @endslot
	@slot('parent') Главная @endslot
	@slot('active') Категории @endslot
	@endcomponent

	<hr />

	<form class="form-horizontal" action="{{route('admin.dish.update', ['dish'=>$id])}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		@method('PUT')


		<label for="">Наименование</label>
        <input type="text" class="form-control" name="title" value="{{$title}}" required>

        <label for="">Картинка</label>
        <img class="img_preview_small" src="{{ asset('/storage/'. $path_foto)}}" width="50" height="50" alt="Фото">
        <div class="form-group">
            <input type="file" name="image" value="{{$path_foto}}">
        </div>


        <label for="">Категория</label>
		<select class="form-control" name="category_id">
			<option value="0">-- без категории --</option>
				@include('admin.dishes.inc.update_form',['categories' => $categories])
		</select>

		<label for="">Описание</label>
        <textarea type="text" class="form-control" name="info"  required>{{$info}}</textarea>

        <label for="">Состав</label>
        <table id="tab">
            <tr>
                @include('admin.dishes.inc.update_select',['composition' => $composition])
            </tr>
        </table>
        <input type="button" value="+" id="add">


		<label for="">Рецепт</label>
        <textarea type="text" class="form-control" name="recipe"  required>{{$recipe}}</textarea>

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
$(function select(){
                $('.select-chosen').chosen({
                    width: 250,
                    no_results_text: "Нет такого продукта!",
                    placeholder_text_single: "Выберите продукт",
                    search_contains: true,
                    max_shown_results: 10
                });
            })
    var str = '<tr><td><select class="select-chosen" name="products[]">'+
        '@include("admin.dishes.inc.select")'+
        '<td><input type="text" placeholder="Граммы" name="mass[]"></td>'+
        '<td><input type="button" value="-" class="delrow"></td>'+
        '</select></td></tr>';

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
