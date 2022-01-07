<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @section('title')
    @show
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body class="h-100">
<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="logo" style="text-align: center">
                                <a href="{{route('landing')}}">
                                    <img  src="{{asset('images/teams.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        @section('content')
                        @show
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('vendor/global/global.min.js')}}"></script>
<script src="{{asset('js/quixnav-init.js')}}"></script>
<script src="{{asset('js/custom.min.js')}}"></script>
</body>
</html>
