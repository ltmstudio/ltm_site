@extends('layouts.base')

@section('title', 'MainPage')
@section('custom-slider')
    @if (session('success'))
        <div class="alert alert-danger">

            {{ session('success') }}

        </div>
    @endif
    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <div class="mainSlider ">
        <div class="homeTitle">
            Создаем крутые логотипы, дизайны сайтов, понятные, но стильные интерфейсы
        </div>

        <div class="carousel-custom ">
            <div class="carousel-custom-item">
                <div class="col flex-column slide-text">
                    <p class="slide-title">Дизайн упаковки перчаток ProfiGlove</p>
                    <a class="slide-a no-line">Смотреть проект</a>
                </div>
                <img class="image-container" src="{{ '../assets/images/div.tilter__figure.png' }}" alt="">
            </div>
            <div class="carousel-custom-item">
                <div class="slide-text">
                    <p class="slide-title">Дизайн упаковки перчаток ProfiGlove</p>
                    <a class="slide-a no-line">Смотреть проект</a>
                </div>
                <img class="image-container" src="{{ '../assets/images/div.tilter__figure.png' }}" alt="">
            </div>
            <div class="carousel-custom-item">
                <div class="slide-text">
                    <span class="slide-title">Дизайн упаковки перчаток ProfiGlove</span>
                    <a class="slide-a no-line">Смотреть проект</a>
                </div>
                <img class="image-container" src="{{ '../assets/images/div.tilter__figure.png' }}" alt="">
                {{-- <div class="slide-text">
                    <span class="slide-title">Дизайн упаковки перчаток ProfiGlove</span>
                    <a class="slide-a no-line">Смотреть проект</a>
                </div> --}}
            </div>
            
            <div class="carousel-custom-item">
                <div class="slide-text">
                    <span class="slide-title">Дизайн упаковки перчаток ProfiGlove</span>
                    <a class="slide-a no-line">Смотреть проект</a>
                </div>
                <img class="image-container" src="{{ '../assets/images/div.tilter__figure.png' }}" alt="">
            </div>
            <div class="carousel-custom-item">
                <div class="slide-text">
                    <span class="slide-title">Дизайн упаковки перчаток ProfiGlove</span>
                    <a class="slide-a no-line">Смотреть проект</a>
                </div>
                <img class="image-container" src="{{ '../assets/images/div.tilter__figure.png' }}" alt="">
            </div>
            <div class="carousel-custom-item">
                <div class="slide-text">
                    <span class="slide-title">Дизайн упаковки перчаток ProfiGlove</span>
                    <a class="slide-a no-line">Смотреть проект</a>
                </div>
                <img class="image-container" src="{{ '../assets/images/div.tilter__figure.png' }}" alt="">
            </div>
        </div>

    </div>
