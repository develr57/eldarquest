<header class="navbar navbar-dark navbar-expand flex-column flex-md-row bd-navbar">
    <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/feedback/show">Обратная связь</a>
            </li>
        </ul>
    </div>
    <div class="ml-md-auto">
        @if (Auth::check())
            <div class="btn-group dropleft">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="false">{{$user->name}}</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Профиль</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php Auth::logout(); ?>">Выход</a>
                </div>
            </div>
        @else
            <a class="sigh-in" href="{{route('login')}}"><button type="button" class="btn btn-success">Войти</button></a>
        @endif
    </div>
</header>