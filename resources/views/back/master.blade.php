<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/back/images/favicon.png')}}" type="image/x-icon" />

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/back/images/apple-touch-icon-57-precomposed.png')}}">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/back/images/apple-touch-icon-114-precomposed.png')}}">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/back/images/apple-touch-icon-72-precomposed.png')}}">
    <!-- For iPad Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/back/images/apple-touch-icon-144-precomposed.png')}}">

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="{{asset('public/back/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('public/back/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/back/plugins/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/back/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/back/fonts/webfont/cryptocoins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/back/css/animate.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/back/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <link href="{{asset('public/back/plugins/jvectormap/jquery-jvectormap-2.0.1.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('public/back/plugins/morris-chart/css/morris.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('public/back/plugins/calendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{asset('public/back/plugins/icheck/skins/minimal/minimal.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="{{asset('public/back/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/back/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->
    @stack('css')
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" ">
    <!-- START TOPBAR -->
    @include('back.layouts.header')
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid container-fluid">

        <!-- SIDEBAR - START -->
        @include('back.layouts.sidebar')
        <!--  SIDEBAR - END -->

        <!-- START CONTENT -->
        @yield('content')
        <div id="user_type"></div>
        <div id="browser_type"></div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->
    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="{{asset('public/back/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/back/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('public/back/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/back/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('public/back/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('public/back/plugins/viewport/viewportchecker.js')}}"></script>
    <script>
        window.jQuery || document.write('<script src="{{asset('public/back/js/jquery.min.js')}}"></script>');
    </script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <script src="{{asset('public/back/plugins/echarts/echarts-custom-for-dashboard.js')}}"></script>

    <script src="{{asset('public/back/plugins/flot-chart/jquery.flot.js')}}"></script>
    <script src="{{asset('public/back/plugins/flot-chart/jquery.flot.time.js')}}"></script>
    <script src="{{asset('public/back/js/chart-flot.js')}}"></script>

    <script src="{{asset('public/back/js/dashboard-hos.js')}}"></script>


    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="{{asset('public/back/js/scripts.js')}}"></script>
    <!-- END CORE TEMPLATE JS - END -->
    @stack('js')
</body>

</html>
