<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/addProjectStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/edit_portfolio.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}"> --}}
</head>
<body>
    <div id="app">
        <nav id="sidebarPoints" class="sidebarPoints"> 
            {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> --}}
            <div class="sidebarSection">
                <div class="sidebarHeading">Админ</div>
            <a href="#" class="list-group-item list-group-item-action nav d-flex align-items-center">
                <i class="fas fa-users me-2"></i> Пользователи
            </a>
            <a href="../admin/all-articles" class="list-group-item list-group-item-action nav d-flex align-items-center">
                <i class="fa-solid fa-file-invoice me-2"></i> Блог
            </a>
            <a href="../admin/all-projects" class="list-group-item list-group-item-action nav d-flex align-items-center">
                <i class="fas fa-project-diagram me-2"></i> Все Проекты
            </a>
        </div>
        <div class="sidebarHeader">
            <img src="{{asset('/assets/images/arassaLogo.png')}}" alt="Logo">
        </div>
        </nav>

        <div class="mainContent">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
            @yield('content')
        </div>
        </main>
    </div>
    </div>
</body>
@include('layouts.scripts_admin')

</html>
