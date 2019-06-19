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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link href="/js/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"> --}}
    <!-- CSS Libraries -->

    <!-- Template CSS -->
    {{ Html::style('stisla-master/assets/css/style.css') }}
    {{ Html::style('stisla-master/assets/css/components.css') }}
        <style>
            .input-group-addon {
                padding: 0.5rem 0.75rem;
                margin-bottom: 0;
                font-size: 1rem;
                font-weight: normal;
                line-height: 1.25;
                color: #464a4c;
                text-align: center;
                background-color: #eceeef;
                border: 1px solid rgba(0, 0, 0, 0.15);
                border-radius: 0.25rem;
            }
            .navbar-bg{
                height: 65px;
            }
            body{
                background-color: #ededed;
                font-size: 18px;
            }
            .section-body{
                background-color: white;
                padding: 20px;
            }
            .font-bold{
                font-weight: bold;
                color: black;
            }
            .no-padding{
                padding: 0px;
            }
            .no-margin{
                margin: 0px;
            }
            .form-inline{
                display: grid;
            }
            .select2-container{
                max-width: 100%;
            }

            .font-color-template{
                color: #17AF9F !important;
            }

            .btn-green-template{
                background-color: #17AF9F;
                border-color: #17AF9F;
                color: #fff;
            }

            .btn-green-template:hover{
                background-color: #17AF9F !important;
                border-color: #17AF9F;
                color: #fff;
            }

            .btn-green-template:focus{
                background-color: #17AF9F !important;
                border-color: #17AF9F;
                color: #fff;
            }
            .table thead tr th{
                text-align: center;
            }

            .pagination{
                justify-content:center;
            }


            /* #17AF9F */

            
        </style>
        @yield('more-style')

</head>

<body>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            
            @include('backend.include.header')
    
            @include('backend.include.sidebar')
    
            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            {{-- End Main --}}
            
            @include('backend.include.footer')
        </div>
    </div>

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
    <script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    {{ Html::script('stisla-master/assets/js/scripts.js') }}
    {{ Html::script('stisla-master/assets/js/custom.js') }}
    <script>

        $(".summernote-simple").each(function () {
            CKEDITOR.replace( $(this).attr("name") );
            // CKEDITOR.replace( $(this).attr("name"), {
            //     toolbarGroups: toolbarGroups

            // });
        });
        $('input[type="file"]').on("change", function(){ 
            readURL(this)
         });
         function readURL(input) {
            let show = $(input).data().show

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+show).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
       

       
    </script>
    @yield('more-script')

</body>
</html>
