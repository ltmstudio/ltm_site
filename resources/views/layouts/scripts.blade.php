<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/typingHeader.js') }}"></script>
<script src="{{ asset('assets/js/editors.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollTop.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/customSlick.js') }}"></script>
<script src="{{ asset('assets/js/scroll2.js') }}"></script>
<script src="{{ asset('assets/js/cursor.js') }}"></script>
<script src="{{ asset('assets/js/cursor_test.js') }}"></script>
<script src="{{ asset('assets/js/followedCursor.js') }}"></script>
<script src="{{ asset('assets/js/footerUp.js') }}"></script>
<script src="{{ asset('assets/js/blurPortfolio.js') }}"></script>
<script src="{{ asset('assets/js/menuBlocks.js') }}"></script>
<script src="{{ asset('assets/js/showMoreText.js') }}"></script>
<script src="{{ asset('assets/js/truncateBlogCart.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script> -->
<script>
    $(window).on('load', function() {
        $('.loaders').hide(200);
    });
    $(document).ready(function() {
        var currentPage = "{{ $currentPage }}";
        // console.log(currentPage);
        $('.nav-item').each(function() {
            var text = $(this).text().trim();
            // console.log(text);
            if (currentPage === text) {
                // console.log(currentPage === text);

                $(this).addClass('active');
            }
        });
    });

    //     $('.element').click(function(){
    //     var categoryName = $(this).data('category-name'); // Get the English version from data attribute

    //     $.ajax({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
    //         },
    //         url: '/en/ajax-portfolio',
    //         method: 'post',
    //         dataType: 'json',
    //         data: {category: categoryName},
    //         success: function(data){
    //             $('.grid_portfolio').html("");
    //             data.forEach(p => {
    //                 $('.grid_portfolio').append('<a href="/{{ $lang }}/portfolio/'+p['id']+'" class="grid-item no-line"> <div class="columnPort"> <img src="/storage/'+p['photo']+'" alt="Image"> <div class="gridText"> <div class="subtitle">'+p['what']+'</div> <div class="rowPort"> <div class="line"></div> <div class="gridTitle">'+p['title_'+ '{{ $lang }}']+'</div> </div> </div> </a>');
    //             });
    //             $('#loadMoreButton').prop('disabled', false).addClass('relaod'); 
    //         }
    //     });
    // });

    // Ajax portfolio
    $('.element').click(function() {
        var categoryName = $(this).find('p').data('category-name');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
            url: '/en/ajax-portfolio',
            method: 'post',
            dataType: 'json',
            data: {
                category: categoryName
            }, //$(this).text()
            success: function(data) {
                $('.grid_portfolio').html("");
                data.forEach(p => {
                    $('.grid_portfolio').append(
                        '<a href="/{{ $lang }}/portfolio/' + p['id'] +
                        '" class="grid-item no-line"> <div class="columnPort"> <img src="/storage/' +
                        p['photo'] +
                        '" alt="Image"> <div class="gridText"> <div class="subtitle">' +
                        p['what'] +
                        '</div> <div class="rowPort"> <div class="line"></div> <div class="gridTitle">' +
                        p["title_{{ $lang }}"] +
                        '</div> </div> </div> </div> </a>');

                });
                $('#loadMoreButton').prop('disabled', false).addClass('relaod');
            }
        });
    });


    // Ajax Blog
    $('.element-blog').click(function() {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
            url: '/en/ajax-blog',
            method: 'post',
            dataType: 'json',
            data: {
                category_blog: $(this).text()
            },
            success: function(data) {
                $('.grid_blog').html("");
                data.forEach(i => {
                    var additionalClass = (i['id'] % 2 == 0 && i['id'] != 2) ?
                        'add-margin-blog' : '';
                    var html = '<a href="/{{ $lang }}/blog/' + i['id'] +
                        '" class="grid-item ' + additionalClass + ' no-line">' +
                        '   <div class="block">' +
                        '       <div class="row_blog">' +
                        '           <h2 class="subtBlog">' + i['what'] + '</h2>' +
                        '           <h1 class="titleBlog">' + i[
                            "title_{{ $lang }}"] + '</h1>' +
                        '           <div class="body-text">' + i[
                            "desc_{{ $lang }}"] + '</div>' +
                        '       </div>' +
                        '       <div class="arrow d-flex align-items-center justify-content-center">' +
                        '           <i class="fa-solid fa-arrow-right-long" style="color:white; font-size:40px;"></i>' +
                        '       </div>' +
                        '   </div>' +
                        '</a>';

                    $('.grid_blog').append(html);
                    cleanAndTruncateText('.body-text',
                        400); // Adjust 150 to your desired max length
                });
                $('#loadMoreButton').prop('disabled', false).addClass('relaod');
            }
        });
    });

    //        
    //////////////////////////////// GPT LOAD-MORE//////////////////////
    $(document).ready(function() {
        var currentPage = 1;
        var selectedType = "";

        $('#loadMoreButton').click(function() {
            $('.reload-icon').addClass('loading');

            // var newType = $(this).find('p').data('category-name');
            var newType = $('.element.selected p').text();
            console.log(newType);
            if (newType !== selectedType) {
                selectedType = newType;
                // $('.reload').show();
                // $('#loadMoreButton').addClass('reload');
                currentPage = 1;
                console.log((6 * (currentPage)));
                console.log(selectedType);
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                url: '/en/load-more/' + (6 * (currentPage)) + '/' + selectedType,
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    var loadEndTime = new Date().getTime() +
                        2300; // 15 seconds for full rotation
                    var checkCompletion = function() {
                        var currentTime = new Date().getTime();
                        if (currentTime >= loadEndTime) {
                            $('.reload-icon').removeClass(
                                'loading'); // Remove the loading animation
                            if (data.length > 0) {
                                console.log(data);
                                data.forEach(p => {
                                    $('.grid_portfolio').append(
                                        '<a href="/{{ $lang }}/portfolio/' +
                                        p['id'] +
                                        '" class="grid-item no-line"> <div class="columnPort"> <img src="/storage/' +
                                        p['photo'] +
                                        '" alt="Image"> <div class="gridText"> <div class="subtitle">' +
                                        p['what'] +
                                        '</div> <div class="rowPort"> <div class="line"></div> <div class="gridTitle">' +
                                        p["title_{{ $lang }}"] +
                                        '</div> </div> </div> </div> </a>');
                                });
                                //             data.forEach(i => {
                                //  var additionalClass = (i['id'] % 2 == 0 && i['id'] != 2) ? 'add-margin-blog' : '';
                                //  var html = '<a href="/{{ $lang }}/blog/' + i['id'] + '" class="grid-item ' + additionalClass + ' no-line">' +
                                //            '   <div class="block">' +
                                //            '       <div class="row_blog">' +
                                //            '           <h2 class="subtBlog">' + i['what'] + '</h2>' +
                                //            '           <h1 class="titleBlog">' + i["title_{{ $lang }}"] + '</h1>' +
                                //            '           <div class="body-text truncate">' + i["desc_{{ $lang }}"] + '</div>' +
                                //            '       </div>' +
                                //            '       <div class="arrow d-flex align-items-center justify-content-center">' +
                                //            '           <i class="fa-solid fa-arrow-right-long" style="color:white; font-size:40px;"></i>' +
                                //            '       </div>' +
                                //            '   </div>' +
                                //            '</a>';

                                // $('.grid_blog').append(html);
                                //  });
                                cleanAndTruncateText('.body-text',
                                    400); // Adjust 150 to your desired max lengths
                            } else
                            if (data.length === 0) {
                                $('.reload').hide();
                            }
                        } else {
                            setTimeout(checkCompletion, 100); // Check again in 100ms
                        }
                    };
                    checkCompletion();
                },
            });
            currentPage++;
        });
    });


    $(document).ready(function() {
        $('.element:first').addClass('selected');
    });


    const elements = document.querySelectorAll('.element');
    elements.forEach(element => {
        element.addEventListener('click', () => {
            elements.forEach(el => el.classList.remove('selected'));
            element.classList.add('selected');
            $('#loadMoreButton').addClass('reload');
            $('.reload').show();

        });
    });
