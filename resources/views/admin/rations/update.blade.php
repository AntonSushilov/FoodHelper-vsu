@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	@component('admin.components.breadcrumb')
	@slot('title') Список приёмов пищи @endslot
	@slot('parent') Главная @endslot
	@slot('active') Приёмы пищи @endslot
	@endcomponent

	<hr />

	<form class="form-horizontal" action="{{route('admin.ration.update', ['ration'=>$id])}}" method="post">
		{{ csrf_field() }}
		@method('PUT')
		<label for="">Наименование</label>
        <input type="text" class="form-control" name="title" placeholder="Название" value="{{$title}}" required>
        <label for="">Описание</label>
        <textarea type="text" class="form-control" name="info" required>{{$info}}</textarea>
        <table>
            <tr><td></td><td>Продукты</td><td>Блюда</td></tr>

            <tr>
                <td>Завтрак</td>
                <td>
                    <table id="tab_1_1">
                        <tr>
                            @include('admin.rations.inc.update_select_1_1',['product_ration' => $product_ration])
                        </tr>
                    </table>
                    <input type="button" value="+" id="add_1_1">
                </td>
                <td>
                    <table id="tab_1_2">
                        <tr>
                            @include('admin.rations.inc.update_select_1_2',['dish_ration' => $dish_ration])
                        </tr>
                    </table>
                    <input type="button" value="+" id="add_1_2">
                </td>
            </tr>

            <tr>
                <td>Обед</td>
                <td>
                    <table id="tab_2_1">
                        <tr>
                            @include('admin.rations.inc.update_select_2_1',['product_ration' => $product_ration])
                        </tr>
                    </table>
                    <input type="button" value="+" id="add_2_1">
                </td>
                <td>
                    <table id="tab_2_2">
                        <tr>
                            @include('admin.rations.inc.update_select_2_2',['dish_ration' => $dish_ration])
                        </tr>
                    </table>
                    <input type="button" value="+" id="add_2_2">
                </td>
            </tr>

            <tr>
                <td>Ужин</td>
                <td>
                    <table id="tab_3_1">
                        <tr>
                            @include('admin.rations.inc.update_select_3_1',['product_ration' => $product_ration])
                        </tr>
                    </table>
                    <input type="button" value="+" id="add_3_1">
                </td>
                <td>
                    <table id="tab_3_2">
                        <tr>
                            @include('admin.rations.inc.update_select_3_2',['dish_ration' => $dish_ration])
                        </tr>
                    </table>
                    <input type="button" value="+" id="add_3_2">
                </td>
                </td>
            </tr>

        </table>
		<input class="btn btn-primary" type="submit" value="Сохранить">
	</form>

</div>

