<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tour&Travel Management System</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <!--<link href="{{url('backend/pignose.css')}}" rel="stylesheet">
    <link href="{{url('backend/chartist.css')}}" rel="stylesheet">
    <link href="{{url('backend/font-awesome.css')}}" rel="stylesheet">
    <link href="{{url('backend/themify-icons.css')}}" rel="stylesheet">
    <link href="{{url('backend/owl-carousel.css')}}" rel="stylesheet" />
    <link href="{{url('backend/owl.theme.default.css')}}" rel="stylesheet" />
    <link href="{{url('backend/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{url('backend/sidebar.css')}}" rel="stylesheet">
    <link href="{{url('backend/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('backend/helper.css')}}" rel="stylesheet">
    <link href="{{url('backend/style.css')}}" rel="stylesheet"> -->

    <link href="{{asset('admin')}}/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/themify-icons.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/lib/helper.css" rel="stylesheet">
    <link href="{{asset('admin')}}/css/style.css" rel="stylesheet">   

</head>

<body>

    @include('backend.components.sidebar')
    <!-- /# sidebar -->

    @include('backend.components.header')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                {{-- title start --}}

                {{-- <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div> --}}
                
                {{-- title end --}}
                <!-- /# row -->
                <section id="main-content">
                    {{-- main body --}}
                    @yield('main')
                    {{--  main body end --}}

                    {{-- footer start --}}
                    @include('backend.components.footer')
                    {{-- footer end --}}
                </section>
            </div>
        </div>
    </div>
    
    <!-- jquery vendor -->
    <script src="{{asset('admin')}}/js/lib/jquery.min.js"></script>
    <script src="{{asset('admin')}}/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="{{asset('admin')}}/js/lib/menubar/sidebar.js"></script>
    <script src="{{asset('admin')}}/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="{{asset('admin')}}/js/lib/bootstrap.min.js"></script>
    <script src="{{asset('admin')}}/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="{{asset('admin')}}/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="{{asset('admin')}}/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="{{asset('admin')}}/js/lib/calendar-2/pignose.init.js"></script>


    <script src="{{asset('admin')}}js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="{{asset('admin')}}js/lib/weather/weather-init.js"></script>
    <script src="{{asset('admin')}}js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('admin')}}js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="{{asset('admin')}}js/lib/chartist/chartist.min.js"></script>
    <script src="{{asset('admin')}}js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="{{asset('admin')}}js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="{{asset('admin')}}js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{asset('admin')}}js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="{{asset('admin')}}js/dashboard2.js"></script>

    <!-- jquery vendor -->
    <!--<script src="{{url('backend/jquery.js')}}"></script>
    <script src="{{url('backend/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
   <!-- <script src="{{url('backend/sidebar.js')}}"></script>
    <script src="{{url('backend/pace.min.js')}}"></script>
    <!-- sidebar -->

   <!-- <script src="{{url('backend/bootstrap.min.js')}}"></script>
    <script src="{{url('backend/script.js')}}"></script>
    <!-- bootstrap -->

   <!-- <script src="{{url('backend/moment-latest.min.js')}}"></script>
    <script src="{{url('backend/pignose.calendar.min.js')}}"></script>
    <script src="{{url('backend/pignose.init.js')}}"></script>


    <script src="{{url('backend/simpleWeather.min.js')}}"></script>
    <script src="{{url('backend/weather-init.js')}}"></script>
    <script src="{{url('backend/circle-progress.min.js')}}"></script>
    <script src="{{url('backend/circle-progress-init.js')}}"></script>
    <script src="{{url('backend/chartist.min.js')}}"></script>
    <script src="{{url('backend/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('backend/sparkline.init.js')}}"></script>
    <script src="{{url('backend/owl.carousel.min.js')}}"></script>
    <script src="{{url('backend/owl.carousel-init.js')}}"></script>
    <!-- scripit init--> -->

</body>

</html>
