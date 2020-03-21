@extends('admin.layouts.app_admin')

@section('content')
<div class="container">	
	@component('admin.components.breadcrumb')
	@slot('title') Список категорий @endslot
	@slot('parent') Главная @endslot
	@slot('active') Категории @endslot
	@endcomponent

	<hr />

	<form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
		{{ csrf_field() }}

		<label for="">Наименование</label>
		<input type="text" class="form-control" name="title" placeholder="Название" value="{{$title}}" required>
		<hr>
		<input class="btn btn-primary" type="submit" value="Сохранить">
	</form>

</div>
@endsection