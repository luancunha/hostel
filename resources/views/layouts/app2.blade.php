<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Material Dashboard Laravel - Free Frontend Preset for Laravel') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->

    <link rel="stylesheet" href="{{ asset('fontawesome') }}/css/all.css">
    <link rel="stylesheet" href="{{ asset('fontawesome') }}/css/v4-shims.css">
    
    <link rel="stylesheet" href="{{ asset('material-icons') }}/iconfont/material-icons.css">

    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />

    <link href='{{ asset('calendar') }}/packages/core/main.css' rel='stylesheet' />
    <link href='{{ asset('calendar') }}/packages/daygrid/main.css' rel='stylesheet' />
    <link href='{{ asset('calendar') }}/packages/timegrid/main.css' rel='stylesheet' />
    <link href='{{ asset('calendar') }}/packages/bootstrap/bootstrap.css' rel='stylesheet' />

    <link href="{{ asset('bootstrap-switch') }}/dist/css/bootstrap4/bootstrap-switch.css" rel="stylesheet" >
    <link href="{{ asset('bootstrap-switch') }}/docs/css/highlight.css" rel="stylesheet">
    <link href="{{ asset('bootstrap-switch') }}/docs/css/main.css" rel="stylesheet">

    <style>
        
        .navbar {
          top: -15px !important;
          transition: background-color 1s ease 0s !important;
        }

        .navbar.solid {
          background-color: #eee !important;
          transition: background-color 1s ease 0s !important;
          box-shadow: 0 0 4px grey !important;
          
        }
        .navbar.solid .navbar-nav li a{
            color: black !important;
            transition: color 1s ease 0s;
        }

        #calendar {
            max-width: 1000px;
            margin: 10px auto;
            padding: 0 10px;
        }

        .fc-day-grid-event{
            height: 290px;
            margin-bottom: -20px;
        }

        .fc-title{
            font-size: 20px;
            text-align: center;
        }

        .fc-day-grid-event .fc-content{
            white-space: normal;
        }

        .disabled{
            color: blue;
            cursor: default;
        }

        body{
            padding-bottom: 0px !important;
        }

        .material-icons.md-18 { font-size: 18px; }
        .material-icons.md-24 { font-size: 24px; }
        .material-icons.md-36 { font-size: 36px; }
        .material-icons.md-48 { font-size: 48px; }

        a[disabled="disabled"] {
            pointer-events: none !important;
        }
        
    </style>

    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endauth
        
        
        <!--   Core JS Files   -->
        <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
        <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
        <!-- Chartist JS -->
        <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('material') }}/demo/demo.js"></script>
        <script src="{{ asset('material') }}/js/settings.js"></script>

        <script src='{{ asset('calendar') }}/packages/core/main.js'></script>
        <script src='{{ asset('calendar') }}/packages/daygrid/main.js'></script>
        <script src='{{ asset('calendar') }}/packages/interaction/main.js'></script>
        <script src='{{ asset('calendar') }}/packages/timegrid/main.js'></script>
        <script src='{{ asset('calendar') }}/packages/bootstrap/main.js'></script>
        <script src='{{ asset('calendar') }}/packages/core/locales-all.js'></script>

        <script src="{{ asset('bootstrap-switch') }}/dist/js/bootstrap-switch.js"></script>
        <script src="{{ asset('bootstrap-switch') }}/docs/js/highlight.js"></script>
        <script src="{{ asset('bootstrap-switch') }}/docs/js/main.js"></script>

        <script src="{{ asset('jQuery-Mask') }}/dist/jquery.mask.js"></script>
        <script src="{{ asset('jQuery-Mask') }}/dist/jquery.mask.min.js"></script>

        @stack('js')
        @stack('scripts')
    </body>
</html>