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
@endsection