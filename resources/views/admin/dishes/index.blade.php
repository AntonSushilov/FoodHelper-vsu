@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список блюд @endslot
	@slot('parent') Главная @endslot
	@slot('active') Блюда @endslot
	@endcomponent

	<hr />

	<a href="{{route('admin.dish.create')}}" class="btn btn-primary pull-right"><i class="fafa-plus-square-o"></i>Создать блюдо</a>
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
			<th class="text-center">Действия</th>
		</thead>
		<tbody>
			@forelse($dishes as $dish)
				<tr>
					<td>{{$dish->id}}</td>
					<td>{{$dish->category_id}}</td>
					<td>{{$dish->title}}</td>
					<td>{{$dish->info}}</td>
					<td>{{$dish->composition}}</td>
					<td>{{$dish->recipe}}</td>
					<td>{{$dish->kcal}}</td>
					<td>{{$dish->protein}}</td>
					<td>{{$dish->fat}}</td>
					<td>{{$dish->carbohydrate}}</td>
					<td class="text-right">
						<form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('admin.dish.destroy', $dish)}}" method="post">
							<input type="hidden" name="_method" value="DELETE">
							{{ csrf_field() }}

							<a class="btn btn-default" href="{{route('admin.dish.edit', ['dish'=>$dish->id])}}"><i class="fa fa-edit"></i></a>
							
							<button type="submit" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
						</form>
						

					</td>
				</tr>
			@empty
				<tr>
					<td colspan="11" class="text-center"><h2>Данные отсутствуют</h2></td>
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