</script>

<script>
    // $(document).ready(function () {
    //     // Проверяем ширину экрана
    //     // Регистрация плагина GSAP
    //     gsap.registerPlugin(ScrollTrigger);

    //     const slides = $(".glassmorph-slide");
    //     const slider = $('.new-glassmorph-slider');
    //     const totalSlides = slides.length;

    //     // Рассчитываем ширину одного слайда с учетом отступов
    //     const slideWidth = slides.outerWidth(true); // включает margin

    //     // Полная ширина всех слайдов
    //     const totalWidth = slideWidth * totalSlides;

    //     // Добавляем отступ перед первым слайдом
    //     slider.css('padding-left', `${$(window).width() / 1.5 - slideWidth / 1.5}px`);

    //     // Устанавливаем общую ширину слайдера с учетом отступа
    //     slider.css('width', `${totalWidth + $(window).width() / 1.8}px`);

    //     // Анимация ScrollTrigger для корректного скролла
    //     gsap.to(slider[0], {
    //         x: () => `-${totalWidth - $(window).width() / 2.2}px`, // Полное смещение с учетом нового отступа
    //         ease: "none",
    //         scrollTrigger: {
    //             trigger: ".slider-container",
    //             pin: true,
    //             scrub: 1.5,
    //             start: "top left",
    //             pinSpacing: false,
    //             end: `+=${totalWidth}px`, // Полная прокрутка всех слайдов
    //             onUpdate: (self) => {
    //                 slides.each(function (i) {
    //                     const progress = self.progress * (totalSlides - 1);

    //                     // Используем Math.floor для более плавного переключения
    //                     $(this).toggleClass("active", Math.floor(progress) === i);
    //                 });
    //             }
    //         }
    //     });

    //     $('.mobile-glassmorph-slider').slick({
    //         slidesToShow: 1,
    //         slidesToScroll: 1,
    //         infinite: false,
    //     });


        $('.portf-slider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: false,
            prevArrow:'<div></div>',
            nextArrow:'<div class="next-portf-arrow"></div>',
            responsive: [{
                breakpoint: 991, // Когда ширина экрана меньше 991px
                settings: {
                    slidesToShow: 1, // Показываем 1 слайд
                    slidesToScroll: 1
                }
            }]
        });


    // });