@endsection
@section('serv-slider')

    <div class="services_content mobile-none">
        <div class="services_title">Мы разбираемся в:</div>

        <div class=" services serv-slider">
            <div class="serv-custom-item">

                <h2 class="section_title">
                    Логотипы <br>
                    и фирменный стиль
                </h2>
                <div class="section_desc">
                    <p>
                        <span>Разработка уникального логотипа и
                            корпоративного фирменного стиля, создание брендбука
                            (гайдлайна) для повышения уровня компании и грамотной стандартизации.
                            Повышаем узнаваемость, доверие, формируем платформу бренда.</span>
                    </p>
                </div>
                <a href="" class="services_more">Узнать больше</a>
            </div>
            <div class="serv-custom-item">

                <h2 class="section_title">
                    Логотипы <br>
                    и фирменный стиль
                </h2>
                <div class="section_desc">
                    <p>
                        <span>Разработка уникального логотипа и
                            корпоративного фирменного стиля, создание брендбука
                            (гайдлайна) для повышения уровня компании и грамотной стандартизации.
                            Повышаем узнаваемость, доверие, формируем платформу бренда.</span>
                    </p>
                </div>
                <a href="" class="services_more">Узнать больше</a>
            </div>
            <div class="serv-custom-item">

                <h2 class="section_title">
                    Логотипы <br>
                    и фирменный стиль
                </h2>
                <div class="section_desc">
                    <p>
                        <span>Разработка уникального логотипа и
                            корпоративного фирменного стиля, создание брендбука
                            (гайдлайна) для повышения уровня компании и грамотной стандартизации.
                            Повышаем узнаваемость, доверие, формируем платформу бренда.</span>
                    </p>
                </div>
                <a href="" class="services_more">Узнать больше</a>
            </div>
            <div class="serv-custom-item">

                <h2 class="section_title">
                    не логотипы <br>
                    и фирменный стиль
                </h2>
                <div class="section_desc">
                    <p>
                        <span>Разработка уникального логотипа и
                            корпоративного фирменного стиля, создание брендбука
                            (гайдлайна) для повышения уровня компании и грамотной стандартизации.
                            Повышаем узнаваемость, доверие, формируем платформу бренда.</span>
                    </p>
                </div>
                <a href="" class="services_more">Узнать больше</a>
            </div>
            <div class="serv-custom-item">

                <h2 class="section_title">
                    Логотипы <br>
                    и не фирменный стиль
                </h2>
                <div class="section_desc">
                    <p>
                        <span>Разработка уникального логотипа и
                            корпоративного фирменного стиля, создание брендбука
                            (гайдлайна) для повышения уровня компании и грамотной стандартизации.
                            Повышаем узнаваемость, доверие, формируем платформу бренда.</span>
                    </p>
                </div>
                <a href="" class="services_more">Узнать больше</a>
            </div>
        </div>
        <div class=" small-container">
            <ul class="services_dots">
                <li>
                    <button class="services-dot"><span>Логотипы <br> и фирменный стиль</span></button>
                </li>
                <li>
                    <button class="services-dot"><span>Не логотипы <br> и фирменный стиль</span></button>
                </li>
                <li>
                    <button class="services-dot"><span>Логотипы <br> и не фирменный стиль</span></button>
                </li>
                <li>
                    <button class="services-dot"><span>не Логотипы <br> и не стиль</span></button>
                </li>
                <li>
                    <button class="services-dot"><span>нет <br> и нет стиль</span></button>
                </li>
                <li>
                    <button class="services-dot"><span>стиль <br> и стиль</span></button>
                </li>
                <li>
                    <button class="services-dot"><span>Логотипы << /button>
                </li>
                <li>
                    <button class="services-dot"><span>Логотипы <br> и фирменный стиль</span></button>
                </li>
                <li>
                    <button class="services-dot"><span>Логотипы <br> и фирменный стиль</span></button>
                </li>
                <li>
                    <button class="services-dot"><span>Логотипы <br> и фирменный стиль</span></button>
                </li>

            </ul>
            <div class="services_buttons">
                <a href="" class="btn first no-line"><span>Смотреть все услуги</span></a>
            </div>
        </div>


    </div>
    <div class="services_content desktop-none">
        <div class="services_title text-center">Мы разбираемся в:</div>
        <div class="services-mobile-slider">
            <div class="serv-mobile-item d-flex flex-column justify-content-between">
                <div>
                    <p class="serv-mobile-p">Логотипы и фирменый стиль</p>
                    <div class="section_desc">
                        <p>
                            <span>Разработка уникального логотипа и
                                корпоративного фирменного стиля, создание брендбука
                                (гайдлайна) для повышения уровня компании и грамотной стандартизации.
                                Повышаем узнаваемость, доверие, формируем платформу бренда.</span>
                        </p>
                    </div>
                </div>
                <a href="" class="services_more serv-mobile-a no-line align-self-end">Узнать больше</a>
            </div>
            <div class="serv-mobile-item d-flex flex-column justify-content-between">
                <div>
                    <p class="serv-mobile-p">Логотипы и фирменый стиль</p>
                    <div class="section_desc">
                        <p>
                            <span>Разработка уникального логотипа и
                                корпоративного фирменного стиля, создание брендбука
                                (гайдлайна) для повышения уровня компании и грамотной стандартизации.
                                Повышаем узнаваемость, доверие, формируем платформу бренда.</span>
                        </p>
                    </div>
                </div>
                <a href="" class="services_more serv-mobile-a no-line align-self-end">Узнать больше</a>
            </div>
            <div class="serv-mobile-item d-flex flex-column justify-content-between">
                <div>
                    <p class="serv-mobile-p">Логотипы и фирменый стиль</p>
                    <div class="section_desc">
                        <p>
                            <span>Разработка уникального логотипа и
                                корпоративного фирменного стиля, создание брендбука
                                (гайдлайна) для повышения уровня компании и грамотной стандартизации.
                                Повышаем узнаваемость, доверие, формируем платформу бренда.</span>
                        </p>
                    </div>
                </div>
                <a href="" class="services_more serv-mobile-a no-line align-self-end">Узнать больше</a>
            </div>
            <div class="serv-mobile-item d-flex flex-column justify-content-between">
                <div>
                    <p class="serv-mobile-p">Логотипы и фирменый стиль</p>
                    <div class="section_desc">
                        <p>
                            <span>Разработка уникального логотипа и
                                корпоративного фирменного стиля, создание брендбука
                                (гайдлайна) для повышения уровня компании и грамотной стандартизации.
                                Повышаем узнаваемость, доверие, формируем платформу бренда.</span>
                        </p>
                    </div>
                </div>
                <a href="" class="services_more serv-mobile-a no-line align-self-end">Узнать больше</a>
            </div>
        </div>
        <div class=" dots-container d-flex justify-content-between align-items-center">
           <div class="serv-mobile-dots">
            
           </div>
           <div class="serv-mobile-dots">

           </div>
           <div class="serv-mobile-dots">

           </div>
           <div class="serv-mobile-dots">

           </div>
           <div class="serv-mobile-dots">

           </div>
           <div class="serv-mobile-dots">

           </div>
           <div class="serv-mobile-dots">

           </div>
        </div>
        <div class="services_buttons">
            <a href="" class="btn first no-line m-auto"><span>Смотреть все услуги</span></a>
        </div>
    </div>

