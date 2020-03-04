@extends('layouts.app')
@section('content')
<div class="container"> <h1>Форма</h1></div>
	
	<form action="/add/submit" method="post">
		<div class="form-group">
			<label for="name">Введите имя</label>
			<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
		</div>

		<div class="form-group">
			<label for="email">Введите email</label>
			<input type="text" name="name" placeholder="Введите email" id="email" class="form-control">
		</div>

		<div class="form-group">
			<label for="subject">Тема сообщения</label>
			<input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
		</div>

		<div class="form-group">
			<label for="message">Тема сообщения</label>
			<textarea name="message" id="message" class="form-control"></textarea>
		</div>
	</form>

@endsection