@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список категорий @endslot
	@slot('parent') Главная @endslot
	@slot('active') Категории @endslot
	@endcomponent

	<hr />

	<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fafa-plus-square-o"></i>Создать категорию</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Наименование</th>
			<th>Действия</th>
		</thead>
		<tbody>
			@forelse($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->title}}</td>
					<td>
						<a href="{{route('admin.category.edit', ['category'=>$category->id])}}"><i class="fa fa-edit"></i></a>
						<a href="{{route('admin.category.destroy', ['category'=>$category->id])}}"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
				</tr>
			@endforelse
		</tbody>
		<tfoot>
			<tr>
				<td>
					<ul class="pagination pull-right">
						{{$categories->links()}}
					</ul>
				</td>
			</tr>
		</tfoot>
	</table>
</div>
@endsection