@extends ('layouts.base')

@section('title', 'Project Details')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>

<div class="container">
    <div class="title">{{$portfolio['title_'.$lang]}}</div>
    
    <div class="ratings">
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
    </div>
        <hr>
        @if($portfolio['photo'] != "")
         <img src="{{asset('storage/'.$portfolio['photo'])}}" alt="Image" style="width: 300px !important; height: 200px !important;">
         @else
        <img src="{{asset('assets/images/proformat.png')}}" alt="Image">
        @endif
    {{-- <img src="{{asset('storage/'.$portfolio['photo'])}}" alt=""> --}}
    </div>
    <div class="project-details">
        <div class="project-details-col1">
            <p>Project Details</p>
          <a href="" class="no-line"> <div class="title">{{$portfolio['title_'.$lang]}}</div> </a>
            <button class="button-site custom-button ">Go to site</button>
            <div class="header-flex">
                <div class="item-q">
                    <p>Who?</p>
                    <div class="project-details-row-title">
                        {{$portfolio['who_'.$lang]}}
                    </div>
                </div>
                <div class="item-q">
                    <p>What?</p>
                    <div class="project-details-row-title">
                        {{$portfolio['what']}}
                    </div>
                </div>
                <div class="item-q">
                    <p>When?</p>
                    <div class="project-details-row-title">
                        {{$portfolio['when']}}
                    </div>
                </div>
            </div>
        </div>
        <div class="project-details-col2">
            <div class="col2-info">
                <div class="header-flex info-item">
                    <p>Customer:</p>
                    <div class="project-details-row-title">
                        {{$portfolio['customer']}}
                    </div>
                </div>
                <div class="header-flex info-item">
                    <p>Curator:</p>
                    <div class="project-details-row-title">
                        {{$portfolio['curator']}}
                    </div>
                </div>
                <div class="header-flex info-item">
                    <p>IT Solutions: </p>
                    <div class="project-details-row-title">
                        {{$portfolio['devNames']}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="project-details desc">
        <div class="desc-col1">
            <div class="desc-col1-item" id="desc">
                Description
            </div>
            <div class="desc-col1-item" id="tar">
                Target
            </div> 
            <div class="desc-col1-item" id="res">
                Result
            </div> 
        </div>
        <div class="desc-col2 project-details-row-title">
            <div class="description" id="description">
                {{$portfolio['desc_'.$lang]}}</div>
            <div class="target" id="target">
                {{$portfolio['target_'.$lang]}}</div>
            <div class="result" id="result">
                {{$portfolio['res_'.$lang]}}</div>
        </div>
    </div>
    <div class="what-done">
      <p>  What have we done </p>
    <div class="project-details-row-title">
     {!!$portfolio['what_was_done_'.$lang] !!}
    </div>
    @if(count($images_add)!=0)
        <div class="gallery slider-container">
            <div class="slider">
      @foreach ($images_add as $i)
        <img src="{{asset('storage/'.$i['image_portf'])}}">
      @endforeach
    </div>
    @endif
    
    </div>
</div>
<script src="{{ asset('assets/js/jquery.js') }}"></script>

{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                centerMode: true, // Enable center mode
                centerPadding: '0',
                slidesToShow: 3, // Display 3 items at a time
                focusOnSelect: true,
                variableWidth: true, // Adjust the width of items
            });
        });
    </script>
s
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Initialize the currentTextId with the default text ID
    var currentTextId = "description";
    // Add click event listeners to buttons
    document.getElementById("desc").addEventListener("click", function() {
        // Show or replace text
        showOrReplaceText("description");
    });

    document.getElementById("tar").addEventListener("click", function() {
        // Show or replace text
        showOrReplaceText("target");
    });

    document.getElementById("res").addEventListener("click", function() {
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