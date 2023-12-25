@extends('layouts.base')

@section('title', 'About Us')

@section('content')
    {{-- <div class="container"> --}}
        <div class="aboutUs_content">
            <div class="aboutUs_desc">
                <div class="about-us-photo" style="backface-visibility: hidden; transform: translate3d(0px, 0px, 0px);"></div>
                <div class="about-lines-container"> </div>
<div class="breadcrumbs">
    <span property="itemListElement" typeof="ListItem">
        <a href="">Главная</a>
    </span>
    <span property="itemListElement" typeof="ListItem">
        <a href="">О нас</a>
    </span>
</div>
                    <h1 style="">{{ __('translate.aboutUs') }}</h1>
                    <p class="header-sub"> {{ __('translate.aboutSub') }}
                        <a href="">Remote agency</a>
                        {{ __('translate.aboutSubCont') }}
                    </p>
                    <p class="hugeFont"><strong>{{ __('translate.aboutTitle') }}</strong></p>
               
                <p></p>
                <p class="largeFont">{{ __('translate.aboutP1') }}</p>
                <figure class="block_quote">
                    <blockquote>
                        <p>{{ __('translate.aboutP2') }} <a href="">{{ __('translate.aboutP2custom') }} </a>
                            {{ __('translate.aboutP2cont') }}</p>
                    </blockquote>
                </figure>
                <p class="largeFont">{{ __('translate.aboutP3') }}
                    <a href="">{{ __('translate.aboutP3custom') }} </a>{{ __('translate.aboutP3cont') }}
                </p>
                <p class="largeFont">{!! nl2br(__('translate.aboutP4')) !!}
                </p>
                <h2>Remote agency</h2>
                <p class="descFont">{{ __('translate.aboutP5') }}</p>
                <p></p>
                <h2>{{ __('translate.history') }}</h2>
                <p class="descFont">{!! nl2br(__('translate.aboutHistory')) !!}</p>
                <h2>Почему «баклажан»?</h2>
                <p class="descFont">Кто-то таки видит баклажан, кто-то желудь, есть такие что видят
                    перо … образ получился — многогранным, как все символы
                    окружающие нас играют с воображением. Но история будет про баклажан 🍆</p>
                <p class="descFont">Баклажан – это «знатный» одесский «атрибут», любимый и популярный (между ,прочим, не
                    овощ 🤓)
                    у одесситов и чего только стоит икра из “синеньких”, которую любят с детства.
                    Этот темноплодный паслён НЕГЛА́СНЫЙ символ Одессы на ряду с якорем, морячком, тюлькой
                    и котами, и считаем что он заслуживает большего внимания в нашем городе ⚓️.</p>
                <p class="descFont">Было бы примитивно тулить в логотип якорь, тем более у якоря
                    свои ассоциации, но нас объединяет не только море, чайки, мидии и
                    рапаны, а то детское чувство, когда в летний день ты бежишь проголодавшийся
                    домой со свежей, только что купленной с деревянной паллеты булкой обеденного
                    хлебушка, привезенной одесским хлебзаводом №4, а в холодильнике она – сочная мамина
                    икора, которую с голодным желанием плюхаешь на свежий кусочек хлеба с хрустящей румяной
                    корочкой. Наслаждение — это ключевая мотивация, которую мы ощущаем когда проект готов к запуску.
                </p>
                <p class="descFont">Вот как-то так.) А вот
                    <strong> <a href="">рецепт самой вкусной икры из синих</a></strong>
                </p>

                <h2>{{ __('translate.aboutStatistics') }}</h2>
                <div class="aboutUs_stats">
                    <div class="about-us-photo-2" style="backface-visibility: hidden;
                    transform: translate3d(0px, -143px, 0px)"></div>
                    <div class="about-us-photo-3" style="transform: translate3d(0px, -158px, 0px)"></div>
                    <ul class="stats">
                        <li>
                            <div class="stats_count">10+</div>
                            <div class="stats_desc">{{ __('translate.years') }}</div>
                        </li>
                        <li>
                            <div class="stats_count">279+</div>
                            <div class="stats_desc">{{ __('translate.projects') }}</div>
                        </li>
                        <li>
                            <div class="stats_count">83+</div>
                            <div class="stats_desc">{{ __('translate.clients') }}</div>
                        </li>
                        <li>
                            <div class="stats_count">82+</div>
                            <div class="stats_desc">{{ __('translate.satClients') }}</div>
                        </li>
                        <li>
                            <div class="stats_count">589+</div>
                            <div class="stats_desc">{{ __('translate.redBull') }}</div>
                        </li>
                    </ul>
                    <div class="aboutUs_stats_footer">
                        {!! nl2br(__('translate.aboutPerfect')) !!}
                    </div>
                </div>
                <h2>{{ __('translate.valueTitle') }}</h2>
                <p class="descFont">{{ __('translate.valueSub') }}</p>
                <div class="aboutUs_virtues">
                    <div class="about-us-photo-4" style="backface-visibility: hidden;
                    transform: translate3d(0px, -187px, 0px);"></div>
                    <div class="about-us-photo-5"></div>
                <ul class="valuesList">
                    <li class="valueList_item">
                        <div class="item_column">
                            <div class="num">01</div>
                            <div class="item_title">{{ __('translate.value1') }}</div>
                            <hr>
                            <div class="item_desc"> {!! nl2br(__('translate.value1Sub')) !!}</div>
                        </div>
                    </li>

                    <li class="valueList_item">
                        <div class="item_column">
                            <div class="num">02</div>
                            <div class="item_title">{{ __('translate.value2') }}</div>
                            <hr>
                            <div class="item_desc"> {!! nl2br(__('translate.value2Sub')) !!}</div>
                        </div>
                    </li>

                    <li class="valueList_item">
                        <div class="item_column">
                            <div class="num">03</div>
                            <div class="item_title">{{ __('translate.value3') }}</div>
                            <hr>
                            <div class="item_desc"> {!! nl2br(__('translate.value3Sub')) !!}</div>
                        </div>
                    </li>
                </ul>

                <p class="descFont">{{ __('translate.valueSubCont') }}</p>

                {{-- <img src="{{ '../assets/images/arassanusga-certificate-banner.jpg' }}" alt="" height="400"
                    class="p-auto d-flex flex-start"> --}}
                
                <div class="aboutUs_certificates">
                    <ul style="margin: 0">
                        <li><img src="{{'../assets/images/certificates/certificate1.webp'}}" alt=""> </li>
                        <li><img src="{{'../assets/images/certificates/certificate2.webp'}}" alt=""> </li>
                        <li><img src="{{'../assets/images/certificates/certificate3.webp'}}" alt=""> </li>
                        <li><img src="{{'../assets/images/certificates/certificate4.webp'}}" alt=""> </li>
                        <li><img src="{{'../assets/images/certificates/certificate5.webp'}}" alt=""> </li>
                        <li><img src="{{'../assets/images/certificates/certificate6.webp'}}" alt=""> </li>
                        
                    </ul>    
                    <div class="certificates_info">
                        <div class="stats_count">12+</div>
                        <div class="certificates-info_desc"> {{ __('translate.exp') }}</div>
                    </div>
                </div>

                <p class="descFont">
                    {{ __('translate.valueJobs') }}
                </p>
            </div>
                <h2>{{ __('translate.aboutSpecTitle') }}</h2>
                <p class="descFont">{{ __('translate.aboutSpecSub') }}</p>
                <div class="block_services">
                    <ul class="valuesList">
                        <li class="valueList_item">
                            <div class="item_column">
                                <div class="item_title">{{ __('translate.spec1') }}</div>
                                <hr>
                                <div class="item_desc"> {!! nl2br(__('translate.spec1Sub')) !!}</div>
                            </div>
                        </li>

                        <li class="valueList_item">
                            <div class="item_column">
                                <div class="item_title">{{ __('translate.spec2') }}</div>
                                <hr>
                                <div class="item_desc"> {!! nl2br(__('translate.spec2Sub')) !!}</div>
                            </div>
                        </li>

                        <li class="valueList_item">
                            <div class="item_column">
                                <div class="item_title">{{ __('translate.spec3') }}</div>
                                <hr>
                                <div class="item_desc"> {!! nl2br(__('translate.spec3Sub')) !!}</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <h2>{{ __('translate.aboutPartnerTitle') }}</h2>
                <p class="descFont">{{ __('translate.aboutPartnerSub') }} </p>

                <h2><strong>{{ __('translate.aboutTeamTitle') }}</strong></h2>
                <p class="descFont">{{ __('translate.aboutTeamSub') }} </p>
                <p class="descFont">{{ __('translate.aboutTeamSub2') }} </p>
                <ul class="criteria">
                    <li>
                        <p> {{ __('translate.teamQ1') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ2') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ3') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ4') }}</p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ5') }} </p>
                    </li>
                    <li>
                        <p> {!! nl2br(__('translate.teamQ6')) !!} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ7') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ8') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ9') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ10') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ11') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ12') }}</p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ13') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ14') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ15') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ16') }} </p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ17') }}</p>
                    </li>
                    <li>
                        <p> {{ __('translate.teamQ18') }}</p>
                    </li>
                </ul>
                <p class="descFont">{!! nl2br(__('translate.aboutFooterSub')) !!}
                    <a href=""><strong>{{ __('translate.custom') }}</strong></a>
                    {{ __('translate.aboutFooterSubCont') }}
                </p>
            </div>
        </div>
        <div class="aboutCompany"><strong>
                {!! nl2br(__('translate.aboutFooterTitle')) !!} </strong>
        </div>
    {{-- </div> --}}
@endsection
