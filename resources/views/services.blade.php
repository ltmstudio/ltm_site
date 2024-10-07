@extends('layouts.base')

@section('title', 'Услуги IT-консалтинговой компании LTM Studio в Туркменистане')
@section('circles')
    <div class="circle-1">
        <img src="{{ '../assets/images/circle-1.png' }}" alt="" loading="lazy">
    </div>
    <div class="circle-3">
        <img src="{{ '../assets/images/circle-3.png' }}" alt="" loading="lazy">
    </div>
    <div class="circle-4">
        <img src="{{ '../assets/images/circle-4.png' }}" alt="" loading="lazy">
    </div>
    <div class="circle-5">
        <img src="{{ '../assets/images/circle-5.png' }}" alt="" loading="lazy">
    </div>
    <div class="circle-6">
        <img src="{{ '../assets/images/circle-6.png' }}" alt="" loading="lazy">
    </div>
    <div class="circle-7">
        <img src="{{ '../assets/images/radialCircle.png' }}" width="707px" style="z-index: 1;" loading="lazy">
    </div>
@endsection
@section('content')

    <div class="servicesPage">
        <div class="servicesIntro">
            <!-- <div class="circle">  <img src="radialCircle.png" width="707"></div> -->
            <div class="leftHeaderTop">
                <p>{{ __('translate.mainPage') }}</p>
                <p>{{ __('translate.services') }}</p>
            </div>
            {{-- <div class="pre_title">{{ __('translate.pre_title') }}</div> --}}
            <div class="h"></div>

            <div class="column left">
                {{--                    <p>{!! nl2br(__('translations.title')) !!}</p> --}}

                <h1 class="title"> {!! nl2br(__('translate.title')) !!} </h1>
                {{--                    <div class="title"> {{__('translate.title')}} </div> --}}

                <div class="subt">
                    <div class="p1">{{ __('translate.p1') }}</div>
                    <div class="p1">{{ __('translate.p1_2') }} <span
                            style="color:#1478E8; font-weight: 600;">{{ __('translate.p1_2_custom') }} </span>
                        {{ __('translate.p1_2_cont') }}</div>
                </div>
            </div>
            <div class="column right">
                <div> {!! nl2br(__('translate.lampText')) !!}</div>

                <img src="{{ '../assets/images/image.png' }}" loading="lazy">
            </div>
        </div>
        <!-- <div class="container"> -->
        {{-- <div class="advertise">{{__('translate.advert')}}<span style="color:#1478E8; font-weight: 600;"> {{__('translate.advert_custom')}}</span>{{__('translate.advert_cont')}}</div> --}}
        <div class="gridCon">
            <div class="gridItem">
                <div class="rows-3">
                    <img src="{{ '../assets/images/website.png' }}" width="57" loading="lazy">
                    <h2>{{ __('translate.servTitle1') }}</h2>
                    <hr>

                    <h3>{{ __('translate.servSubTitle1') }}</h3>
                </div>
            </div>
            <div class="gridItem">
                <div class="rows-3">
                    <img src="{{ '../assets/images/app-development.png' }}" width="57" loading="lazy">
                    <h2>{{ __('translate.servTitle2') }}</h2>
                    <hr>

                    <h3>{{ __('translate.servSubTitle2') }}</h3>
                </div>
            </div>
            <div class="gridItem">
                <div class="rows-3">
                    <img src="{{ '../assets/images/bitrix.png' }}" width="57" loading="lazy">
                    <h2>{{ __('translate.servTitle3') }}</h2>
                    <hr>
                    <h3>{{ __('translate.servSubTitle3') }}</h3>
                </div>
            </div>
            <div class="gridItem">
                <div class="rows-3">
                    <img src="{{ '../assets/images/logosoft.png' }}" width="57" loading="lazy">
                    <h2>{{ __('translate.servTitle4') }}</h2>
                    <hr>

                    <h3>{{ __('translate.servSubTitle4') }}</h3>
                </div>
            </div>
            <div class="gridItem">
                <div class="rows-3">
                    <img src="{{ '../assets/images/diagnostic.png' }}" width="57" loading="lazy">
                    <h2>{{ __('translate.servTitle5') }}</h2>
                    <hr>

                    <h3>{{ __('translate.servSubTitle5') }} </h3>
                </div>
            </div>
            <div class="gridItem">
                <div class="rows-3">
                    <img src="{{ '../assets/images/analytics.png' }}" width="57" loading="lazy">
                    <h2>{{ __('translate.servTitle6') }}</h2>
                    <hr>

                    <h3>{{ __('translate.servSubTitle6') }}</h3>
                </div>
            </div>


            <div class="gridItem">
                <div class="rows-3">
                    <img src="{{ '../assets/images/consulting.png' }}"width="57" loading="lazy">
                    <h2>{{ __('translate.servTitle7') }}</h2>
                    <hr>

                    <h3>{{ __('translate.servSubTitle7') }}</h3>
                </div>
            </div>

            <div class="gridItem">
                <div class="rows-3">
                    <img src="{{ '../assets/images/antivirus.png' }}" width="57" loading="lazy">
                    <h2>{{ __('translate.servTitle8') }}</h2>
                    <hr>

                    <h3>{{ __('translate.servSubTitle8') }}</h3>
                </div>
            </div>
            <div class="gridItem">
                <div class="rows-3">
                    <img src="{{ '../assets/images/sales.png' }}" width="57" loading="lazy">
                    <h2>{{ __('translate.servTitle9') }} </h2>
                    <hr>

                    <h3>{{ __('translate.servSubTitle9') }}</h3>
                </div>
            </div>
        </div>

        <div class="emoji">
            <p> {{ __('translate.emoji') }}</p>
            {{-- <div class="emojis"> &#129310; &#128406; &#9996;</div> --}}
        </div>

        <div class="servicesBody">
            <div class="title">
                {{ __('translate.qualityTitle') }} </div>
            <div class="sub">{{ __('translate.qualitySub') }}</div>
            <ul>
                <li>
                    <div class="item-1">{{ __('translate.q1_title') }} </div>
                    <div class="item-2">{{ __('translate.q1_sub') }}</div>
                </li>
                <li>
                    <div class="item-1">{{ __('translate.q2_title') }}</div>
                    <div class="item-2">{{ __('translate.q2_sub') }}</div>
                </li>
                <li>
                    <div class="item-1">{{ __('translate.q3_title') }}</div>
                    <div class="item-2">{{ __('translate.q3_sub') }}</div>
                </li>
                <li>
                    <div class="item-1">{{ __('translate.q4_title') }}</div>
                    <div class="item-2">{{ __('translate.q4_sub') }}</div>
                </li>
                <li>
                    <div class="item-1">{{ __('translate.q5_title') }} </div>
                    <div class="item-2">{{ __('translate.q5_sub') }}</div>
                </li>
                <li>
                    <div class="item-1">{{ __('translate.q6_title') }}</div>
                    <div class="item-2">{{ __('translate.q6_sub') }}</div>
                </li>
                <li>
                    <div class="item-1">{{ __('translate.q7_title') }}</div>
                    <div class="item-2">{{ __('translate.q7_sub') }}</div>
                </li>
            </ul>
        </div>
        <!-- <div class="sp"></div> -->
        <div class="servicesQuestions">
            <p>
                <strong>{{ __('translate.questionTitle') }}</strong>
                <br> {{ __('translate.questionSub') }}
                <strong> <span style="color:#1478E8;"> {{ __('translate.questionSubCustom') }} </span></strong>
            </p>
            <p>{!! nl2br(__('translate.call')) !!}
                <strong><span style="color:#1478E8;"> {{ __('translate.mail') }} </span> </strong>
            </p>
        </div>
    </div>
    <div class="servicesFooter">
        <div class="title">{!! nl2br(__('translate.footerTitle')) !!}</div>
        <p>{!! nl2br(__('translate.footerSub')) !!}</p>
        {{-- <p><strong>{{ __('translate.footerSubStrong') }}</strong></p> --}}
    </div>

@endsection
