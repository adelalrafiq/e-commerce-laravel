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
  <link rel="shortcut icon" href="" type="image/x-icon">
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

    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-144x144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-114x114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-72x72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-57x57.png">
    <link rel="apple-touch-startup-image" media="screen and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-splashscreen-big.jpg">
    <link rel="apple-touch-startup-image" media="screen and (device-height: 480px)" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-splashscreen.png">
    <link rel="mask-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/safari-pinned-tab.svg" color="#000">


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

  <script src="https://static.classistatic.de/showroom/static/js/dsptruck-2f22874802.js?minimize=false" type="text/javascript"></script>
  <script src="https://static.classistatic.de/showroom/static/soy/common_macros_nl.soy.js?hash=1d487e8ae908990c3bbd47f593addc02" type="text/javascript"></script>
  <script src="https://static.classistatic.de/showroom/static/soy/widgets_nl.soy.js?hash=1d487e8ae908990c3bbd47f593addc02" type="text/javascript"></script>
  <script src="https://static.classistatic.de/showroom/static/soy/dsp_macros_nl.soy.js?hash=1d487e8ae908990c3bbd47f593addc02" type="text/javascript"></script>
  <script type="text/javascript">
      var _cf = _cf || [];
      _cf.push(['_setFsp', true]);
      _cf.push(['_setBm', true]);
      _cf.push(['_setAu', '/resources/c5031d369f198fcefe31fe84d4ce2c']);
  </script>
  {{-- <script type="text/javascript" src="{{asset('front_assets/js/c5031d369f198fcefe31fe84d4ce2c.js')}}"></script> --}}
  {{-- <script type="text/javascript" src="{{asset('front_assets/js/truck_awesome.js')}}"></script> --}}
  {{-- <script type="text/javascript" src="{{asset('front_assets/js/lux.js')}}"></script> --}}
  {{-- <script type="text/javascript" src="{{asset('front_assets/js/ad.js')}}"></script> --}}



</body>

</html>
