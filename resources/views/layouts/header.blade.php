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
                    <div class="row col-md-12 text-center no-gutters">
                        <svg class="bi bi-person-fill col-md-3" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <a class="dropdown-item col-md-9" href="#">Профиль</a>
                    </div>
                    <div class="row col-md-12 text-center no-gutters">
                        <svg class="bi bi-layout-text-window-reverse col-md-3 text-center no-gutters" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm12-1a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
                            <path fill-rule="evenodd" d="M5 15V4H4v11h1zM.5 4h15V3H.5v1zM13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"/>
                        </svg>
                        <a class="dropdown-item col-md-9" href="{{route('home')}}">Админка</a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="row col-md-12 text-center no-gutters">
                        <svg class="bi bi-door-closed-fill col-md-3 text-center no-gutters" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 1a1 1 0 0 0-1 1v13H1.5a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2a1 1 0 0 0-1-1H4zm2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        <a class="dropdown-item col-md-9" href="{{route('logout')}}">Выход</a>
                    </div>
                </div>
            </div>
        @else
            <a class="sigh-in" href="{{route('login')}}"><button type="button" class="btn btn-success">Войти</button></a>
        @endif
    </div>
</header>