@endsection
@section('content')
    <style>
        .followed-element {
            position: relative;
            transform: scale(1);
            /* Добавляем позицию "relative" для корректной работы transform */
            width: 100%;
            /* Задаем ширину по вашему желанию */
            height: 100%;
            /* Задаем высоту по вашему желанию */
            /* overflow: hidden; */
            /* Скрываем все, что выходит за пределы блока */
            transition: transform 1s ease;
        }

        .image-container {
            /* Стили для контейнера изображения */
            transform: scale(1);
            overflow: hidden;
            transition: transform 0.3s ease;
            /* Добавляем анимацию при увеличении */
        }
    </style>




    <div class="feedback-section">
        <h2 class="section_title">
            Предложите свой проект <br>
            настоящим специалистам <br>
            дизайна, кода и оптимизации
        </h2>
        <div class="section_desc">
            <p>Начните общение со Слава Україні! або Паляниця — докажить що не
                клятий москаль, та отримуйте смаколик у вигляді знижки 10%. <br>
                Якщо ви зараз почали бізнес в Україні — пишить, домовимось
                про бюджет який вам будет у допомогу! Ми не зламні!</p>
        </div>
        <div class="feedback_form" style="margin: 0 !important">
            <form action="{{ route('send.email', ['lang' => $lang]) }}" method="post">
                @csrf
                <label class="field">
                    <input type="text" name="name" class="field-input w-100"
                        placeholder="Ваше Имя (или любимый никнейм)">
                </label>
                <label class="field">
                    <input type="text" name="phone" class="field-input w-100" placeholder="“Ваш” номер телефона">
                </label>
                <label class="field">
                    <input type="text" name="project" class="field-input w-100" placeholder="Что за проект?">
                </label>
                <label class="field">
                    <input type="email" name="email" class="field-input w-100" placeholder="“Ваш” email">
                </label>
                <label class="field_comment" style="margin: 5rem 0 !important">
                    <input type="text" name="message" class="field-input w-100"
                        placeholder="“Ваш” комментарий или описание">
                </label>
                <button type="sumbit" class="btn send-p d-flex align-items-center text-white"
                    style="">Отправить</button>
            </form>
        </div>
    </div>
    <div class="about_company">
        <div class="small-container">
            <div class="large-text-wrap" style="position: relative">
                <div class="side-text-wrapper" data-side-text
                    style="transform: translate(0%, -22.0837%) translate3d(0px, 0px, 0px);">
                    Лучшие <br> в своём деле
                </div>
            </div>
            <div class="about_company_left">
                <div class="shortDesc">
                    <h2 class="about_company_title" data-separate-word style>
                        <div class="title_back" id="h2">


                        </div>
                        <span class="word">Больше, чем просто <br> </span>
                        <div class="title_back" id="h3">


                        </div>
                        <span class="word">Веб студия в Ашхабаде</span>
                    </h2>
                    <div class="about_company_desc">
                        <p>
                            Создаем «детали и инструменты», которые двигают ваш
                            бизнес вперед. Прорабатывая каждую идею, мы расширяем
                            ее ценности и философию, создаем важные решения, которые
                            помогают бизнесу достигать необходимого роста.
                        </p>
                        <p>Наша дизайн-студия ставит «эффективность» на первое место,
                            и несмотря на всю прагматичность бизнеса, находим множество
                            креативных идей для реализации решений, которые способны связать
                            вас с вашей аудиторией на долгие годы вперед. </p>
                    </div>
                </div>
            </div>
            <div class="about_company_right">
                <div class="right_desc">

                    <div class="scroll_content" style="padding-right: 20px; margin-bottom: -20px;">
                        <div class="scroll_desc" style="padding-bottom: 20px;">
                            <p>Консалтинговая компания "Arassa Nusga" была основана в 2017 году в составе Lotta Business
                                group.
                                Девиз нашей компании: "Качество.Инновации.Решения". Наша команда состоит из специалистов из
                                разных областей.
                                Мы предлагаем широкий спектр профессиональных консалтинговых услуг, которые помогут улучшить
                                качество Вашей работы,
                                поднять уровень осведомленности работников, решить актуальные бизнес-вопросы и увеличить
                                прибыль компании.
                                Консультируемым компаниям предоставлем всегда больше, чем от нас ожидают, а их успех
                                является нашей репутацией.
                            </p>
                            <p>Основная ценность — это сотрудники, развивающие общество вокруг себя к лучшему. </p>

                            <p> Компанию "Arassa Nusga" объединяет стремление к новым знаниям и навыкам в сфере
                                профессиональной деятельности.
                                Мы воплощаем свои идеи, преодолевая границы привычного, понимая, что идеи могут стать новой
                                возможностью для всей
                                компании, потому не боимся изменений в привычной для нас практике. Мы высоко ценим
                                сотрудников, которые стремятся
                                к профессиональному и личностному саморазвитию, делятся знаниями с коллегами, действуют во
                                благо интересов своей
                                компании. Мы считаем, что КОМАНДА — это намного больше, чем просто несколько людей.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.image-container');

        slides.forEach((slide) => {
            // Добавляем обработчик для события наведения мыши
            slide.addEventListener('mouseenter', () => {
                // Увеличиваем слайд после наведения мыши
                slide.style.transform = 'scale(1.2)';
            });

            slide.addEventListener('mouseleave', () => {
                // Возвращаем слайд в исходное состояние при уходе курсора
                slide.style.transform = 'scale(1)';
            });

            slide.addEventListener('mousemove', (e) => {
                const {
                    offsetX,
                    offsetY
                } = e;
                const {
                    clientWidth,
                    clientHeight
                } = slide;

                // Проверяем, находится ли курсор внутри слайда
                if (offsetX >= 0 && offsetX <= clientWidth && offsetY >= 0 && offsetY <= clientHeight) {
                    // Если курсор внутри слайда, то двигаем слайд за курсором
                    const x = (offsetX - clientWidth / 2) / 5; // Для плавности можно изменять делитель
                    const y = (offsetY - clientHeight / 2) / 5;
                    slide.style.transform = `translate(${x}px, ${y}px) scale(1.2)`;
                }
            });
        });
    </script>
@endsection
