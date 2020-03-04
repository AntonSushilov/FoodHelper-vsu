@extends('layouts.app')
@section('content')
<div class="both log">
		<form>
	  		<div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    	<input type="name" class="form-control" placeholder="Введите имя">
		  	</div>
		  	<div class="form-group">
		    	<label for="exampleInputPassword1">Password</label>
		    	<input type="password" class="form-control" placeholder="Введите пароль">
		 	 </div>
		  	<button type="submit" class="btn btn-primary">Войти</button>
		</form>
		<img class="imgg" src="img/avokadik.jpg" alt="">
	</div>
@endsection