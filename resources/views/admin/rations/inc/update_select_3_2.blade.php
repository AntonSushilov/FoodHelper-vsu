@foreach ($dish_ration as $temp)
<tr>
    @if ($temp->pivot->food == 'Ужин')
    <td>
        <select class="select-chosen" name="dishes3[]">
            <option value="0">-- без продукта --</option>
            @foreach ($dishes as $dish)

            <option value="{{$dish->id}}"@if($dish->id == $temp->id)selected=""@endif>{{$dish->title}}</option>
            @endforeach
            <td>
                <input type="button" value="-" class="delrow">
            </td>
        </select>
    </td>
    @endif
</tr>
@endforeach
