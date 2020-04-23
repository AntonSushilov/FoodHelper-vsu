<header>
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <a class="logo" href="{{route('welcome')}}">
                    {{ config('app.name', 'FoodHelper') }}
                </a>

                </div>
                <img src="/img/avokadik.jpg" alt="">
                <div class="row menu">
                   <ul class="menu2">
                        <div class="col-lg-2">
                            <li class="list"><a href="{{route('welcome')}}">ГЛАВНАЯ</a></li>
                        </div>
                        <div class="col-lg-1 line">
                            |
                        </div>
                        <div class="col-lg-3">
                            <li class="list"><a href="#">РУКОВОДСТВО</a>
                                <ul class="drop">
                                   <li class="droped"><a href="{{route('products')}}">ПО ПРОДУКТАМ</a></li>
                                   <li class="droped"><a href="{{route('dishes')}}">ПО БЛЮДАМ</a></li>
                                   <li class="droped"><a href="{{route('rations')}}">ПО РАЦИОНАМ</a></li>
                                </ul>
                            </li>
                        </div>
                        <div class="col-lg-1 line">
                            |
                        </div>
                        <div class="col-lg-2">
                            <li class="list"><a href="{{route('about')}}">О НАС</a></li>
                        </div>
                        <div class="col-lg-1 line">
                            |
                        </div>
                        <div class="col-lg-2">
                            <li class="list"><a href="{{route('add')}}">ДОПОЛНИТЕЛЬНО</a></li>
                        </div>
                   </ul>
                </div>
                   <ul class="menu3">
                        <div class="col-lg-1">

                            <li class="list"><img class="imgg" src="img/3.png" alt="">
                                <ul class="drop2">
                                    @if (Route::has('login'))
                                    @auth
                                    <li><a class="droped2" href="{{route('home')}}">{{ Auth::user()->name }}</a></li>

                                        <li><a class="droped2" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>

                                        </li>
                                    @else
                                   <li><a class="droped2" href="{{ route('login') }}">ВХОД</a></li>
                                   @if (Route::has('register'))
                                   <li><a class="droped2" href="{{ route('register') }}">РЕГИСТРАЦИЯ</a></li>
                                   @endif
                                    @endauth

                                    @endif

                                </ul>
                            </li>
                        </div>
                   </ul>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </header>
