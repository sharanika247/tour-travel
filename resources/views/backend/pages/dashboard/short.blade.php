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
   <!-- <link href="{{url('backend/pignose.css')}}" rel="stylesheet">
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
                <div class="row">
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
                </div>
                <!-- /# row -->
                <section id="main-content">
                   
                <div class="row justify-content-center">
    <div class="col-lg-10">
    <div class="card">
                                <div class="card-title">
                                   <div class="d-flex justify-content-between">
                                   <h4>Package List
                                                                           <span class="text-primary"> 16</span>
                                                                      
                                </h4>
                                   <a href="http://127.0.0.1:8000/dashboard/users/create" class="btn btn-primary"> <i class="ti-plus"></i> Add new place</a>
                                   </div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#ID</th>
                                                    <th>Place Name</th>
                                                    <th>Place Details</th>
                                                    <th>Package Date</th>
                                                    <th>status</th>
                                                    <th p style="text-align: left">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                <tr>
                                                <th>1</th>
                                                    <th>Lalbag Fort</th>
                                                    <th>Lalbag Fort or Aurangabad is another most famous historical place in Bangladesh. It is situated beside the Buriganga River, in the southwestern part of Dhaka, Bangladesh. It was built by Mudmhammad Azam in 1678. Lalbag Fort represents the incomplete dream of the Mughal prince. The fort remained incomplete after the death of Prince Azam.</th>
                                                    <th>29 - Oct - Sun || 02 - Nov - Tue</th>
                                                    <th>active</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>2</th>
                                                    <th>Star Mosque</th>
                                                    <th>It is a famous tourist attraction in old Dhaka. The mosque is fully decorated with a mosaic. People also use this mosque for regular praying. Non-muslims are also invited to this mosque outside of prayer time. It was designed by Mughal style and the motifs of stars are the main cause to call this mosque “Star Mosque”.</th>
                                                    <th>29 - Oct - Sun || 02 - Nov - Tue</th>
                                                    <th>active</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>3</th>
                                                    <th>Ahsan Manzil</th>
                                                    <th>Ahsan Manzil or the Pink Palace, the most meaningful architectural heritage, was built by Nawab Abdul Gani in 1872. This two-story building is now a museum displaying all kinds of objects of the owner of that time. So you can feel the lifestyle of the Nawabs of Bengal. It has 23 galleries displaying historical things.</th>
                                                    <th>29 - Oct - Sun || 02 - Nov - Tue</th>
                                                    <th>active</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>4</th>
                                                    <th>Mainamati</th>
                                                    <th>Mainamati is the finest archeological structure of the Comilla district which is mainly a ‘ War Cemetery’ surrounded by historical ruins and the main attractions of the place are- Shalban Bihar, Mainamati Museum, Lalmai Hill Ranges, Old Capital Sonargaon & Panama Nagar, so, I think you should visit this place with your family & friends.</th>
                                                    <th>29 - Oct - Sun || 02 - Nov - Tue</th>
                                                    <th>active</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>5</th>
                                                    <th>Sonargaon</th>
                                                    <th>Sonargaon, known as the oldest capital of Bangladesh, is home to some of the old buildings. This place can attract you by its spanless beauty and by the relics of ancient Bengal. By visiting the Sonargaon Museum you can see things people used to use in their everyday life like furniture, ornaments, arms, boats, musical instruments, and many other things related to the heritage of Bengal.</th>
                                                    <th>29 - Oct - Sun || 02 - Nov - Tue</th>
                                                    <th>active</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th>
                                                </tr>
                                                                                            </tbody>
                                            
                                        </table>
                                        <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/dashboard/users?page=2">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/dashboard/users?page=3">3</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/dashboard/users?page=4">4</a></li>
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="http://127.0.0.1:8000/dashboard/users?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
                    </ul>
    </nav>

                                    </div>
                                </div>
                            </div> 
    </div>
</div>         

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
    <!--<script src="{{url('backend/sidebar.js')}}"></script>
    <script src="{{url('backend/pace.min.js')}}"></script>
    <!-- sidebar -->

   <!-- <script src="{{url('backend/bootstrap.min.js')}}"></script>
    <script src="{{url('backend/script.js')}}"></script>
    <!-- bootstrap -->

    <!--<script src="{{url('backend/moment-latest.min.js')}}"></script>
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

                    