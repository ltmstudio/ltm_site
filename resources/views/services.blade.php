@extends('layouts.base')

@section('title', 'Services')

@section('content')
    <div class="container">
        <div class="servicesPage">
            <div class="servicesIntro">
                <!-- <div class="circle">  <img src="radialCircle.png" width="707"></div> -->
                <div class="leftHeaderTop">
                    <p>{{__('translate.mainPage')}}</p>
                    <p>{{__('translate.services')}}</p>
                </div>
                <div class="pre_title">{{__('translate.pre_title')}}</div>
                <div class="h"></div>

                <div class="column left">
{{--                    <p>{!! nl2br(__('translations.title')) !!}</p>--}}

                    <div class="title"> {!! nl2br(__('translate.title')) !!} </div>
{{--                    <div class="title"> {{__('translate.title')}} </div>--}}

                    <div class="subt">
                        <div class="p1">{{__('translate.p1')}}</div>
                        <div class="p1">{{__('translate.p1_2')}} <span style="color:#1478E8; font-weight: 600;">{{__('translate.p1_2_custom')}} </span>
                            {{__('translate.p1_2_cont')}}</div>
                    </div>
                </div>
                <div class="column right">
                    <div> Пришел, пошуршал, <br> заявку отослал </div>

                    <img src="{{'../assets/images/image.png'}}"  >
                </div>
            </div>
            <!-- <div class="container"> -->
            <div class="advertise">{{__('translate.advert')}}<span style="color:#1478E8; font-weight: 600;"> {{__('translate.advert_custom')}}</span>{{__('translate.advert_cont')}}</div>
            <div class="gridCon">
                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/iso.png'}}" width="57">
                        <p>Внедрение ISO стандартов <hr></p>
                        <div><strong>Создание логотипа для любого типа
                                бизнеса: </strong> для логистики или супер крутого и
                            концептуального ресторана, архитектора
                            или застройщика.</div> </div>
                </div>

                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/iso.png'}}" width="57">
                        <p>Автоматизация <hr></p>
                        <div>Разработка вашего индивидуального
                            образа и стиля в деловой бизнес-среде</div> </div>
                </div>

                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/iso.png'}}" width="57">
                        <p>Организационная диагностика <hr></p>
                        <div>  Комплексно разрабатываем “Лицо и
                            авторитетность” для вашей компании,
                            упаковывая ее визуально
                            профессионалами своего дела</div> </div>
                </div>

                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/iso.png'}}" width="57">
                        <p>Управление продажами <hr></p>
                        <div>Создание и оформление стандартов
                            брендирования для соблюдения
                            целостности и индивидуальности</div> </div>
                </div>

                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/iso.png'}}" width="57">
                        <p>Разработка сайтов <hr></p>
                        <div>Ведение и поддержка соцсетей (Instagram,
                            Facebook), раскрутка в соцсетях, запуск
                            рекламы на соц площадках</div> </div>
                </div>

                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/iso.png'}}" width="57">
                        <p>Мобильные приложения <hr></p>
                        <div>Запуск таргетированной рекламы под
                            конкретно вашего покупателя</div> </div>
                </div>

                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/iso.png'}}"width="57">
                        <p>Logo ERP <hr></p>
                        <div>Концепции и креатив, который сближает
                            вас с вашим клиентом</div> </div>
                </div>

                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/diagnostic.png'}}" width="57">
                        <p>Akinsoft <hr></p>
                        <div>Комплексная услуга для обновления
                            текущего бренда</div> </div>
                </div>

                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/diagnostic.png'}}" width="57">
                        <p>Bitrix24 <hr></p>
                        <div>Дизайн «визитной карты» любого
                            заведения</div> </div>
                </div>


                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/iso.png'}}" width="57">
                        <p>Антивирусы <hr></p>
                        <div>Создаем концепции ритейл бизнеса и
                            отлично брендируем, стандартизируя
                            гайдланы</div> </div>
                </div>


                <div class="gridItem">
                    <div class="rows-3">
                        <img src="{{'../assets/images/diagnostic.png'}}" width="57">
                        <p>Дизайн интерфейсов и
                            приложений <hr></p>
                        <div>Разработка и проектирование приложений,
                            интранетов, админок для внутренних
                            систем</div> </div>
                </div>
            </div>

            <div class="emoji">
                <!-- <img src="radialCircle.png" width="707px" style="z-index: 1;"> -->
                <p> {{__('translate.emoji')}}</p>
                <div class="emojis"> &#129310; &#128406; &#9996;</div> </div>

            <div class="servicesBody">
                <div class="title">
                    {{__('translate.qualityTitle')}} </div>
                <div class="sub">{{__('translate.qualitySub')}}</div>
                <ul>
                    <li>
                        <div  class="item-1">{{__('translate.q1_title')}} </div>
                        <div class="item-2">{{__('translate.q1_sub')}}</div>
                    </li>
                    <li>
                        <div  class="item-1">{{__('translate.q2_title')}}</div>
                        <div  class="item-2">{{__('translate.q2_sub')}}</div>
                    </li>
                    <li>
                        <div  class="item-1">{{__('translate.q3_title')}}</div>
                        <div  class="item-2">{{__('translate.q3_sub')}}</div>
                    </li>
                    <li>
                        <div  class="item-1">{{__('translate.q4_title')}}</div>
                        <div  class="item-2">{{__('translate.q4_sub')}}</div>
                    </li>
                    <li>
                        <div  class="item-1">{{__('translate.q5_title')}} </div>
                        <div  class="item-2">{{__('translate.q5_sub')}}</div>
                    </li>
                    <li>
                        <div class="item-1">{{__('translate.q6_title')}}</div>
                        <div class="item-2">{{__('translate.q6_sub')}}</div>
                    </li>
                    <li>
                        <div  class="item-1">{{__('translate.q7_title')}}</div>
                        <div  class="item-2">{{__('translate.q7_sub')}}</div>
                    </li>
                </ul>
            </div>
            <!-- <div class="sp"></div> -->
            <div class="servicesQuestions">
                <p>
                    <strong>{{__('translate.questionTitle')}}</strong>
                    <br> {{__('translate.questionSub')}}
                    <strong> <span style="color:#1478E8;"> {{__('translate.questionSubCustom')}} </span></strong></p>
                <p>{!! nl2br(__('translate.call')) !!}
                <strong><span style="color:#1478E8;"> {{__('translate.mail')}} </span> </strong> </p>
</div>
</div>
<div class="servicesFooter">
<div class="title">{!! nl2br(__('translate.footerTitle')) !!}</div>
<p>{!! nl2br(__('translate.footerSub')) !!}</p>
<p><strong>{{__('translate.footerSubStrong')}}</strong></p>
</div>
</div>
@endsection
