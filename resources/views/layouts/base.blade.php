<!DOCTYPE html>
<html lang="ru">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @include('layouts.styles')
</head>

<body>
    <div class="loaders position-fixed w-100 h-100 justify-content-center align-items-center"
        style="background-color: #1b2e69; z-index: 99; display: flex;">
        <div class="circle-container" style="top: 40%; left:45%; width:25rem; height:25rem ">
            <div class="scrolling-image" style="width:20rem; height:auto">
                <img src="{{ asset('/assets/images/name_1.png') }}" alt="Scrolling Image">
            </div>
            <div class="center-image" style="width:40%; height:auto">
                <img src="{{ asset('/assets/images/logo.png') }}" alt="Center Image">
            </div>
        </div>
    </div>

    {{-- Cursor --}}
    <div class="cursor-outer" id="custom-cursor"></div>
    <div class="cursor-inner" id="cursor-inner"></div>
    {{-- Content --}}
    <div class="parent">
        <div class="background">
            <div class="bg-color"></div>
        </div>
        <div class="page-content">
            @include('layouts.header')
            @yield('custom-slider')
            @yield('serv-slider')
            <div class="container">
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
    </div>
 
    @include('layouts.scripts')
    <div class="follow-cursor"></div>

    <button onclick="topFunction()" id="myBtn"><i class="fa-solid fa-arrow-up" style="color:#1B2E69"></i></button>
  
</body>

</html>
