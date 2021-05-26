<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/admin')}}/assets/img/favicon.ico">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin')}}/assets/css/bootstrap-datetimepicker.min.css">
    <script src="{{asset('/admin')}}/assets/js/html5shiv.min.js"></script>
    <script src="{{asset('/admin')}}/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">
    @include('doctor.includes.navber')
{{--    {{dd(Auth::user())}}--}}
    @if(auth()->user()->is_doctor == true)
    @include('doctor.includes.slidebar')
    @endif
    @yield('body')
</div>
<div class="sidebar-overlay" data-reff=""></div>
<script src="{{asset('/admin')}}/assets/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('/admin')}}/assets/js/popper.min.js"></script>
<script src="{{asset('/admin')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('/admin')}}/assets/js/jquery.slimscroll.js"></script>
<script src="{{asset('/admin')}}/assets/js/Chart.bundle.js"></script>
<script src="{{asset('/admin')}}/assets/js/chart.js"></script>
<script src="{{asset('/admin')}}/assets/js/app.js"></script>
<script src="{{asset('/admin')}}/assets/js/bootstrap-datetimepicker.min.js"></script>

</body>



</html>
