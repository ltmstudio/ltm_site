<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/allProjectsStyle.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/addProjectStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- @extends('layouts.styles') --}}
</head>
<body>
    <div class="container">
        <nav id="sidebarPoints" class="sidebarPoints">
    <div class="sidebarHeader">
        <img src="{{asset('/assets/images/arassaLogo.png')}}" alt="Logo">
    </div>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Пользователи</a>
    <a href="#">Меню Сервера</a>
    <a href="#">Все Проекты</a>
</nav>

        @yield('content')
    </div>
@extends('layouts.scripts')
</body>
</html>
