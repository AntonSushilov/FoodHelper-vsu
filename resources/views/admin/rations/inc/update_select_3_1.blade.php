@foreach ($product_ration as $temp)
<tr>
    @if ($temp->pivot->food == 'Ужин')
    <td>
        <select class="select-chosen" name="products3[]">
            <option value="0">-- без продукта --</option>
            @foreach ($products as $product)
            <option value="{{$product->id}}"@if($product->id == $temp->id)selected=""@endif>{{$product->title}}</option>
            @endforeach
            <td>
                <input type="text" placeholder="Граммы" name="mass3[]" value ="{{$temp->pivot->mass}}" >
            </td>
            <td>
                <input type="button" value="-" class="delrow">
            </td>
        </select>
    </td>
    @endif
</tr>
@endforeach
