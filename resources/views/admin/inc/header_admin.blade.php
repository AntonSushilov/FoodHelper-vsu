<header>
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <a class="logo" href="{{ url('/') }}">
                    {{ config('app.name', 'FoodHelper') }}
                </a>
                    
                </div>
                <img src="/img/avokadik.jpg" alt="">
                <div class="row menu">
                   <ul class="menu2">
                        <div class="col-lg-5">
                            <li class="list"><a href="/">ГЛАВНАЯ</a></li>
                        </div>
                        <div class="col-lg-1 line">
                            |
                        </div>
                        <div class="col-lg-7">
                            <li class="list"><a href="#">Admin-panel</a>
                                <ul class="drop">
                                   <li class="droped"><a href="{{route('admin.dish.index')}}">Блюда</a></li>
                                   <li class="droped"><a href="#">Продукты</a></li>
                                </ul>                        
                            </li>
                        </div>
                   </ul>
                </div>
                   <ul class="menu3">
                        <div class="col-lg-1">

                            <li class="list"><img class="imgg" src="img/3.png" alt="">
                                <ul class="drop2">
                                    @if (Route::has('login'))
                                    @auth
                                    <li><a class="droped2" href="home">{{ Auth::user()->name }}</a></li>
                                    
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