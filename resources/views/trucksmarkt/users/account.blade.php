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

<!-- Content Header (Page header) -->
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

<!-- Form update My Account  -->
<div class="login-area">
    <div class="panel panel-bd panel-custom">
        <div class="panel-heading">
            <div class="view-header">
                <div class="header-icon">
                    <i class="fas fa-pen"></i>
                </div>
                <div class="header-title">
                    <h3>Update</h3>
                    <small><strong>Please enter your data to update.</strong></small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form action="{{url('/account')}}" id="accountForm" name="accountForm" method="POST">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-lg-6">
                <label>User Name</label>
            <input type="text" value="{{$userDetails->user_name}}" id="user_name" class="form-control" name="user_name">
            </div>
            <div class="form-group col-lg-6">
                <label>Email Address</label>
            <input type="text" value="{{$userDetails->email}}" id="email" class="form-control" name="email">
            </div>
            <div class="form-group col-lg-6">
                <label>First Name</label>
            <input type="text" value="{{$userDetails->first_name}}" id="first_name" class="form-control" name="first_name">
            </div>
            <div class="form-group col-lg-6">
                <label>Last Name</label>
                <input type="text" value="{{$userDetails->last_name}}" id="last_name" class="form-control" name="last_name">
            </div>
            <div class="form-group col-lg-6">
                <label>Address</label>
                <input type="text" value="{{$userDetails->address}}" id="address" class="form-control" name="address">
            </div>
            <div class="form-group col-lg-6">
                <label>Postal Code</label>
                <input type="text" value="{{$userDetails->postal_code}}" id="postal_code" class="form-control" name="postal_code">
            </div>
            <div class="form-group col-lg-6">
                <label>City</label>
                <input type="text" value="{{$userDetails->city}}" id="city" class="form-control" name="city">
            </div>
            <div class="form-group col-lg-6">
                <label>State</label>
                <input type="text" value="{{$userDetails->state}}" id="state" class="form-control" name="state">
            </div>
            <div class="form-group col-lg-6">
                <label>Country</label>
                <select style="height:34px;" id="country" name="country" class="form-control">
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                <option value="{{$country->country_name}}"@if($country->country_name == $userDetails->country) selected @endif>{{$country->country_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-6">
                <label>Tel</label>
                <input type="text" value="{{$userDetails->tel}}" id="tel" class="form-control" name="tel">
            </div>

        </div>
        <div>
            <button type="submit" class="btn btn-warning">Update</button>


        </div>
    </form>
</div>
    </div>
</div>

  <!-- Start My Account  -->
  <div class="my-account-box-main">
    <div class="container">
        <div class="my-account-page">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fa fa-gift"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Your Orders</h4>
                                <p>Track, return, or buy things again</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"><i class="fa fa-lock"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Login &amp; security</h4>
                                <p>Edit login, name, and mobile number</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fa fa-location-arrow"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Your Addresses</h4>
                                <p>Edit addresses for orders and gifts</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fa fa-credit-card"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Payment options</h4>
                                <p>Edit or add payment methods</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fab fa-paypal"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>PayPal</h4>
                                <p>View benefits and payment settings</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="account-box">
                        <div class="service-box">
                            <div class="service-icon">
                                <a href="#"> <i class="fab fa-amazon"></i> </a>
                            </div>
                            <div class="service-desc">
                                <h4>Amazon Pay balance</h4>
                                <p>Add money to your balance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-box">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-desc">
                                    <h4>Gold &amp; Diamond Jewellery</h4>
                                    <ul>
                                        <li> <a href="#">Apps and more</a> </li>
                                        <li> <a href="#">Content and devices</a> </li>
                                        <li> <a href="#">Music settings</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-desc">
                                    <h4>Handloom &amp; Handicraft Store</h4>
                                    <ul>
                                        <li> <a href="#">Advertising preferences </a> </li>
                                        <li> <a href="#">Communication preferences</a> </li>
                                        <li> <a href="#">SMS alert preferences</a> </li>
                                        <li> <a href="#">Message center</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-desc">
                                    <h4>The Designer Boutique</h4>
                                    <ul>
                                        <li> <a href="#">Amazon Pay</a> </li>
                                        <li> <a href="#">Bank accounts for refunds</a> </li>
                                        <li> <a href="#">Coupons</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-desc">
                                    <h4>Gift Boxes, Gift Tags, Greeting Cards</h4>
                                    <ul>
                                        <li> <a href="#">Leave delivery feedback</a> </li>
                                        <li> <a href="#">Lists</a> </li>
                                        <li> <a href="#">Photo ID proofs</a> </li>
                                        <li> <a href="#">Profile</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-desc">
                                    <h4>Other accounts</h4>
                                    <ul>
                                        <li> <a href="#">Amazon Business registration</a> </li>
                                        <li> <a href="#">Seller account</a> </li>
                                        <li> <a href="#">Amazon Web Services</a> </li>
                                        <li> <a href="#">Login with Amazon</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-desc">
                                    <h4>Shopping programs and rentals</h4>
                                    <ul>
                                        <li> <a href="#">Subscribe &amp; Save</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End My Account -->

 <!-- jQuery -->
 <script src="{{asset('admin_assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
 <!-- bootstrap js -->
 <script src="{{asset('admin_assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('front_assets/js/main.js')}}" type="text/javascript"></script>

@endsection


