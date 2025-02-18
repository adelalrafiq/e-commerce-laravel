@extends('trucksmarkt.layouts.master')
@section('content')
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Admin Login - Trucks Markt</title>

<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="{{asset('admin_assets/dist/img/ico/favicon.png')}}" type="image/x-icon">
<!-- Bootstrap -->
<link href="{{asset('admin_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Bootstrap rtl -->
<!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
<!-- Pe-icon-7-stroke -->
<link href="{{asset('admin_assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css" />
<!-- style css -->
<link href="{{asset('admin_assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css" />
<!-- Theme style rtl -->
<!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
</head>

<body>
    <!-- Content Wrapper -->
    <div class="login-wrapper">
        <!-- <div class="back-link">
            <a href="index.html" class="btn btn-add">Back to Dashboard</a>
        </div> -->
        <div class="container-center">
            @if(Session::has('flash_message_error'))
            <div class="alert alert-sm alert-danger alert-block" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>
            @endif
            @if(Session::has('flash_message_success'))
            <div class="alert alert-sm alert-success alert-block" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{!! session('flash_message_success') !!}</strong>
            </div>
            @endif
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{url('/login')}}" id="loginForm" name="loginForm" method="POST">{{csrf_field()}}
                            <div class="form-group">
                                {{-- <label>Email Address</label>
                                <input type="email" value="" id="email" class="form-control" name="email"> --}}
                                <label class="control-label" for="email">Email Address</label>
                                <input type="email" placeholder="example@gmail.com" title="Please enter you username"
                                    required="" value="" name="email" id="email" class="form-control">
                                {{-- <span class="help-block small">Your unique Email</span> --}}
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******"
                                    required="" value="" name="password" id="password" class="form-control">
                                {{-- <span class="help-block small">Your strong password</span> --}}
                            </div>
                            <div>
                                <button type="submit" class="btn btn-add">Login</button>
                                <a class="btn btn-warning" href="{{url('/user-register')}}">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- jQuery -->
    <script src="{{asset('admin_assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="{{asset('admin_assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>

<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:09:03 GMT -->

@endsection
