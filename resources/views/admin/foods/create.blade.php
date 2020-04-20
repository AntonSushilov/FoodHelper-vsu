@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список приёмов пищи @endslot
	@slot('parent') Главная @endslot
	@slot('active') Приёмы пищи @endslot
	@endcomponent

	<hr />

	<form class="form-horizontal" action="{{route('admin.food.store')}}" method="post">
		{{ csrf_field() }}

		<label for="">Наименование</label>
		<input type="text" class="form-control" name="title" placeholder="Название" value="{{$title}}" required>
		<hr>
		<input class="btn btn-primary" type="submit" value="Сохранить">
	</form>

</div>
@endsection
