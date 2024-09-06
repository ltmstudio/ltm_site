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
<script>
    $(window).on('load',function(){
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
//                 $('.grid_portfolio').append('<a href="/{{$lang}}/portfolio/'+p['id']+'" class="grid-item no-line"> <div class="columnPort"> <img src="/storage/'+p['photo']+'" alt="Image"> <div class="gridText"> <div class="subtitle">'+p['what']+'</div> <div class="rowPort"> <div class="line"></div> <div class="gridTitle">'+p['title_'+ '{{$lang}}']+'</div> </div> </div> </a>');
//             });
//             $('#loadMoreButton').prop('disabled', false).addClass('relaod'); 
//         }
//     });
// });

    // Ajax portfolio
    $('.element').click(function(){
        var categoryName = $(this).find('p').data('category-name');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                url: '/en/ajax-portfolio',
                method: 'post',
                dataType: 'json',
                data: {category: categoryName}, //$(this).text()
                success: function(data){
                    $('.grid_portfolio').html("");
                    data.forEach(p => {
                        $('.grid_portfolio').append('<a href="/{{$lang}}/portfolio/'+p['id']+'" class="grid-item no-line"> <div class="columnPort"> <img src="/storage/'+p['photo']+'" alt="Image"> <div class="gridText"> <div class="subtitle">'+p['what']+'</div> <div class="rowPort"> <div class="line"></div> <div class="gridTitle">'+p["title_{{$lang}}"]+'</div> </div> </div> </div> </a>');
                   
                    });
    $('#loadMoreButton').prop('disabled', false).addClass('relaod'); 
                }
            });
        });


           // Ajax Blog
    $('.element-blog').click(function(){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                url: '/en/ajax-blog',
                method: 'post',
                dataType: 'json',
                data: {category_blog: $(this).text()},
                success: function(data){
                    $('.grid_blog').html("");
                    data.forEach(i => {
         var additionalClass = (i['id'] % 2 == 0 && i['id'] != 2) ? 'add-margin-blog' : '';
         var html = '<a href="/{{$lang}}/blog/' + i['id'] + '" class="grid-item ' + additionalClass + ' no-line">' +
                   '   <div class="block">' +
                   '       <div class="row_blog">' +
                   '           <h2 class="subtBlog">' + i['what'] + '</h2>' +
                   '           <h1 class="titleBlog">' + i["title_{{$lang}}"] + '</h1>' +
                   '           <div class="body-text">' + i["desc_{{$lang}}"] + '</div>' +
                   '       </div>' +
                   '       <div class="arrow d-flex align-items-center justify-content-center">' +
                   '           <i class="fa-solid fa-arrow-right-long" style="color:white; font-size:40px;"></i>' +
                   '       </div>' +
                   '   </div>' +
                   '</a>';

        $('.grid_blog').append(html);
        cleanAndTruncateText('.body-text', 400); // Adjust 150 to your desired max length
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
            console.log((6*(currentPage)));
            console.log(selectedType);
          }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
            url: '/en/load-more/'+(6*(currentPage))+'/'+selectedType,
            method: 'post',
            dataType: 'json',
               success: function(data) {
   var loadEndTime = new Date().getTime() + 2300; // 15 seconds for full rotation
var checkCompletion = function() {
    var currentTime = new Date().getTime();
    if (currentTime >= loadEndTime) {
        $('.reload-icon').removeClass('loading');  // Remove the loading animation
        if(data.length > 0) {
            console.log(data);
                    data.forEach(p => {
                        $('.grid_portfolio').append('<a href="/{{$lang}}/portfolio/'+p['id']+'" class="grid-item no-line"> <div class="columnPort"> <img src="/storage/'+p['photo']+'" alt="Image"> <div class="gridText"> <div class="subtitle">'+p['what']+'</div> <div class="rowPort"> <div class="line"></div> <div class="gridTitle">'+p["title_{{$lang}}"]+'</div> </div> </div> </div> </a>');
                    });
        //             data.forEach(i => {
        //  var additionalClass = (i['id'] % 2 == 0 && i['id'] != 2) ? 'add-margin-blog' : '';
        //  var html = '<a href="/{{$lang}}/blog/' + i['id'] + '" class="grid-item ' + additionalClass + ' no-line">' +
        //            '   <div class="block">' +
        //            '       <div class="row_blog">' +
        //            '           <h2 class="subtBlog">' + i['what'] + '</h2>' +
        //            '           <h1 class="titleBlog">' + i["title_{{$lang}}"] + '</h1>' +
        //            '           <div class="body-text truncate">' + i["desc_{{$lang}}"] + '</div>' +
        //            '       </div>' +
        //            '       <div class="arrow d-flex align-items-center justify-content-center">' +
        //            '           <i class="fa-solid fa-arrow-right-long" style="color:white; font-size:40px;"></i>' +
        //            '       </div>' +
        //            '   </div>' +
        //            '</a>';

        // $('.grid_blog').append(html);
        //  });
        cleanAndTruncateText('.body-text', 400); // Adjust 150 to your desired max lengths
                }
                else 
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
