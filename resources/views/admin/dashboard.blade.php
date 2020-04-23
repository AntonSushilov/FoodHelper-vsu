@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Приёмов пищи {{$foodCount}}</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Категорий {{$categoriesCount}}</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Блюд {{$dishCount}}</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="label label-primary">Продуктов {{$productCount}}</span></p>
			</div>
        </div>


    </div>
    <div class="row">
        <div class="col-sm-12">
			<div class="jumbotron">
				<p><span class="label label-primary">Рационов {{$rationCount}}</span></p>
			</div>
		</div>
    </div>

	<div class="row">
		<div class="col-sm-6">
			<div class="jumbotron">
				<p><span class="label label-primary">Зарегистрировано пользователей {{$userCount}}</span></p>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="jumbotron">
				<p><span class="label label-primary">Сегодня 0</span></p>
			</div>
		</div>
	</div>
	<div class="row see">
        <div class="col-sm-6">
			<a class="btn btn-block btn-default" href="{{route('admin.food.create')}}">Создать приём пищи</a>
			<a class="list-group-item" href="{{route('admin.food.index')}}">
				<h4 class="list-group-item-heading">Список приёмов пищи</h4>
			</a>
		</div>
		<div class="col-sm-6">
			<a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Создать категорию</a>
			<a class="list-group-item" href="{{route('admin.category.index')}}">
				<h4 class="list-group-item-heading">Список категорий</h4>
			</a>
		</div>

    </div>
    <div class="row see">
        <div class="col-sm-6">
			<a class="btn btn-block btn-default" href="{{route('admin.dish.create')}}">Создать блюдо</a>
			<a class="list-group-item" href="{{route('admin.dish.index')}}">
				<h4 class="list-group-item-heading">Список блюд</h4>
			</a>
		</div>
		<div class="col-sm-6">
			<a class="btn btn-block btn-default" href="{{route('admin.product.create')}}">Создать продукт</a>
			<a class="list-group-item" href="{{route('admin.product.index')}}">
				<h4 class="list-group-item-heading">Список продуктов</h4>
			</a>
		</div>
    </div>
    <div class="row see">
        <div class="col-sm-12">
			<a class="btn btn-block btn-default" href="{{route('admin.ration.create')}}">Создать рацион</a>
			<a class="list-group-item" href="{{route('admin.ration.index')}}">
				<h4 class="list-group-item-heading">Список рационов</h4>
			</a>
		</div>
    </div>

</div>
@endsection
