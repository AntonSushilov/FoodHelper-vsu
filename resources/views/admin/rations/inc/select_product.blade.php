<option value="0">-- без продукта --</option>@foreach ($products as $product)<option value="{{$product->id}}">{{$product->title}}</option>@endforeach