//     $(function() {

// 'use strict';

// //Create animation ScrollTrigger
// function scrollTrig() {

//     gsap.registerPlugin(ScrollTrigger);

//     let gsapBl = $('.gsap__bl').width();

//     //On full width
//     // $('.gsap__item').css('width', gsapBl + 'px');

//     //Transform slider track
//     let gsapTrack = $('.gsap__track').width();
//     let scrollSliderTransform = gsapTrack - gsapBl

//     //Create ScrollTrigger
//     gsap.to('.gsap__track', {
//         scrollTrigger: {
//             trigger: '.gsap_slider',
//             start: 'center center',
//             end: () => '+=' + gsapTrack,
//             pin: true,
//             scrub: true,
//             onUpdate: updateActiveSlide
//         },
//         x: '-=' + scrollSliderTransform + 'px'
//     });

// }
// scrollTrig();

// // Function to update active slide
// function updateActiveSlide() {
//     let slides = $('.gsap__item');
//     let scrollPos = $(window).scrollLeft();
//     let windowWidth = $(window).width();

//     slides.each(function() {
//         let slide = $(this);
//         let slideLeft = slide.offset().left;
//         let slideRight = slideLeft + slide.width();

//         if (slideLeft < scrollPos + windowWidth / 2 && slideRight > scrollPos + windowWidth / 2) {
//             slide.addClass('active');
//         } else {
//             slide.removeClass('active');
//         }
//     });
// }

// //resize window
// const debouncedResize = _.debounce(onWindowResize, 500);

// function onWindowResize() {
//     console.log('Window resized!');
//     location.reload();
// }
// $(window).on('resize', debouncedResize);
// });

</script>

