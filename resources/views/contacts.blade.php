@extends('layouts.base')

@section('title', 'Контакты IT-компании LTM Studio в Туркменистане')

@section('content')

    <div class="container" id="contact-contact">
        <div class="contacts">
            <div class="column left">
                <h1 class="title">{{ __('translate.contacts') }}</h1>
            </div>
            <div class="contacts_info">
                <div class="contacts_desc">
                    {{-- <h2>{{ __('translate.contactsTitle') }}</h2> --}}
                    <p class="desc_p">{!! nl2br(__('translate.contactsSub')) !!}

                        {{-- <a href="" class="no-line desc_p">{{ __('translate.messenger') }}</a> --}}
                        {!! nl2br(__('translate.contactsSubCont')) !!}<a href="https://www.google.com/maps?q=37.956556,58.426333" target="_blank"
                            class="no-line desc_p">{{ __('translate.map') }}</a>
                </div>
                <ul class="contacts_phone " >
                    <li> <strong><a href="tel:+99361648605" class="no-line">+993 61 00 97 92</a></strong></li>
                    <li> <strong><a href="tel:+99361648605" class="no-line">+993 12 75 37 13</a></strong></li>

                </ul>

                <ul class="contacts_links">
                    <li>
                        <div class="link_row align-items-center marl-16">
                            <i class="fa fa-envelope" ></i>
                            <div><a href="mailto:info@ltm.studio" style="color: #fff">info@ltm.studio</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="link_row align-items-center">
                            <i id="linkedIn" class="fa-brands fa-linkedin"
                                ></i>
                            <div><a href="http://linkedin.com/company/ltmstudio"
                                    class="no-line" style="color: #fff">linkedin.com/company/ltmstudio</div>
                        </div>
                    </li>
                    <li>
                        <div class="link_row align-items-center">
                            <i id="instagram" class="fa-brands fa-instagram"
                                ></i>
                            <div><a href="http://instagram.com/ltmstudio" class="no-line" style="color: #fff">instagram.com/ltmstudio</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <button class="custom-button" id="suggestProject">
                    <p>{{ __('translate.sugProject') }}</p>
                </button>
                <div class="contacts-with-text"></div>
                <div class="contacts_request">
                    <div class="sub-text-under-content">

                        {!! nl2br(__('translate.contactsBackText')) !!}
                    </div>
                    <div>
                        <div class="dzin">
                            <div class="dzin_title">
                                <img src="{{ '../assets/images/dzin__title.png' }}">
                            </div>
                            <div class="dzin_icon">
                                <img src="{{ '../assets/images/phoneLightRed.png' }}">
                            </div>
                            <div class="dzin_phone"><a href="tel:+99312754480" class="no-line">+993 12 75 37 13</a></div>
                            <div class="dzin_phone"><a href="tel:+99361648605" class="no-line">+993 61 00 97 92</a></div>
                        </div>


                        <div class="mail">
                            <div class="mail_icon"> <img src="{{ '../assets/images/doveLightRed.png' }}"></div>
                            <div class="mail_title"><a href="mailto:info@ltm.studio" class="no-line">{!! nl2br(__('translate.pigeon')) !!}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
