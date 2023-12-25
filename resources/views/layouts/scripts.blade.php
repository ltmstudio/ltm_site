<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- {{-- <script src="https://cdn.tiny.cloud/1/74xvt7uwri2in2n4ude1gp7rdh9vo0x0g7bmyeenswgocc6o/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
{{-- <script src="{{ asset('assets/js/addEditorTinymce.js')}}"></script> --}} -->
<script src="{{ asset('assets/js/typingHeader.js') }}"></script>
<script src="{{ asset('assets/js/editors.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('assets/js/uploadImages.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/customSlick.js') }}"></script>
{{-- <script src="{{ asset('assets/js/scroll.js') }}"></script> --}}
<script src="{{ asset('assets/js/scroll2.js') }}"></script>
<script src="{{ asset('assets/js/cursor.js') }}"></script>
<script src="{{ asset('assets/js/cursor_test.js    ') }}"></script>
<script src="{{ asset('assets/js/followedCursor.js') }}"></script>
<script src="{{ asset('assets/js/modalFooter.js') }}"></script>
<script src="{{ asset('assets/js/blurPortfolio.js') }}"></script>




<script>
    // Ajax portfolio
//     $(document).ready(function(){
//     // Simulate click on the first element with class "element" when the page loads
//     $('.element:first').click();
// });


    $('.element').click(function(){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                url: '/en/ajax-portfolio',
                method: 'post',
                dataType: 'json',
                data: {tawus: $(this).text()},
                success: function(data){
                    $('.grid_portfolio').html("");
                    data.forEach(p => {
                        $('.grid_portfolio').append('<a href="/{{$lang}}/portfolio/'+p['id']+'" class="grid-item no-line"> <div class="columnPort"> <img src="/storage/'+p['photo']+'" alt="Image"> <div class="gridText"> <div class="subtitle">'+p['what']+'</div> <div class="rowPort"> <div class="line"></div> <div class="gridTitle">'+p["title_{{$lang}}"]+'</div> </div> </div> </div> </a>');
                    });
                }
            });

        });

        

    const elements = document.querySelectorAll('.element');

    elements.forEach(element => {
        element.addEventListener('click', () => {
            elements.forEach(el => el.classList.remove('selected'));
            element.classList.add('selected');
        });
    });

    function openNav() {
        document.getElementById("sidebarPoints").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("sidebarPoints").style.width = "0";
    }

    $(document).ready(function(){
        // ------------
        // Loader
        // ------------
        
        $(window).on('load', function(){
            $('.loaders').hide(200);
        });
        
        // ------------

        // tm button
        $('#tm-btn').click(function(){
            // button active
            $('.nav-link').removeClass('active');
            $('#tm-btn>.nav-link').addClass('active');
            // Card show
            $('.info-cards').addClass('dnone');
            $('#tm-card').removeClass('dnone');
        });
        // ru button
        $('#ru-btn').click(function(){
            // button active
            $('.nav-link').removeClass('active');
            $('#ru-btn>.nav-link').addClass('active');
            // Card show
            $('.info-cards').addClass('dnone');
            $('#ru-card').removeClass('dnone');
        });
        // eng button
        $('#eng-btn').click(function(){
            // button active
            $('.nav-link').removeClass('active');
            $('#eng-btn>.nav-link').addClass('active');
            // Card show
            $('.info-cards').addClass('dnone');
            $('#eng-card').removeClass('dnone');
        });

        // Form submit
        $("form").submit(function(){
            $('.loading-page').removeClass('dnone');
        });

        // Editor
        $('.send').click(function(){
            let langus = ['tm', 'ru', 'en']
            for (let index = 0; index < langus.length; index++) {
                let content = $('.editor[edit="editor_'+langus[index]+'"]').html();
                $('.editor_'+langus[index]).val(content);
            }
            
        });

    });
    
    $(document).ready(function(){
        $('#loadMoreButton').click(function()
        {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                url: '/en/ajax-portfolio',
                method: 'post',
                dataType: 'json',
                data: {
    tawus: $(this).text(),
    // nextPage: $('#loadMoreButton').attr('data-next-page')
},

                // data: {tawus: $(this).text()},
                success: function(data){
                    // $('.grid_portfolio').html("");
                    data.forEach(p => {
                        $('.grid_portfolio').append('<a href="/{{$lang}}/portfolio/'+p['id']+'" class="grid-item no-line"> <div class="columnPort"> <img src="/storage/'+p['photo']+'" alt="Image"> <div class="gridText"> <div class="subtitle">'+p['what']+'</div> <div class="rowPort"> <div class="line"></div> <div class="gridTitle">'+p["title_{{$lang}}"]+'</div> </div> </div> </div> </a>');
                    });
                }
            });

        });
    });
</script>
