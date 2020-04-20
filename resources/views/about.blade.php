@extends('layouts.app')


@section('content')
<div class="container">
	<div class="cards">
            <div class="card car">
                <img class="card-image uss" src="/img/ant.jpg">
                <div class="card-text">
                    <div class="card-heading">
                        <h3 class="card-title">Сушилов Антон</h3>
                    </div>
                    <div class="card-info">
                        <p>
                        	Back-end dev <br>
                        	PM <br>
                        	Гений 
                        </p>
                    </div>
                </div>
            </div>
            <div class="card car">
                <img class="card-image uss" src="/img/vov.jpg">
                <div class="card-text">
                    <div class="card-heading">
                        <h3 class="card-title">Сотников Владимир</h3>
                    </div>
                    <div class="card-info">
                        <p>
                        	Front-end dev <br>
                        	Не гений 
                        </p>
                    </div>
                </div>
            </div>
            <div class="card car">
                <img class="card-image uss" src="/img/dim.jpg">
                <div class="card-text">
                    <div class="card-heading">
                        <h3 class="card-title">Кальченко Дмитрий</h3>
                    </div>
                    <div class="card-info">
                        <p>
                        	Tester <br>
                        	Не гений 
                        </p>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection