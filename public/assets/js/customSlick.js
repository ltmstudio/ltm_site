$(function () {
    $('.carousel-custom').on('init reInit afterChange', function (event, slick, currentSlide) {
        var $slick = $(slick.$slider);
        // Удаляем предыдущие специальные классы
        $slick.find('.slick-slide').removeClass('prev-slide next-slide');
        // Добавляем класс 'prev-slide' к предыдущему слайду
        $slick.find('.slick-current').prev('.slick-slide').addClass('prev-slide');
        // Добавляем класс 'next-slide' к следующему слайду
        $slick.find('.slick-current').next('.slick-slide').addClass('next-slide');
    });
    $('.carousel-custom').on('beforeChange', function (event, slick, currentSlideIndex, nextSlideIndex) {
        var windowWidth = $(window).width();
        // Применяем стили до начала анимации смены слайда
        // 'slick' - объект слайдера
        // 'currentSlideIndex' - индекс текущего слайда до смены
        // 'nextSlideIndex' - индекс следующего слайда, который станет активным

        // Снимаем пользовательские стили со всех слайдов
        $('.slick-slide').css('margin-top', '');

        // Применяем пользовательские стили к следующему активному слайду
        // Например, добавляем больший отступ сверху для предыдущего слайда

        $(slick.$slides[nextSlideIndex]).prev().css('margin-top', '130px');
        // И меньший отступ для следующего слайда
        $(slick.$slides[nextSlideIndex]).next().css('margin-top', '10px');
// if (windowWidth<=1460)
// {
//     $(slick.$slides[nextSlideIndex]).prev().css('margin-top', '120px');
//     // И меньший отступ для следующего слайда
//     $(slick.$slides[nextSlideIndex]).next().css('margin-top', '40px');
// }
//     else  
    if(windowWidth <= 1090) {
            $(slick.$slides[nextSlideIndex]).prev().css('margin-top', '40px');
        // И меньший отступ для следующего слайда
        $(slick.$slides[nextSlideIndex]).next().css('margin-top', '40px');
        }

    });


    $('.carousel-custom').on('afterChange', function (event, slick, currentSlideIndex) {
        slick.setPosition();
        // Применяем стили после завершения анимации смены слайда
        // Здесь currentSlideIndex - индекс нового активного слайда

        // Применяем пользовательские стили к активному слайду, если нужно
        // Например, устанавливаем стандартный отступ сверху для активного слайда
        $('.slick-slide').css('transform', '').css('margin-top', '');
        $(slick.$slides[currentSlideIndex]).css('margin-top', '70px');
    });



    $('.carousel-custom').slick({
        infinite: true,
        slidesToShow: 1,
        centerPadding: '20%',
        centerMode: true,
        slidesToScroll: 1,
        speed: 1000,
        autoWidth: true,
        prevArrow: '<div class="prev-cust-button ">Назад</div>',
        nextArrow: '<div class="next-cust-button ">Вперёд</div>',
        useCSS: true,
        useTransform: true,
        responsive: [
            {
                breakpoint: 1460,
                settings: {
                    centerPadding: '10%'
                },
                breakpoint: 1090,
                settings: {
                    centerMode: false,
                    centerPadding: '0',
                    // centerPadding: '12%',
                    
                },
                // breakpoint: 790, // Adjust this value as needed
                // settings: {
                //     centerPadding: '11%',
                // },
                breakpoint: 450, // Adjust this value as needed
                settings: {
                    centerMode: false,
                    centerPadding: '0',
                },
            }
            // ...
        ],
    });

    $('.serv-slider').on('init', function (event, slick) {
        var currentSlide = slick.currentSlide;
        $('.services_dots .services-dot').eq(currentSlide).addClass('active-dot');
    });
    $('.serv-slider').slick({
        infinite: true,
        slidesToShow: 1,
        focusOnSelect: true,
        centerMode: false, // Выключаем центрирование
        variableWidth: true, // Включаем переменную ширину слайдов
        speed: 1000,
        nextArrowHtml : '<button class="services_next"><img src="' + '../images/long-arrow-right.png' + '" style="width: 5.4rem;" alt=""></button>',
        prevArrow: '<div></div>',
    });


    $('.services_dots').slick({
        infinite: true,
        slidesToShow: 10,
        asNavFor: '.serv-slider',
        speed: 0,
        swipe: false,
        draggable: false,
        arrows: false,
        variableWidth: true,
        focusOnSelect: true,
        waitForAnimate: false,
    });
    $('.serv-slider').on('afterChange', function (event, slick, currentSlide) {
        // Удаляем класс 'active-dot' у всех элементов
        $('.services_dots .services-dot').removeClass('active-dot');

        // Добавляем класс 'active-dot' к соответствующему элементу
        $('.services_dots .services-dot').eq(currentSlide).addClass('active-dot');
    });
    function highlightActiveDot(currentSlide) {
        // Удаляем класс 'active-dot' у всех элементов
        $('.services_dots .services-dot').removeClass('active-dot');

        // Добавляем класс 'active-dot' к соответствующему элементу
        $('.services_dots .services-dot').eq(currentSlide).addClass('active-dot');
    }
    // Событие после инициализации слайдера
    $('.serv-slider').on('init', function (event, slick) {
        highlightActiveDot(0); // Подсветить первую точку
    });
    // Событие перед изменением слайда
    $('.serv-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        highlightActiveDot(nextSlide);
    });

    // Событие после изменения слайда
    $('.serv-slider').on('afterChange', function (event, slick, currentSlide) {
        highlightActiveDot(currentSlide);
    });


    $('.services-mobile-slider').slick({
        infinite: true,
        slidesToShow: 1,
        centerMode: true,
        // centerPadding: '20%',
        responsive: [
            {
                breakpoint: 450,
                settings: {
                    slidesToShow:1,
                }
            }
        ],
        // dots: true,  
        asNavFor:'.serv-mobile-dots',
        arrows:false,
        responsive:[
            {
                breakpoints: 1920,
                settings:{
                    slidesToShow:0,
                },
                breakpoints: 768,
                settings:{
                    slidesToShow:2,
                },
            }
        ]
    });

    $('.serv-mobile-dots').slick({
        infinite:true,
        slidesToShow:10,
        asNavFor:'.services-mobile-slider',
        speed:0,
        swipe: false,
        draggable: false,
        arrows: false,
        variableWidth: true,
        focusOnSelect: true,
        waitForAnimate: false,
    });
    $('.services-mobile-slider').on('init', function (event, slick) {
        var currentSlide = slick.currentSlide;
        $('.serv-mobile-dots .serv-mobile-dots').eq(currentSlide).addClass('active-mobile-dot');
    });
    $('.services-mobile-slider').on('afterChange', function (event, slick, currentSlide) {
        // Удаляем класс 'active-dot' у всех элементов
        $('.serv-mobile-dots .serv-mobile-dots').removeClass('active-mobile-dot');

        // Добавляем класс 'active-dot' к соответствующему элементу
        $('.serv-mobile-dots .serv-mobile-dots').eq(currentSlide).addClass('active-mobile-dot');
    });
    function highlightActiveDot(currentSlide) {
        // Удаляем класс 'active-dot' у всех элементов
        $('.serv-mobile-dots .serv-mobile-dots').removeClass('active-mobile-dot');

        // Добавляем класс 'active-dot' к соответствующему элементу
        $('.serv-mobile-dots .serv-mobile-dots').eq(currentSlide).addClass('active-mobile-dot');
    }
    // Событие после инициализации слайдера
    $('.services-mobile-slider').on('init', function (event, slick) {
        highlightActiveDot(0); // Подсветить первую точку
    });
    // Событие перед изменением слайда
    $('.services-mobile-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        highlightActiveDot(nextSlide);
    });

    // Событие после изменения слайда
    $('.services-mobile-slider').on('afterChange', function (event, slick, currentSlide) {
        highlightActiveDot(currentSlide);
    });



});
