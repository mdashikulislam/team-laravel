<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="{{route('landing')}}" class="brand-logo">
            <img class="logo-abbr" src="{{asset('images/teams.png')}}" alt="">
            <h3 class="m-0 ml-2 text-white">{{getenv('APP_NAME')}}</h3>
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">

                    </div>
                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="./app-profile.html" class="dropdown-item">
                                    <i class="icon-user"></i>
                                    <span class="ml-2">Profile </span>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    @include('frontend.layouts.menu')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                @section('content')
                @show
            </div>
        </div>
    </div>
</div>

<script src="{{asset('vendor/global/global.min.js')}}"></script>
<script src="{{asset('js/quixnav-init.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>


<!-- Vectormap -->
<script src="{{asset('vendor/raphael/raphael.min.js')}}"></script>
<script src="{{asset('vendor/morris/morris.min.js')}}"></script>


<script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>

<script src="{{asset('vendor/gaugeJS/dist/gauge.min.js')}}"></script>

<!--  flot-chart js -->
<script src="{{asset('vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.resize.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{asset('vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<!-- Counter Up -->
<script src="{{asset('vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
<script src="{{asset('vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


{{--<script src="js/dashboard/dashboard-1.js"></script>--}}

</body>

</html>
