@extends('layouts.app')
@section('content')
<div class="both">
	<img src="img/avokadik2.jpg" alt="">
		<form>
		  	<div class="form-group">
			    <label for="exampleInputEmail1">Username</label>
			    <input type="name" class="form-control" placeholder="Введите имя">
			</div>
			<div class="form-group">
			    <label for="exampleInputEmail1">Email adress</label>
			   	<input type="email" class="form-control" placeholder="Введите почту">
			</div>
			<div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" placeholder="Введите пароль">
			</div>
			  	<button type="submit" class="btn btn-primary">Зарегистрироваться</button>
		</form>
		
	</div>
@endsection