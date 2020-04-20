@foreach ($composition as $temp)
<tr>
    <td>
        <select class="select-chosen" name="products[]">
            <option value="0">-- без продукта --</option>
            @foreach ($products as $product)
                <option value="{{$product->id}}" @if($product->id == $temp->id)selected=""@endif>{{$product->title}}</option>
            @endforeach<td><input type="text" placeholder="Граммы" name="mass[]" value ="{{$temp->pivot->mass}}" ></td>
            <td><input type="button" value="-" class="delrow"></td>
        </select>
    </td>
</tr>
@endforeach
