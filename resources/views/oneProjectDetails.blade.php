@extends ('layouts.base')

@section('title', 'Project Details')

@section('content')
{{--
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
--}}

<div class="container">
    {{-- <div class="title">{{ $portfolio['title_' . $lang] }}</div> --}}

    <div class="ratings">
        {{--
        <hr>
        <div class="header-flex header-sub">
            <p>Ratings</p>
            <div class="stars">
                <span>☆</span>
                <span>☆</span>
                <span>☆</span>
                <span>☆</span>
                <span>☆</span>
            </div>
            {{ __('translate.dateAdded') }} {{ $portfolio['when'] }}
        </div>
        <hr> --}}
        @if ($portfolio['photo'] != '')
            <img src="{{ asset('storage/' . $portfolio['photo']) }}" alt="Image"
                style="width: 1110px !important; height: 740px !important;">
        @else
            <img src="{{ asset('assets/images/proformat.png') }}" alt="Image">
        @endif
        {{-- <img src="{{asset('storage/'.$portfolio['photo'])}}" alt=""> --}}
    </div>
    <div class="project-details">
        <div class="project-details-col1">
            <p>{{ __('translate.projectDetails') }}</p>
            <a href="#" class="no-line">
                <div class="one-proj title">{{ $portfolio['target_' . $lang] }}</div>
            </a>
            @if(isset($portfolio['urlButton']))
                <a href="{{ $portfolio['urlButton'] }}" class="no-line"> <button class="button-site custom-button"
                        onclick="">
                        {{__('translate.goToSite')}}
            </button> </a> @endif
            <div class="header-flex">
                <div class="item-q">
                    <p>{{ __('translate.who') }} </p>
                    <div class="project-details-row-title">
                        {{ $portfolio['who_' . $lang] }}
                    </div>
                </div>
                <div class="item-q">
                    <p>{{ __('translate.what') }}</p>
                    <div class="project-details-row-title">
                        @foreach($categories as $categoryGroup)
                            @foreach($categoryGroup as $category)
                                <div>
                                    {{ $category['category_' . $lang] }}
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    {{-- <div class="project-details-row-title">
                        {{ $portfolio['what'] }}
                    </div> --}}
                </div>
                <div class="item-q">
                    <p>{{ __('translate.when') }}</p>
                    <div class="project-details-row-title">
                        {{ $portfolio['when'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="what-done m60">
        <p> {{__("translate.picturesFromProject")}}</p>
        {{-- <div class="project-details-row-title">
            {!! $portfolio['what_was_done_' . $lang] !!}
        </div> --}}
        @if (count($images_add) != 0)
            {{-- <div class="gallery slider-container"> --}}
                <div class="slider_portf">
                    @foreach ($images_add as $i)
                        <div class="slider__portf"> <img src="{{ asset('storage/' . $i['image_portf']) }}"
                                style="width: 400px!important"> </div>
                    @endforeach
                </div>
        @endif
            {{--
        </div> --}}
    </div>
    <div class="result regular20" id="">
        {{ $portfolio['res_' . $lang] }}
    </div>
    <!-- <div class="project-details desc">
        <div class="desc-col1">
            {{-- <div class="desc-col1-item" id="desc">
                {{ __('translate.description') }}
            </div> --}}
            <div class="desc-col1-item" id="tar">
                {{ __('translate.target') }}
            </div>
            <div class="desc-col1-item" id="res">
                {{ __('translate.result') }}
            </div>
        </div>
        <div class="desc-col2 project-details-row-title">
            {{-- <div class="description" id="description">
                {{ $portfolio['desc_' . $lang] }}</div> --}}
            <div class="result" id="result">
                {{ $portfolio['res_' . $lang] }}
            </div>
        </div>
    </div> -->

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Without changing default buttons
            /*
            $('.container').slick({
              infinite: true,
              slidesToShow: 3,
              slidesToScroll: 3
            });
            */
            // With custom buttons
            var backButton = '<span class="slick-prev">&#129120</span>';
            var nextButton = '<span class="slick-next">&#129122</span>'
            $('.slider_portf').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: backButton,
                nextArrow: nextButton
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Initialize the currentTextId with the default text ID
            var currentTextId = "target";
            // Add click event listeners to buttons
            // document.getElementById("desc").addEventListener("click", function() {
            //     // Show or replace text
            //     showOrReplaceText("description");
            // });

            document.getElementById("tar").addEventListener("click", function () {
                // Show or replace text
                showOrReplaceText("target");
            });

            document.getElementById("res").addEventListener("click", function () {
                // Show or replace text
                showOrReplaceText("result");
            });

            // Function to show or replace text
            function showOrReplaceText(textId) {
                // Hide the current text
                var currentTextDiv = document.getElementById(currentTextId);
                if (currentTextDiv) {
                    currentTextDiv.style.display = 'none';
                }

                // Show the new text
                var newTextDiv = document.getElementById(textId);
                if (newTextDiv) {
                    newTextDiv.style.display = 'block';
                }

                // Update the currentTextId
                currentTextId = textId;
            }
        });
    </script>
    @endsection