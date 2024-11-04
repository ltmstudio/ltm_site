@extends('layouts.base')

@section('title', 'Услуги IT-компании LTM Studio в Туркменистане')
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
    <div class="circle-7">
        <img src="{{ '../assets/images/circle-6.png' }}" alt="" loading="lazy">
    </div>
    <div class="circle-6">
        <img src="{{ '../assets/images/radialCircle.png' }}" width="707px" loading="lazy">
    </div>
@endsection
@section('content')

    <div class="servicesPage">
        <div class="servicesIntro">
            <!-- <div class="circle">  <img src="radialCircle.png" width="707"></div> -->
           
            {{-- <div class="pre_title">{{ __('translate.pre_title') }}
    </div> --}}
            <div class="h"></div>

            <div class="column left">
                {{-- <p>{!! nl2br(__('translations.title')) !!}</p> --}}

                <h1 class="title"> {!! nl2br(__('translate.title')) !!} </h1>
                {{-- <div class="title"> {{__('translate.title')}}
    </div> --}}

                <div class="subt">
                    <div class="p1">{{ __('translate.p1') }}</div>
                    <div class=" p1">{{ __('translate.p1_2') }} <span class="serv-p1">{{ __('translate.p1_2_custom') }}
                        </span>
                        {{ __('translate.p1_2_cont') }}
                    </div>
                </div>
            </div>
            <div class="column right">
                <div> {!! nl2br(__('translate.lampText')) !!}</div>

                <img src="{{ '../assets/images/image.png' }}" loading="lazy">
            </div>
        </div>
        <section class="section-slider gsap_slider mobile-none">
            <p class="slider-title">{{ __('translate.our_serv_title') }}</p>
            <div class="content m60">
                <div class="section__slider gsap_h">
                    <div class="gsap__bl">
                        <div class="gsap__inner">
                            <div class="gsap__track">
                                <div class="glassmorph-slide gsap__item active">
                                    <h2 class="slide-title"> {{ __('translate.servTitle1') }}</h2>
                                    <p class="slide-desc">{{ __('translate.servDesc1') }}</p>
                                </div>
                                <div class="glassmorph-slide gsap__item active">
                                    <h2 class="slide-title">{{ __('translate.servTitle2') }}</h2>
                                    <p class="slide-desc">{{ __('translate.servDesc2') }}</p>
                                </div>
                                <div class="glassmorph-slide gsap__item active">
                                    <h2 class="slide-title">{{ __('translate.servTitle3') }}</h2>
                                    <p class="slide-desc">{{ __('translate.servDesc3') }}</p>
                                </div>
                                <div class="glassmorph-slide gsap__item active">
                                    <h2 class="slide-title">{{ __('translate.servTitle4') }}</h2>
                                    <p class="slide-desc">{{ __('translate.servDesc4') }}</p>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- gsap__bl END -->
                </div>
            </div>
        </section>
        <div class="mobile-glassmorph-cards desktop-none">
            <div class="glassmorph-slide active">
                <h2 class="slide-title"> {{ __('translate.servTitle1') }}</h2>
                <p class="slide-desc">{{ __('translate.servDesc1') }}</p>
            </div>
            <div class="glassmorph-slide active">
                <h2 class="slide-title">{{ __('translate.servTitle2') }}</h2>
                <p class="slide-desc">{{ __('translate.servDesc2') }}</p>
            </div>
            <div class="glassmorph-slide active">
                <h2 class="slide-title">{{ __('translate.servTitle3') }}</h2>
                <p class="slide-desc">{{ __('translate.servDesc3') }}</p>
            </div>
            <div class="glassmorph-slide active">
                <h2 class="slide-title">{{ __('translate.servTitle4') }}</h2>
                <p class="slide-desc">{{ __('translate.servDesc4') }}</p>
            </div>
        </div>
        @include('components.timeline')
        <div class="emoji d-flex flex-column justify-content-center">
            <p> {{ __('translate.emoji') }}</p>
            <p>🤞🖖✌️</p>
        </div>

        <div class="servicesBody">
            <div class="title">
                {{ __('translate.qualityTitle') }}
            </div>
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
                <strong> <a href="/{{ $lang }}/faq" class="no-line"><span class="serv-p1"> {{ __('translate.questionSubCustom') }} </span></a></strong>
            </p>
            <p>{{ __('translate.call') }}<a class="serv-p1 no-line" href="tel:+99312753713">{!! nl2br(__('translate.number')) !!}</a>
                <strong><a class="no-line" href="mailto:info@ltm.studio">{{ __('translate.write_to_email') }}<span class="serv-p1"> {{ __('translate.mail') }}
                        </span> </a></strong>
            </p>
        </div>
    </div>
    <div class="about_company ">
        <div class="small-container no-padding">
            <div class="large-text-wrap" style="position: relative">
                <div class="side-text-wrapper" data-side-text
                    style="transform: translate(0%, -22.0837%) translate3d(0px, 0px, 0px);">
                    {!! nl2br(__('translate.weAreBest')) !!}

                </div>
            </div>
            <div class="about_company_left">
                <div class="shortDesc">
                    <h2 class="about_company_title" data-separate-word style>
                        <div class="title_back" id="h2">


                        </div>
                        <span class="word">{{ __('translate.moreThan1') }} <br> </span>
                        <div class="title_back" id="h3">


                        </div>
                        <span class="word">{{ __('translate.moreThan2') }}</span>

                    </h2>
                    <div class="about_company_sml">
                        <p>
                            {{ __('translate.aboutUsFooter1') }}
                        </p>

                        <p>{{ __('translate.aboutUsFooter2') }}</p>

                    </div>

                </div>
            </div>
            <details class="desktop-none">
                <summary>
                    <div class="d-flex hide-more-block">
                        <p> {{ __('translate.more') }}</p>
                        <div class="hide-more-btn ">
                            <i class="fa fa-chevron-down"></i>
                        </div>
                    </div>
                </summary>
                <div class="scroll_desc" style="padding-bottom: 20px;">
                    <p class="mt-5"> {{ __('translate.aboutUsFooter3') }}</p>

                    <p class="mt-5"> {{ __('translate.aboutUsFooter4') }}</p>

                    <p class="mt-5"> {{ __('translate.aboutUsFooter5') }}</p>
                    <p class="mt-5"> {{ __('translate.aboutUsFooter6') }}</p>
                </div>
            </details>

            <div class="about_company_right mobile-none">
                <div class="right_desc">

                    <div class="scroll_content" style="padding-right: 20px; margin-bottom: -20px;">
                        <div class="scroll_desc" style="padding-bottom: 20px;">
                            <p class="mt-5"> {{ __('translate.aboutUsFooter3') }}</p>

                            <p class="mt-5"> {{ __('translate.aboutUsFooter4') }}</p>

                            <p class="mt-5"> {{ __('translate.aboutUsFooter5') }}</p>
                            <p class="mt-5"> {{ __('translate.aboutUsFooter6') }}</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex hide-more-block desktop-none mobile-none">
                    <p>Скрыть</p>
                    <div class="hide-more-btn">
                        <i class="fa fa-chevron-up"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
