@extends('layouts.base')

@section('title', 'Услуги IT-консалтинговой компании LTM Studio в Туркменистане')
@section('content')
<div class="regular17 m45">Услуги диджитал агентства в Ашхабаде</div>
<h1 class="title">Разработка веб-сайтов</h1>
<p class="regular17 m45">Если вы ищете команду, которая поможет вам создать не только стильный и функциональный
    веб-сайт, но и запустить
    процветающий интернет-магазин, то вы обратились по адресу.</p>
<p class="regular17 m45">Мы - команда профессионалов, готовых реализовать ваши идеи в онлайн-пространстве. Независимо от
    того, нужен вам
    простой сайт-визитка или сложный интернет-магазин, мы предлагаем полный спектр услуг – от дизайна до разработки и
    поддержки.</p>
<p class="bold40 m60">Доверьтесь нам, и давайте вместе создадим уникальное и успешное онлайн-пространство для вашего
    бизнеса</p>
<div class="types-of-sites m60">
    <div class="big-type-card landing">
        <div class="card-desc">
            <p class="card-desc-title">Лендинг</p>
            <p class="card-desc-subtitle">Целевая страница — веб-страница, основной задачей которой является сбор
                контактных данных целевой аудитории. Используется для усиления </p>
        </div>
    </div>
    <div class="small-type-card site-catalog">
        <div class="card-desc">
            <p class="card-desc-title">Сайт-каталог</p>
            <p class="card-desc-subtitle">Сайт-каталог включает в себя весь различные виды страниц и разделов </p>
        </div>
    </div>
    <div class="small-type-card multipage">
        <div class="card-desc">
            <p class="card-desc-title">Многостраничник</p>
            <p class="card-desc-subtitle">Это общее название для разных видов сайтов: новостной портал, корпоративный
            </p>
        </div>
    </div>
    <div class="big-type-card online-shop">
        <div class="card-desc">
            <p class="card-desc-title">Интернет-магазин</p>
            <p class="card-desc-subtitle">Интернет-магазин обеспечивает круглосуточный доступ к товарам с удобной оплатой и доставкой, помогая завоевать доверие клиентов.</p>
        </div>
    </div>
</div>
<p class="regular17">Мы разбираемся также в:</p>
<div class="small-container">
    <ul class="services_dots">
        <li>
            <a class="no-line" href="/{{ $lang }}/services-webpages"><button
                    class="services-dot"><span>{!! nl2br(__('translate.servTitle1')) !!}</span></button></a>
        </li>
        <li>
            <button class="services-dot"><span>{!! nl2br(__('translate.servTitle2')) !!}</span></button>
        </li>
        <li>
            <a class="no-line" href="/{{ $lang }}/services-webpages"><button
                    class="services-dot"><span>{!! nl2br(__('translate.servTitle3')) !!}</span></button></a>
        </li>
        <li>
            <a class="no-line" href="/{{ $lang }}/services-bitrix"><button
                    class="services-dot"><span>{!! nl2br(__('translate.servTitle4')) !!}</span></button></a>
        </li>
    </ul>
    <div class="services_buttons m60">
        <a href="/{{ $lang }}/services" class="btn first no-line"><span>{{ __('translate.allServ') }}</span></a>
        <a href="/{{ $lang }}/about_us" class="btn second no-line m-auto"><span>{{ __('translate.aboutUs') }}</span></a>
    </div>
</div>
@include('components.timeline')
@include('components.quiz')
<div class="d-flex align-items-center justify-content-between  m45">
    <p class="bold40">Проекты студии</p>
    <a href="/{{$lang}}/porfolio" class="regular20 no-line">Смотреть всё</a>
</div>
<div class="portf-slider">
    @for ($i = 0; $i < 8; $i++)
        @php
            $portf = $portfolio[$i];
            $additionalClass = $i % 2 != 0 ? 'add-padding' : '';
        @endphp
        <div class="portf-slider-item">
            @if ($portf['photo'] != '')
                <img src="{{ asset('storage/' . $portf['photo']) }}" alt="Image" class="" loading="lazy">
                {{-- style="width: 300px !important; height: 200px !important;"> --}}
            @else
                <img src="{{ asset('assets/images/proformat.png') }}" class="" alt="Image" loading="lazy">
            @endif
            <div class="gridTitle  ">{!! $portf['title_' . $lang] !!}</div>
        </div>
    @endfor
</div>
@endsection