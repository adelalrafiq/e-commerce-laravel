<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Site Metas -->
  <title>Trucks Markt </title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Site Icons -->
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('front_assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('front_assets/css/bootstrap-select.css')}}">
  <link rel="stylesheet" href="{{asset('front_assets/css/passtrength.css')}}">
  <!-- Site CSS -->
  <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="{{asset('front_assets/css/responsive.css')}}">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{asset('front_assets/css/custom.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  @include('trucksmarkt.layouts.header')
  @yield('content')
  @include('trucksmarkt.layouts.footer')



  <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

  <!-- ALL JS FILES -->

  <script src="{{asset('front_assets/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('front_assets/js/popper.min.js')}}"></script>
  <script src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
  <!-- ALL PLUGINS -->
  <script src="{{asset('front_assets/js/jquery.superslides.min.js')}}"></script>
  <script src="{{asset('front_assets/js/bootstrap-select.js')}}"></script>
  <script src="{{asset('front_assets/js/inewsticker.js')}}"></script>
  <script src="{{asset('front_assets/js/bootsnav.js')}}"></script>
  <script src="{{asset('front_assets/js/images-loded.min.js')}}"></script>
  <script src="{{asset('front_assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('front_assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('front_assets/js/baguetteBox.min.js')}}"></script>
  <script src="{{asset('front_assets/js/form-validator.min.js')}}"></script>
  <script src="{{asset('front_assets/js/contact-form-script.js')}}"></script>
  <script src="{{asset('front_assets/js/custom.js')}}"></script>
  <script src="{{asset('front_assets/js/passtrength.js')}}"></script>

  <!-- jQuery - validate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

  <!--Main.js -->
  <script src="{{asset('front_assets/js/main.js')}}"></script>

</body>

</html>
