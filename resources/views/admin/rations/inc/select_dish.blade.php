<option value="0">-- без блюда --</option>@foreach ($dishes as $dish)<option value="{{$dish->id}}">{{$dish->title}}</option>@endforeach
