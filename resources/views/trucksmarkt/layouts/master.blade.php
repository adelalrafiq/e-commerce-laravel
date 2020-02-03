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
  <meta name="keywords" content="truck">
  <meta name="description" content="Are you looking for a truck-Semi-trailer truck in your area? Find your vehicle with the truck-Semi-trailer truck-search at: trucks.be – Belgium's vehicle marketplace">
  <meta name="author" content="Adel Al-Rafiq">
  <meta name="format-detection" content="telephone=no">
  <meta name="robots" content="index, follow">


  <link rel="stylesheet" type="text/css" href="//static.classistatic.de/pubse/static/dspstyle.372d91c0d97451c9bfc9625061990f94.css">
  <link rel="stylesheet" type="text/css" href="//static.classistatic.de/pubse/static/dsp.7227c6f7bc2d7ef0b3a6f738b6d811e9.css">

  <!-- Site Icons -->
  <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />
  <link rel="apple-touch-icon" href="">

  {{-- <!-- Bootstrap CSS -->
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
 --}}

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<<<<<<< HEAD
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-144x144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-114x114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-72x72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-57x57.png">
    <link rel="apple-touch-startup-image" media="screen and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-splashscreen-big.jpg">
    <link rel="apple-touch-startup-image" media="screen and (device-height: 480px)" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-splashscreen.png">
    <link rel="mask-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/safari-pinned-tab.svg" color="#000">


=======
>>>>>>> parent of 2eac15e... updated
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

<<<<<<< HEAD
  <script>
    LUX = (function() {
        var a = ("undefined" !== typeof (LUX) && "undefined" !== typeof (LUX.gaMarks) ? LUX.gaMarks : []);
        var d = ("undefined" !== typeof (LUX) && "undefined" !== typeof (LUX.gaMeasures) ? LUX.gaMeasures : []);
        var j = "LUX_start";
        var k = window.performance;
        var l = ("undefined" !== typeof (LUX) && LUX.ns ? LUX.ns : (Date.now ? Date.now() : +(new Date())));
        if (k && k.timing && k.timing.navigationStart) {
            l = k.timing.navigationStart
        }
        function f() {
            if (k && k.now) {
                return k.now()
            }
            var o = Date.now ? Date.now() : +(new Date());
            return o - l
        }
        function b(n) {
            if (k) {
                if (k.mark) {
                    return k.mark(n)
                } else {
                    if (k.webkitMark) {
                        return k.webkitMark(n)
                    }
                }
            }
            a.push({
                name: n,
                entryType: "mark",
                startTime: f(),
                duration: 0
            });
            return
        }
        function m(p, t, n) {
            if ("undefined" === typeof (t) && h(j)) {
                t = j
            }
            if (k) {
                if (k.measure) {
                    if (t) {
                        if (n) {
                            return k.measure(p, t, n)
                        } else {
                            return k.measure(p, t)
                        }
                    } else {
                        return k.measure(p)
                    }
                } else {
                    if (k.webkitMeasure) {
                        return k.webkitMeasure(p, t, n)
                    }
                }
            }
            var r = 0
              , o = f();
            if (t) {
                var s = h(t);
                if (s) {
                    r = s.startTime
                } else {
                    if (k && k.timing && k.timing[t]) {
                        r = k.timing[t] - k.timing.navigationStart
                    } else {
                        return
                    }
                }
            }
            if (n) {
                var q = h(n);
                if (q) {
                    o = q.startTime
                } else {
                    if (k && k.timing && k.timing[n]) {
                        o = k.timing[n] - k.timing.navigationStart
                    } else {
                        return
                    }
                }
            }
            d.push({
                name: p,
                entryType: "measure",
                startTime: r,
                duration: (o - r)
            });
            return
        }
        function h(n) {
            return c(n, g())
        }
        function c(p, o) {
            for (i = o.length - 1; i >= 0; i--) {
                var n = o[i];
                if (p === n.name) {
                    return n
                }
            }
            return undefined
        }
        function g() {
            if (k) {
                if (k.getEntriesByType) {
                    return k.getEntriesByType("mark")
                } else {
                    if (k.webkitGetEntriesByType) {
                        return k.webkitGetEntriesByType("mark")
                    }
                }
            }
            return a
        }
        return {
            mark: b,
            measure: m,
            gaMarks: a,
            gaMeasures: d
        }
    }
    )();
    LUX.ns = (Date.now ? Date.now() : +(new Date()));
    LUX.ac = [];
    LUX.cmd = function(a) {
        LUX.ac.push(a)
    }
    ;
    LUX.init = function() {
        LUX.cmd(["init"])
    }
    ;
    LUX.send = function() {
        LUX.cmd(["send"])
    }
    ;
    LUX.addData = function(a, b) {
        LUX.cmd(["addData", a, b])
    }
    ;
    LUX_ae = [];
    window.addEventListener("error", function(a) {
        LUX_ae.push(a)
    });
    LUX_al = [];
    if ("function" === typeof (PerformanceObserver) && "function" === typeof (PerformanceLongTaskTiming)) {
        var LongTaskObserver = new PerformanceObserver(function(c) {
            var b = c.getEntries();
            for (var a = 0; a < b.length; a++) {
                var d = b[a];
                LUX_al.push(d)
            }
        }
        );
        try {
            LongTaskObserver.observe({
                type: ["longtask"]
            })
        } catch (e) {}
    }
    ;</script>
<script src="https://cdn.speedcurve.com/js/lux.js?id=10594380" async defer crossorigin="anonymous"></script>




=======
>>>>>>> parent of 2eac15e... updated
</body>

</html>