<script>
    $(function select(){
        $('.select-chosen').chosen({
            width: 250,
            no_results_text: "Нет такого продукта!",
            placeholder_text_single: "Выберите продукт",
            search_contains: true,
            max_shown_results: 10
        });
    })
    //
    var str1_1 = '<tr><td><select class="select-chosen" name="products1[]">'+
        '@include("admin.rations.inc.select_product")'+
        '<td><input type="text" placeholder="Граммы" name="mass1[]"></td>'+
        '<td><input type="button" value="-" class="delrow"></td>'+
        '</select></td></tr>';
    var str1_2 = '<tr><td><select class="select-chosen" name="dishes1[]">'+
        '@include("admin.rations.inc.select_dish")'+
        '<td><input type="button" value="-" class="delrow"></td>'+
        '</select></td></tr>';



    $(function table() {
        //добавить строку табюлицы
        $('#add_1_1').click(function(){
            $('#tab_1_1').append(str1_1);
            $('tr')
            .find('td')
            .parent()//traversing to 'tr' Element
            .append('');


            $('.delrow').click(function(){
                $(this).parent().parent().remove(); //Deleting the Row (tr) Element
            });
            $(function select(){
                $('.select-chosen').chosen({
                    width: 250,
                    no_results_text: "Нет такого продукта!",
                    placeholder_text_single: "Выберите продукт",
                    search_contains: true,
                    max_shown_results: 10
                });
            })
        })
    })
    //
    $(function table() {
        //добавить строку табюлицы
        $('#add_1_2').click(function(){
            $('#tab_1_2').append(str1_2);
            $('tr')
            .find('td')
            .parent()//traversing to 'tr' Element
            .append('');


            $('.delrow').click(function(){
                $(this).parent().parent().remove(); //Deleting the Row (tr) Element
            });
            $(function select(){
                $('.select-chosen').chosen({
                    width: 250,
                    no_results_text: "Нет такого продукта!",
                    placeholder_text_single: "Выберите продукт",
                    search_contains: true,
                    max_shown_results: 10
                });
            })
        })
    })
    //
    var str2_1 = '<tr><td><select class="select-chosen" name="products2[]">'+
        '@include("admin.rations.inc.select_product")'+
        '<td><input type="text" placeholder="Граммы" name="mass2[]"></td>'+
        '<td><input type="button" value="-" class="delrow"></td>'+
        '</select></td></tr>';
    var str2_2 = '<tr><td><select class="select-chosen" name="dishes2[]">'+
        '@include("admin.rations.inc.select_dish")'+
        '<td><input type="button" value="-" class="delrow"></td>'+
        '</select></td></tr>';



    $(function table() {
        //добавить строку табюлицы
        $('#add_2_1').click(function(){
            $('#tab_2_1').append(str2_1);
            $('tr')
            .find('td')
            .parent()//traversing to 'tr' Element
            .append('');


            $('.delrow').click(function(){
                $(this).parent().parent().remove(); //Deleting the Row (tr) Element
            });
            $(function select(){
                $('.select-chosen').chosen({
                    width: 250,
                    no_results_text: "Нет такого продукта!",
                    placeholder_text_single: "Выберите продукт",
                    search_contains: true,
                    max_shown_results: 10
                });
            })
        })
    })
    //
    $(function table() {
        //добавить строку табюлицы
        $('#add_2_2').click(function(){
            $('#tab_2_2').append(str2_2);
            $('tr')
            .find('td')
            .parent()//traversing to 'tr' Element
            .append('');


            $('.delrow').click(function(){
                $(this).parent().parent().remove(); //Deleting the Row (tr) Element
            });
            $(function select(){
                $('.select-chosen').chosen({
                    width: 250,
                    no_results_text: "Нет такого продукта!",
                    placeholder_text_single: "Выберите продукт",
                    search_contains: true,
                    max_shown_results: 10
                });
            })
        })
    })

    //

    var str3_1 = '<tr><td><select class="select-chosen" name="products3[]">'+
        '@include("admin.rations.inc.select_product")'+
        '<td><input type="text" placeholder="Граммы" name="mass3[]"></td>'+
        '<td><input type="button" value="-" class="delrow"></td>'+
        '</select></td></tr>';
    var str3_2 = '<tr><td><select class="select-chosen" name="dishes3[]">'+
        '@include("admin.rations.inc.select_dish")'+
        '<td><input type="button" value="-" class="delrow"></td>'+
        '</select></td></tr>';



    $(function table() {
        //добавить строку табюлицы
        $('#add_3_1').click(function(){
            $('#tab_3_1').append(str3_1);
            $('tr')
            .find('td')
            .parent()//traversing to 'tr' Element
            .append('');


            $('.delrow').click(function(){
                $(this).parent().parent().remove(); //Deleting the Row (tr) Element
            });
            $(function select(){
                $('.select-chosen').chosen({
                    width: 250,
                    no_results_text: "Нет такого продукта!",
                    placeholder_text_single: "Выберите продукт",
                    search_contains: true,
                    max_shown_results: 10
                });
            })
        })
    })
    //
    $(function table() {
        //добавить строку табюлицы
        $('#add_3_2').click(function(){
            $('#tab_3_2').append(str3_2);
            $('tr')
            .find('td')
            .parent()//traversing to 'tr' Element
            .append('');


            $('.delrow').click(function(){
                $(this).parent().parent().remove(); //Deleting the Row (tr) Element
            });
            $(function select(){
                $('.select-chosen').chosen({
                    width: 250,
                    no_results_text: "Нет такого продукта!",
                    placeholder_text_single: "Выберите продукт",
                    search_contains: true,
                    max_shown_results: 10
                });
            })
        })
    })
</script>
@endsection
