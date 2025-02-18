@extends('trucksmarkt.layouts.master')
@section('content')
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>CRM Admin panel</title>
<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="{{asset('admin_assets/dist/img/ico/favicon.png')}}" type="image/x-icon">
<!-- Bootstrap -->
<link href="{{asset('admin_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Bootstrap rtl -->
<!--<link href="admin_assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
<!-- Pe-icon-7-stroke -->
<link href="{{asset('admin_assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css" />
<!-- style css -->
<link href="{{asset('admin_assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css" />
<!-- Theme style rtl -->
<!--<link href="admin_assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
</head>

<body>
    <!-- Content Wrapper -->
    <div class="login-wrapper">
        <div class="container-center lg">
            @if(Session::has('flash_message_error'))
            <div class="alert alert-sm alert-danger alert-block" style="background-color: #f4d2d2;">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">x</span>
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
                                <h3>Register</h3>
                                <small><strong>Please enter your data to register.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{url('/register')}}" id="registerForm" name="registerForm" method="POST">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Username</label>
                                    <input type="text" value="" id="user_name" class="form-control" name="user_name">
                                    {{-- <span class="help-block small">Your unique username to app</span> --}}
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" value="" id="myPassword" class="form-control"
                                        name="password">
                                    {{-- <span class="help-block small">Your hard to guess password</span> --}}
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input type="password" value="" id="repeatpassword" class="form-control"
                                        name="repeatpassword">
                                    {{-- <span class="help-block small">Please repeat your pasword</span> --}}
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Address</label>
                                    <input type="email" value="" id="email" class="form-control" name="email">
                                    {{-- <span class="help-block small">Your address email to contact</span> --}}
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-warning">Register</button>

                                <a class="btn btn-add" href="{{url('/user-login')}}">Login</a>
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
    <script src="{{asset('front_assets/js/main.js')}}" type="text/javascript"></script>

</body>

<!-- Mirrored from thememinister.com/crm/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:10:02 GMT -->

@endsection
