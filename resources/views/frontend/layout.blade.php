<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{config('global.project_name')}}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet">
    {{-- <link href="/js/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"> --}}
    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    {{ Html::style('stisla-master/assets/css/style.css') }}
    {{ Html::style('stisla-master/assets/css/components.css') }}
    {{-- {{ Html::style('css/font.css') }} --}}
    {{ Html::style('css/main.css') }}

    @yield('more-style')
</head>

<body>
    @include('frontend.include.header')
    @yield('body')
    @include('frontend.include.footer')

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    {{-- <script src="/js/fancybox/source/jquery.fancybox.js" type="text/javascript"></script> --}}
    {{ Html::script('stisla-master/assets/js/stisla.js') }}

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    {{ Html::script('stisla-master/assets/js/scripts.js') }}
    {{ Html::script('stisla-master/assets/js/custom.js') }}
    {{ Html::script('js/app.js') }}
    <script id="salesdesk-widget-script" src="https://api-salesdesk.readyplanet.com/js/salesdesk-widget-v2.min.js?business_id=6aff2496603639d45b9f965aea273b2a" type="text/javascript" charset="UTF-8"></script>
    <script>
        $( document ).ready(function() {
            var position = -1;
            var lastScrollTop = 0;
            $( window ).scroll(function() {
                var st = $(this).scrollTop();
                if (st > lastScrollTop && st >= 100){
                    if( !$('#navbar').hasClass('bg-color') ) {
                        $('#navbar').addClass('bg-color');
                    }
                } else {
                    // upscroll code
                    if(st<100){
                        if( $('#navbar').hasClass('bg-color') ) {
                            $('#navbar').removeClass('bg-color');
                        }
                    }else{
                    }
                }
                lastScrollTop = st;
                // $('#navbar').addClass('bg-color');
                // position = $(document).scrollTop()
                
                // clearTimeout($.data(this, 'scrollTimer'));
                // $.data(this, 'scrollTimer', setTimeout(function() {
                //     // do something
                //     console.log(position,$(document).scrollTop())
                //     if(position === $(document).scrollTop()){
                //         $('#navbar').removeClass('bg-color');
                //     }
                // }, 250));
            });
            $("#button-nav").click(function() {
                console.log('test')
                $(".hamburger").toggleClass("focus");
                $(".content").toggleClass("show");
            });
            $('#nav-content').click(function() {
                console.log('test')
                $(".hamburger").toggleClass("focus");
                $(".content").toggleClass("show");
            });
        })
        
    </script>
    @yield('more-script')

</body>
</html>
