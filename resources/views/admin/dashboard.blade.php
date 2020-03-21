@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Блюда 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Продуктов 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Посетителей 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Сегодня 0</span></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Создать категорию</a>
			<a class="list-group-item" href="#">
				<h4 class="list-group-item-heading">Категория</h4>
				<p class="list-group-item-text">
					Кол-во категорий
				</p>

			</a>
		</div>
		<div class="col-sm-4">
			<a class="btn btn-block btn-default" href="#">Создать блюдо</a>
			<a class="list-group-item" href="#">
				<h4 class="list-group-item-heading">Блюдо первое</h4>
				<p class="list-group-item-text">
					Кол-во продуктов
				</p>

			</a>
		</div>
		<div class="col-sm-4">
			<a class="btn btn-block btn-default" href="#">Создать продукт</a>
			<a class="list-group-item" href="#">
				<h4 class="list-group-item-heading">Продукт первый</h4>
				<p class="list-group-item-text">
					Блюдо
				</p>

			</a>
		</div>
	</div>
	
</div>
@endsection