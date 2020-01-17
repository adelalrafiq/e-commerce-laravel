<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title') - Trucks Markt</title>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('admin_assets/dist/img/ico/favicon.png" type="image/x-icon')}}">
    <!-- Start Global Mandatory Style
         =====================================================================-->
    <!-- jquery-ui css -->
    <link href="{{asset('admin_assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet"
        type="text/css" />
    <!-- Bootstrap -->
    <link href="{{asset('admin_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap toggle -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Lobipanel css -->
    <link href="{{asset('admin_assets/plugins/lobipanel/lobipanel.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Pace css -->
    <link href="{{asset('admin_assets/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link href="{{asset('admin_assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Pe-icon -->
    <link href="{{asset('admin_assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css" />
    <!-- Themify icons -->
    <link href="{{asset('admin_assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css" />
    <!-- End Global Mandatory Style
         =====================================================================-->
    <!-- Start page Label Plugins
         =====================================================================-->
    <!-- Emojionearea -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link href="{{asset('admin_assets/plugins/emojionearea/emojionearea.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Monthly css -->
    <link href="{{asset('admin_assets/plugins/monthly/monthly.css')}}" rel="stylesheet" type="text/css" />
    <!-- End page Label Plugins
         =====================================================================-->
    <!-- Start Theme Layout Style
         =====================================================================-->
    <!-- Theme style -->
    <link href="{{asset('admin_assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">
    <!-- Theme style rtl -->
    <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    <!-- End Theme Layout Style
         =====================================================================-->
</head>

<body class="hold-transition sidebar-mini">
    <!--preloader-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('content')
        @include('admin.layouts.footer')
    </div>
    <!-- Start Core Plugins
             =====================================================================-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- jquery-ui -->
    <script src="{{asset('admin_assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin_assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js"></script>
    <!-- lobipanel -->
    <script src="{{asset('admin_assets/plugins/lobipanel/lobipanel.min.js')}}" type="text/javascript"></script>
    <!-- Pace js -->
    <script src="{{asset('admin_assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="{{asset('admin_assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript">
    </script>
    <!-- FastClick -->
    <script src="{{asset('admin_assets/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
    <!-- CRMadmin frame -->
    <script src="{{asset('admin_assets/dist/js/custom.js')}}" type="text/javascript"></script>
    <!-- End Core Plugins
             =====================================================================-->
    <!-- Start Page Lavel Plugins
             =====================================================================-->
    <!-- ChartJs JavaScript -->
    <script src="{{asset('admin_assets/plugins/chartJs/Chart.min.js')}}" type="text/javascript"></script>
    <!-- Counter js -->
    <script src="{{asset('admin_assets/plugins/counterup/waypoints.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin_assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
    <!-- Monthly js -->
    <script src="{{asset('admin_assets/plugins/monthly/monthly.js')}}" type="text/javascript"></script>
    <!-- End Page Lavel Plugins
             =====================================================================-->
    <!-- Start Theme label Script
             =====================================================================-->
    <!-- Dashboard js -->
    <script src="{{asset('admin_assets/dist/js/dashboard.js')}}" type="text/javascript"></script>
    <!-- End Theme label Script
             =====================================================================-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
    </script>
    <script src="{{asset('admin_assets/dist/js/main.js')}}" type="text/javascript"></script>

    @include('sweetalert::alert')
</body>

</html>
