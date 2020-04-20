@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список категорий @endslot
	@slot('parent') Главная @endslot
	@slot('active') Категории @endslot
	@endcomponent

	<hr />

	<form class="form-horizontal" action="{{route('admin.product.update', ['product'=>$id])}}" enctype="multipart/form-data" method="post">
		{{ csrf_field() }}
        @method('PUT')


		<label for="">Наименование</label>
        <input type="text" class="form-control" name="title" value="{{$title}}" required>

        <label for="">Картинка</label>
        <img src="{{ asset('/storage/'. $path_foto)}}" width="50" height="50" alt="Фото">
        <div class="form-group">
            <input type="file" name="image">
        </div>

		<label for="">Описание</label>
		<textarea type="text" class="form-control" name="info" required>{{$info}}</textarea>

		<label for="">Свойства</label>
		<textarea type="text" class="form-control" name="properties"  required>{{$properties}}</textarea>

		<label for="">Состав</label>
		<textarea type="text" class="form-control" name="composition" required>{{$composition}}</textarea>

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
