@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список продуктов @endslot
	@slot('parent') Главная @endslot
	@slot('active') Продукты @endslot
	@endcomponent

	<hr />

	<a href="{{route('admin.product.create')}}" class="btn btn-primary pull-right"><i class="fafa-plus-square-o"></i>Создать продукт</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Наименование</th>
			<th>Информация</th>
			<th>Свойства</th>
			<th>Состав</th>
			<th>Ккал</th>
			<th>Белки</th>
			<th>Жиры</th>
			<th>Углеводы</th>
			<th class="text-center">Действия</th>
		</thead>
		<tbody>
			@forelse($products as $product)
				<tr>
					<td>{{$product->id}}</td>
					<td>{{$product->title}}</td>
					<td>{{$product->info}}</td>
					<td>{{$product->properties}}</td>
					<td>{{$product->composition}}</td>
					<td>{{$product->kcal}}</td>
					<td>{{$product->protein}}</td>
					<td>{{$product->fat}}</td>
					<td>{{$product->carbohydrate}}</td>
					<td class="text-right">
						<form onsubmit="if(confirm('Удалить?')){return true }else{ return false}" action="{{route('admin.product.destroy', $product)}}" method="post">
							<input type="hidden" name="_method" value="DELETE">
							{{ csrf_field() }}

							<a class="btn btn-default" href="{{route('admin.product.edit', ['product'=>$product->id])}}"><i class="fa fa-edit"></i></a>
							
							<button type="submit" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
						</form>
						

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
						{{$products->links()}}
					</ul>
				</td>
			</tr>
		</tfoot>
	</table>
</div>
@endsection