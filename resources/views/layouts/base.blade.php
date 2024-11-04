<!DOCTYPE html>
<html lang="ru">

<head itemscope itemtype="http://schema.org/WPHeader">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <!-- Open Graph -->
    <link rel="canonical" href="{{ config('app.url') }}/{{ Request::path() }}">
    <meta property="og:type" content="website">
    <meta property="og:description" content="@yield('metaDesc')">
    <meta property="og:url" content="{{ config('app.url') }}/{{ $lang }}">
    <meta property="og:image" content="{{ config('app.url') }}/assets/images/ltm-white.png">
    <meta property="og:site_name" content="LTM Studio">
    <meta property="og:locale" content="ru_RU">
    <title itemprop="headline">@yield('title')</title>
    <meta property="og:title" content="@yield('ogTitle')">
    <meta itemprop="description" name="description" content="@yield('metaDesc')">
    <meta itemprop="keywords" name="keywords" content="@yield('metaKey')">
    <meta name='freelancehunt' content='c02792cc8b8b525'>
    <link rel="alternate" hreflang="ru" href="@yield('ruLink')">
    <link rel="shortcut icon" href="{{ asset('/assets/images/ltm.svg') }}">
    <link rel="alternate" hreflang="en" href="@yield('enLink')">
    <link rel="alternate" hreflang="tk" href="@yield('tkLink')">
    <script type='application/ld+json'> 

</script>
    <script>
        var texts = @json(__('translate.texts'));
    </script>
    <link rel="alternate" hreflang="x-default" href="{{ config('app.url') }}" />
    <link rel="alternate" hreflang="ru" href="{{ config('app.url') }}/ru/">
    <link rel="alternate" hreflang="en" href="{{ config('app.url') }}/en/">
    <link rel="alternate" hreflang="tk" href="{{ config('app.url') }}/tk/"> 
    @include('layouts.styles')
</head>

<body>
    <div class="loaders position-fixed w-100 h-100 justify-content-center align-items-center"
        style="background-color: #1c1b1b; z-index: 99; display: flex;">
        <div class="circle-container" style="top: 0%; left:0%; width:70rem; height: 70rem ">
            <div class="scrolling-image" style="width:20rem; height:auto">
                <img src="{{ asset('/assets/images/circled-text.png') }}" alt="Scrolling Image">
            </div>
            <div class="center-image" style="width:10%; height:auto">
                <img src="{{ asset('/assets/images/ltm-white.png') }}" alt="Center Image">
            </div>
        </div>
    </div>

    {{-- Cursor --}}
    <div class="cursor-outer" id="custom-cursor"></div>
    <div class="cursor-inner" id="cursor-inner"></div>
    {{-- Content --}}
    <div class="parent">
        {{-- <div class="background">
            <div class="bg-color"></div>
        </div> --}}
        <div class="page-content">
            @include('layouts.header')
            @yield('custom-slider')
            @yield('serv-slider')
            @yield('circles')
            <div class="container">
                @yield('content')
            </div>
            @yield('out-container')
            <div class="container">
                @yield('second-content')
            </div>
            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.scripts')
    <div class="follow-cursor"></div>

    <button onclick="topFunction()" id="scrollBtn"><i class="fa-solid fa-arrow-up"></i></button>

</body>

</html>
