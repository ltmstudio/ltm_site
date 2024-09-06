@extends('layouts.base')

@section('title', 'Контакты IT-консалтинговой компании Arassa Nusga в Туркменистане')

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

                        <a href="" class="no-line desc_p">{{ __('translate.messenger') }}</a>
                        {!! nl2br(__('translate.contactsSubCont')) !!}<a href="https://maps.app.goo.gl/XJBxGFw8iLYmaEK79"
                            class="no-line desc_p">{{ __('translate.map') }}</a>
                </div>
                <ul class="contacts_phone " >
                    <li> <strong><a href="tel:+99361648605" class="no-line">+993 61 648605</a></strong></li>

                </ul>

                <ul class="contacts_links">
                    <li>
                        <div class="link_row">
                            <i class="fa fa-envelope" style="color: #6ba1ff; font-size: 3.6rem;text-align: center;"></i>
                            <div><a href="mailto:info@arassanusga.com">info@arassanusga.com</a></div>
                        </div>
                    </li>
                    <li>
                        <div class="link_row">
                            <i id="linkedIn" class="fa-brands fa-linkedin"
                                style="color: #6ba1ff; font-size: 3.6rem; text-align: center;"></i>
                            <div><a href="http://linkedin.com/company/arassa-nusga"
                                    class="no-line">linkedin.com/company/arassa-nusga</div>
                        </div>
                    </li>
                    <li>
                        <div class="link_row">
                            <i id="instagram" class="fa-brands fa-instagram"
                                style="color: #6ba1ff; font-size: 3.6rem; text-align: center;"></i>
                            <div><a href="http://instagram.com/arassanusga" class="no-line">instagram.com/arassanusga</a>
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
                                <img src="{{ '../assets/images/phoneLightBlue.png' }}">
                            </div>
                            <div class="dzin_phone"><a href="tel:+99312754480" class="no-line">+993 12 754480</a></div>
                            <div class="dzin_phone"><a href="tel:+99361648605" class="no-line">+993 61 648605</a></div>
                        </div>


                        <div class="mail">
                            <div class="mail_icon"> <img src="{{ '../assets/images/doveLightBlue.png' }}"></div>
                            <div class="mail_title"><a href="mailto:info@arassanusga.com">{!! nl2br(__('translate.pigeon')) !!}</a></div>
                            {{-- <div class="mail_title">info@arassanusga.com</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
