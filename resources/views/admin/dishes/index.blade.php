@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список категорий @endslot
	@slot('parent') Главная @endslot
	@slot('active') Категории @endslot
	@endcomponent

	<hr />

	<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fafa-plus-square-o"></i>Создать блюдо</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Категория_ID</th>
			<th>Наименование</th>
			<th>Информация</th>
			<th>Состав</th>
			<th>Рецепт</th>
			<th>Ккал</th>
			<th>Белки</th>
			<th>Жиры</th>
			<th>Углеводы</th>
		</thead>
		<tbody>
			@forelse($dishes as $dish)
				<tr>
					<td>{{$dish->id}}</td>
					<td>{{$dish->name}}</td>
					<td>
						<a href="{{route('admin.dish.edit', ['id'=>$dish->$id])}}"><i class="fafa-edit"></i></a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="10" class="text-center"><h2>Данные отсутствуют</h2></td>
				</tr>
			@endforelse
		</tbody>
		<tfoot>
			<tr>
				<td>
					<ul class="pagination pull-right">
						{{$dishes->links()}}
					</ul>
				</td>
			</tr>
		</tfoot>
	</table>
</div>
@endsection