<script>
    (function($) {
        $(function() {
            $(window).on("scroll", function() {
                fnOnScroll();
            });

            $(window).on("resize", function() {
                fnOnResize();
            });

            var agTimeline = $(".js-timeline"),
                agTimelineLine = $(".js-timeline_line"),
                agTimelineLineProgress = $(".js-timeline_line-progress"),
                agTimelinePoint = $(".js-timeline-card_point-box"),
                agTimelineItem = $(".js-timeline_item"),
                agOuterHeight = $(window).outerHeight(),
                agHeight = $(window).height(),
                f = -1,
                agFlag = false;

            function fnOnScroll() {
                agPosY = $(window).scrollTop();

                fnUpdateFrame();
            }

            function fnOnResize() {
                agPosY = $(window).scrollTop();
                agHeight = $(window).height();

                fnUpdateFrame();
            }

            function fnUpdateWindow() {
                agFlag = false;

                agTimelineLine.css({
                    top: agTimelineItem.first().find(agTimelinePoint).offset().top -
                        agTimelineItem.first().offset().top,
                    bottom: agTimeline.offset().top +
                        agTimeline.outerHeight() -
                        agTimelineItem.last().find(agTimelinePoint).offset().top,
                });

                f !== agPosY && ((f = agPosY), agHeight, fnUpdateProgress());
            }

            function fnUpdateProgress() {
                var agTop = agTimelineItem
                    .last()
                    .find(agTimelinePoint)
                    .offset().top;

                i = agTop + agPosY - $(window).scrollTop();
                a =
                    agTimelineLineProgress.offset().top +
                    agPosY -
                    $(window).scrollTop();
                n = agPosY - a + agOuterHeight / 2;
                i <= agPosY + agOuterHeight / 2 && (n = i - a);
                agTimelineLineProgress.css({
                    height: n + "px"
                });

                agTimelineItem.each(function() {
                    var agTop = $(this).find(agTimelinePoint).offset().top;

                    agTop + agPosY - $(window).scrollTop() <
                        agPosY + 0.5 * agOuterHeight ?
                        $(this).addClass("js-ag-active") :
                        $(this).removeClass("js-ag-active");
                });
            }

            function fnUpdateFrame() {
                agFlag || requestAnimationFrame(fnUpdateWindow);
                agFlag = true;
            }
        });
    })(jQuery);
</script>
<script>
  $(document).ready(function() {
    // Функция для анимации чисел
    function animateNumbers(element, start, end, duration) {
        let range = end - start;
        let current = start;
        let increment = end > start ? 1 : -1;
        let stepTime = Math.abs(Math.floor(duration / range));
        let hasPlus = $(element).data('target').includes('+'); // Проверяем, есть ли плюс

        let timer = setInterval(function() {
            current += increment;
            $(element).text(current + (hasPlus ? "+" : ""));
            if (current >= end) {
                clearInterval(timer);
                $(element).text(end + (hasPlus ? "+" : "")); // Финальная точка с плюсом
            }
        }, stepTime);
    }

    // Проверка на видимость элемента
    function checkVisibility() {
        $('.stats_count').each(function() {
            let $this = $(this);
            let textValue = $this.attr('data-target').replace('+', ''); // Убираем знак "+" для правильного подсчета
            let targetValue = parseInt(textValue); // Превращаем текст в число

            // Проверка, виден ли элемент
            let windowHeight = $(window).height();
            let scrollTop = $(window).scrollTop();
            let elementOffsetTop = $this.offset().top;
            let elementHeight = $this.outerHeight();

            // Условие видимости элемента
            if (elementOffsetTop < scrollTop + windowHeight && elementOffsetTop + elementHeight > scrollTop) {
                // Элемент виден — запускаем анимацию
                if (!$this.hasClass('animating')) { 
                    animateNumbers($this, 0, targetValue, 2000);
                    $this.addClass('animating'); 
                }
            } else {
                // Элемент выходит за пределы видимости — сбрасываем класс, чтобы анимация могла быть запущена заново
                $this.removeClass('animating');
                $this.text("0+"); // Возвращаем элемент к исходному состоянию
            }
        });
    }

    // Отслеживаем скролл и проверяем видимость
    $(window).on('scroll', function() {
        checkVisibility();
    });

    // Проверяем видимость элементов при загрузке страницы
    checkVisibility();
});

</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5TMJMPE0M9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5TMJMPE0M9');
</script>
