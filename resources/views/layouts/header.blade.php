<div class="header-sticky-top ">

    <div class="header-nav">
        <div class="nav-item"> <a href="/{{ $lang }}/services">
                {{ __('translate.services') }} </a> </div>
        <div class="nav-item"> <a href="/{{ $lang }}/about_us">
                {{ __('translate.aboutUs') }} </a> </div>
        <div class="nav-item"> <a href="/{{ $lang }}/portfolio">
                {{ __('translate.portfolio') }} </a> </div>
        <div class="nav-item"> <a href="/{{ $lang }}/blog">
                {{ __('translate.blog') }}
            </a> </div>
        <div class="nav-item"> <a href="/{{ $lang }}/contacts">
                {{ __('translate.contacts') }}
            </a> </div>
    </div>

    <div class="header-fixed position-fixed">
        <div class="rotating-logo d-flex">

            {{-- <div class="image"></div> --}}
            <div class="circle-container" id="logoMain">
                <div class="scrolling-image">
                    <img src="{{ asset('/assets/images/name_1.png') }}?v={{ time() }}" alt="Scrolling Image">

                    {{-- <img src="{{ asset('/assets/images/name_1.png') }}" alt="Scrolling Image"> --}}
                </div>
                <div class="center-image">
                    <img src="{{ asset('/assets/images/logo.png') }}" alt="Center Image">
                </div>
            </div>
            {{-- <div style="width:120px"></div> --}}
            <div class="typing-text"></div>
        </div>

        <div class="contact-info">
            <span><a href="tel:+99361648605" class="no-line">+993 61 648605</a></span>
            <a href="https://www.linkedin.com/company/arassa-nusga/"  class="no-line"><i id="linkedIn" class="fa-brands fa-linkedin"
                style="color: #6ba1ff; font-size: 3.6rem; text-align: center;"></i></a>
            <a href="https://www.instagram.com/arassanusga" class="no-line"><i id="instagram" class="fa-brands fa-instagram"
                style="color: #6ba1ff; font-size: 3.6rem; text-align: center;"></i></a>

            <div class="lang">
                @php
                    $langs = ['ru', 'en', 'tm'];
                    $url = explode('/', $_SERVER['REQUEST_URI']);
                @endphp
                <div class="language">
                    <a>
                        <span>{{ $lang }}</span>
                        <i class="fa-solid fa-arrow-down-long" style= "color: #2C5BBC; font-size: 2rem;"></i>
                    </a>
                </div>
                <ul class="langList">
                    @php
                        foreach ($langs as $l) {
                            if ($lang != $l) {
                                $tt = "<li> <a href=\"/${l}/";
                                if (isset($url[2])) {
                                    $tt .= $url[2];
                                }
                                if (isset($url[3])) {
                                    $tt .= '/' . $url[3];
                                }
                                $tt .= "\" class=\"\">${l}</a></li>";
                                echo $tt;
                            }
                        }
                    @endphp
                </ul>
            </div>
            <div class="menu-button"><img src="{{ asset('/assets/images/menu.png') }}" alt="menu_button" />
            </div>
        </div>
    </div>
</div>

<div class="leftHeader">
    <div class="rowLeftHeader">
        <div class="followed-element">
            <a href="/{{ $lang }}/portfolio">
                <p class="portfolio">{{ __('translate.portfolio') }}</p>
            </a>
        </div>
    </div>
    @if ($leftMenu)
        <div class="rowLeftHeader">
            <a href="/{{ $lang }}/">
                <p>{{ __('translate.mainPage') }}</p>
            </a>
            <p style="margin:2.4rem">{{ $currentPage }}</p>
        </div>
    @endif
</div>
<script>
    const logo = document.getElementById('logoMain');
    const linkedin = document.getElementById('linkedIn');
    const instagram = document.getElementById('instagram');

    logo.addEventListener('click', function() {
        window.location.href = '/{{ $lang }}';
    });
    linkedin.addEventListener('click', function() {
        window.location.href = 'https://www.linkedin.com/company/arassa-nusga/';
    });
    instagram.addEventListener('click', function() {
        window.location.href = 'https://www.instagram.com/arassanusga';
    });

    const element = document.querySelector('.followed-element');

    element.addEventListener('mouseenter', () => {
        element.style.transform = 'scale(1.1)'; // Увеличиваем элемент при наведении
    });

    element.addEventListener('mouseleave', () => {
        element.style.transform = 'scale(1)'; // Возвращаем элемент в исходное состояние при уходе курсора
    });
</script>
