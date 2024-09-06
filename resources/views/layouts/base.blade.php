<!DOCTYPE html>
<html lang="ru">

<head itemscope itemtype="http://schema.org/WPHeader">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:description" content="@yield('metaDesc')">
    <meta property="og:url" content="https://arassanusga.com/{{ $lang }}">
    <meta property="og:image" content="https://arassanusga.com/assets/images/logo.png">
    <meta property="og:site_name" content="Arassa Nusga">
    <meta property="og:locale" content="ru_RU">
    <title itemprop="headline">@yield('title')</title>
    <meta property="og:title" content="@yield('ogTitle')">
    <meta itemprop="description" name="description" content="@yield('metaDesc')">
    <meta itemprop="keywords" name="keywords" content="@yield('metaKey')">
    <link rel="alternate" hreflang="ru" href="@yield('ruLink')">
    <link rel="alternate" hreflang="en" href="@yield('enLink')">
    <link rel="alternate" hreflang="tk" href="@yield('tkLink')">
    <script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "LocalBusiness",
  "name": "Arassa Nusga",
  "url": "https://arassanusga.com",
  "logo": "https://arassanusga.com/logo.png",
  "image": "https://arassanusga.com/logo.png",
  "description": "IT-консалтинговая компания Arassa Nusga в Туркменистане предлагает полный комплекс профессиональных услуг, от консалтинга до разработки веб-сайтов, мобильных приложений, и внедрение Logo Tiger ERP, CRM системы Битрикс24.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Куллиева, здание 27",
    "postOfficeBoxNumber": "info@arassanusga.com",
    "addressLocality": "Ашхабад",
    "postalCode": "744000",
    "addressCountry": "Туркменистан"
  },
  "hasMap": "https://maps.app.goo.gl/NpTxyrN6jhaJMf577",
  "openingHours": "Mo, Tu, We, Th, Fr 09:00-18:00 Sa 09:00-13:00",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+99312754480"
  }
}
</script>
    <script>
        var texts = @json(__('translate.texts'));
    </script>
    {{-- <link rel="alternate" hreflang="x-default" href="http://site.com/" />
    <link rel="alternate" hreflang="ru" href="http://site.com/ru/">
    <link rel="alternate" hreflang="en" href="http://site.com/en/">
    <link rel="alternate" hreflang="ua" href="http://site.com/tk/"> --}}
    @include('layouts.styles')
</head>

<body>
    <div class="loaders position-fixed w-100 h-100 justify-content-center align-items-center"
        style="background-color: #001335; z-index: 99; display: flex;">
        <div class="circle-container" style="top: 0%; left:0%; width:30rem; height:30rem ">
            <div class="scrolling-image" style="width:20rem; height:auto">
                <img src="{{ asset('/assets/images/name_1.png') }}" alt="Scrolling Image">
            </div>
            <div class="center-image" style="width:35%; height:auto">
                <img src="{{ asset('/assets/images/logo.png') }}" alt="Center Image">
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
            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.scripts')
    <div class="follow-cursor"></div>

    <button onclick="topFunction()" id="myBtn"><i class="fa-solid fa-arrow-up" style="color:#1B2E69"></i></button>

</body>

</html>
