@extends('trucksmarkt.layouts.master')
@section('content')

<body>

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            @foreach($banners as $banner)
            <li class="{{$banner->text_style}}">
                <img src="{{asset('uploads/banners/'.$banner->image)}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>{!!$banner->name!!}</strong></h1>
                            <p class="m-b-40">{!!$banner->content!!}</p>
                            <p><a class="btn hvr-hover" href="{{$banner->link}}">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!--Start serch -->

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Op zoek naar een vrachtwagen bij u in de buurt? Vind uw voertuig met de mobile.de vrachtwagen search – Duitslands grootste marktplaats voor voertuigen">
    <meta name="version" content="20200128T1123.master.87255aaa3">
    <meta name="theme-color" content="#E6E6E6">
    <meta name="apple-mobile-web-app-title" content="mobile.de/nl">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-144x144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-114x114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-72x72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-touch-icon-57x57.png">
    <link rel="apple-touch-startup-image" media="screen and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-splashscreen-big.jpg">
    <link rel="apple-touch-startup-image" media="screen and (device-height: 480px)" href="https://static.classistatic.de/showroom/static/img/favicons/default/apple-splashscreen.png">
    <link rel="mask-icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/safari-pinned-tab.svg" color="#000">
    <meta name="application-name" content="mobile.de/nl">
    <meta name="msapplication-config" content="https://static.classistatic.de/showroom/static/img/favicons/default/browserconfig.xml">
    <meta name="msapplication-navbutton-color" content="#FF6600">
    <meta name="msapplication-TileImage" content="https://static.classistatic.de/showroom/static/img/favicons/default/mstile-144x144.png">
    <link rel="icon" type="image/png" href="https://static.classistatic.de/showroom/static/img/favicons/default/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="https://static.classistatic.de/showroom/static/img/favicons/default/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://static.classistatic.de/showroom/static/img/favicons/default/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://static.classistatic.de/showroom/static/img/favicons/default/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="https://static.classistatic.de/showroom/static/img/favicons/default/manifest.json">
    <link rel="shortcut icon" href="https://static.classistatic.de/showroom/static/img/favicons/default/favicon.ico">
    <link href="https://static.classistatic.de/showroom/static/css/common-dsp-pages-c5e077a486.css" rel="stylesheet">
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <script type="text/javascript">
        var src_trans = new Object();
        src_trans.showResults = encodeURIComponent("Toon resultaten");
    </script>
    <script type="text/javascript">
        var js_global = new Object();
        js_global.ajaxBaseUrl = "/nl/ajax";
        js_global.brand = "mobile.de/nl";
        js_global.staticContentUrl = "https://static.classistatic.de/showroom";
        js_global.isLoggedIn = "false";
        js_global.countryAdCode = "05";
        js_global.countryCode = "nl";
        js_global.languageCode = "nl";
        js_global.mgaDebug = false;
        js_global.debugOn = false;
        js_global.media = "phone";
        if (window.matchMedia) {
            if (window.matchMedia("(min-width: 996px)").matches)
                js_global.media = "desktop";
            else if (window.matchMedia("(min-width: 768px)").matches)
                js_global.media = "tablet";
        }
    </script>
    <script type="text/javascript">
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
    </script>
    <script type="text/javascript">
        (function() {
            var ads = window.ads = new Array();
            if (window.js_global.media === "desktop") {
                var item = {
                    label: '/4288/mobile.int_Showroom/DetailSearchPage/SB_LowerBanner',
                    id: 'div-gpt-ad-1440493196850-0-SB_LowerBanner'
                };
                item.sizes = JSON.parse('["fluid", [728, 90]]');
                ads.push(item);
                var item = {
                    label: '/4288/mobile.int_Showroom/DetailSearchPage/Sky-Halfpage',
                    id: 'div-gpt-ad-1454110576089-0-Sky-Halfpage'
                };
                item.sizes = JSON.parse('[[120, 600], [160, 600], [200, 600], [300, 600]]');
                var width;
                if (typeof window.innerWidth != 'undefined')
                    width = window.innerWidth;
                else if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientWidth != 'undefined' && document.documentElement.clientWidth != 0)
                    width = document.documentElement.clientWidth;
                else
                    width = document.getElementsByTagName('body')[0].clientWidth;
                if (width >= 988) {
                    var space = (width - 1024) / 2;
                    if (item.sizes.length > 1) {
                        item.sizes = item.sizes.filter(function(value) {
                            return (value[0] < space);
                        })
                    }
                }
                ads.push(item);
                var item = {
                    label: '/4288/mobile.int_Showroom/DetailSearchPage/Halfpage_Left',
                    id: 'div-gpt-ad-1542807616488-0'
                };
                item.sizes = JSON.parse('[[120, 600], [160, 600], [200, 600], [300, 600]]');
                var width;
                if (typeof window.innerWidth != 'undefined')
                    width = window.innerWidth;
                else if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientWidth != 'undefined' && document.documentElement.clientWidth != 0)
                    width = document.documentElement.clientWidth;
                else
                    width = document.getElementsByTagName('body')[0].clientWidth;
                if (width >= 988) {
                    var space = (width - 1024) / 2;
                    if (item.sizes.length > 1) {
                        item.sizes = item.sizes.filter(function(value) {
                            return (value[0] < space);
                        })
                    }
                }
                ads.push(item);
                var item = {
                    label: '/4288/mobile.int_Showroom/DetailSearchPage/BB_TopBanner',
                    id: 'div-gpt-ad-1452529876088-0-BB_TopBanner'
                };
                item.sizes = JSON.parse('["fluid", [970, 250]]');
                ads.push(item);
                var item = {
                    label: '/4288/mobile.int_Showroom/DetailSearchPage/IS_OutOfPage',
                    id: 'div-gpt-ad-1477575685-0'
                };
                item.outofpage = true;
                ads.push(item);
            } else if (window.js_global.media === "phone") {
                var item = {
                    label: '/4288/mobile.int_Showroom/DetailSearchPage/MOB_TopBanner',
                    id: 'div-gpt-ad-1542808687851-0'
                };
                item.sizes = JSON.parse('[[320,50],[320,100],[300,50]]');
                ads.push(item);
            }
            googletag.cmd.push(function() {
                var eagtValue = location.search.split('pmtest=')[1];
                var pageNumber = parseInt('0');
                ads.forEach(function(item) {
                    var isOnPageNumber = true;
                    if (item.outofpage === true) {
                        googletag.defineOutOfPageSlot(item.label, item.id).addService(googletag.pubads());
                    } else {
                        if (item.fromPage > 0 && pageNumber < item.fromPage) {
                            isOnPageNumber = false;
                        }
                        if (item.toPage > 0 && pageNumber > item.toPage) {
                            isOnPageNumber = false;
                        }
                        if (isOnPageNumber === true) {
                            googletag.defineSlot(item.label, item.sizes, item.id).addService(googletag.pubads());
                        }
                    }
                });
                if (eagtValue) {
                    googletag.pubads().setTargeting('eagt', [eagtValue]);
                }
                googletag.pubads().setTargeting('sh', js_global.countryAdCode);
                googletag.pubads().enableAsyncRendering();
                googletag.pubads().enableSingleRequest();
                googletag.pubads().collapseEmptyDivs(true);
                if (!window.mobile.consent.isGoogleAdvertisingAllowed()) {
                    googletag.pubads().setRequestNonPersonalizedAds(1);
                }
                googletag.enableServices();
            });
        }
        )();
    </script>
    <link rel="alternate" hreflang="cs" href="https://www.mobile.de/cz/podrobn%C3%A9-hled%C3%A1n%C3%AD/nov%C3%A9/sg:truck,dmg:false/pg:dsptruck">
    <link rel="alternate" hreflang="es" href="https://www.mobile.de/es/b%C3%BAsqueda-detallada/nuevo/sg:truck,dmg:false/pg:dsptruck">
    <link rel="alternate" hreflang="fr" href="https://www.automobile.fr/recherche-d%C3%A9taill%C3%A9e/nouveau/sg:truck,dmg:false/pg:dsptruck">
    <link rel="alternate" hreflang="x-default" href="https://www.mobile.de/nl/uitgebreid-zoeken/nieuw/sg:truck,dmg:false/pg:dsptruck">
    <link rel="alternate" hreflang="pl" href="https://www.mobile.de/pl/wyszukiwanie-szczeg%C3%B3%C5%82owe/nowe/sg:truck,dmg:false/pg:dsptruck">
    <link rel="alternate" hreflang="ro" href="https://www.mobile.de/ro/c%C4%83utare-detaliat%C4%83/nou/sg:truck,dmg:false/pg:dsptruck">
    <link rel="alternate" hreflang="ru" href="https://www.mobile.de/ru/%D1%80%D0%B0%D1%81%D1%88%D0%B8%D1%80%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%BF%D0%BE%D0%B8%D1%81%D0%BA/%D0%BD%D0%BE%D0%B2%D0%BE%D0%B5/sg:truck,dmg:false/pg:dsptruck">
    <link rel="alternate" hreflang="tr" href="https://www.mobile.de/tr/detayl%C4%B1-arama/yeni/sg:truck,dmg:false/pg:dsptruck">
    <script>
        !function() {
            function o(n, i) {
                if (n && i)
                    for (var r in i)
                        i.hasOwnProperty(r) && (void 0 === n[r] ? n[r] = i[r] : n[r].constructor === Object && i[r].constructor === Object ? o(n[r], i[r]) : n[r] = i[r])
            }
            try {
                var n = decodeURIComponent("");
                if (n.length > 0 && window.JSON && "function" == typeof window.JSON.parse) {
                    var i = JSON.parse(n);
                    void 0 !== window.BOOMR_config ? o(window.BOOMR_config, i) : window.BOOMR_config = i
                }
            } catch (r) {
                window.console && "function" == typeof window.console.error && console.error("mPulse: Could not parse configuration", r)
            }
        }();
    </script>
    <script>
        !function(e) {
            var a = "https://s.go-mpulse.net/boomerang/"
              , t = "addEventListener";
            if ("False" == "True")
                e.BOOMR_config = e.BOOMR_config || {},
                e.BOOMR_config.PageParams = e.BOOMR_config.PageParams || {},
                e.BOOMR_config.PageParams.pci = !0,
                a = "https://s2.go-mpulse.net/boomerang/";
            if (window.BOOMR_API_key = "PV5JN-R9AGB-VVMPH-JZK7Z-XW3AH",
            function() {
                function n(a) {
                    e.BOOMR_onload = a && a.timeStamp || (new Date).getTime()
                }
                if (!e.BOOMR || !e.BOOMR.version && !e.BOOMR.snippetExecuted) {
                    e.BOOMR = e.BOOMR || {},
                    e.BOOMR.snippetExecuted = !0;
                    var i, o, r, _ = document.createElement("iframe");
                    if (e[t])
                        e[t]("load", n, !1);
                    else if (e.attachEvent)
                        e.attachEvent("onload", n);
                    _.src = "javascript:void(0)",
                    _.title = "",
                    _.role = "presentation",
                    (_.frameElement || _).style.cssText = "width:0;height:0;border:0;display:none;",
                    r = document.getElementsByTagName("script")[0],
                    r.parentNode.insertBefore(_, r);
                    try {
                        o = _.contentWindow.document
                    } catch (O) {
                        i = document.domain,
                        _.src = "javascript:var d=document.open();d.domain='" + i + "';void(0);",
                        o = _.contentWindow.document
                    }
                    o.open()._l = function() {
                        var e = this.createElement("script");
                        if (i)
                            this.domain = i;
                        e.id = "boomr-if-as",
                        e.src = a + "PV5JN-R9AGB-VVMPH-JZK7Z-XW3AH",
                        BOOMR_lstart = (new Date).getTime(),
                        this.body.appendChild(e)
                    }
                    ,
                    o.write("<bo" + 'dy onload="document._l();">'),
                    o.close()
                }
            }(),
            "".length > 0)
                if (e && "performance"in e && e.performance && "function" == typeof e.performance.setResourceTimingBufferSize)
                    e.performance.setResourceTimingBufferSize();
            !function() {
                if (BOOMR = e.BOOMR || {},
                BOOMR.plugins = BOOMR.plugins || {},
                !BOOMR.plugins.AK) {
                    var a = "" == "true" ? 1 : 0
                      , t = ""
                      , n = "lo24xo27mtcogxrsv5mq-f-ee8dc4643-clientnsv4-s.akamaihd.net"
                      , i = {
                        "ak.v": 25,
                        "ak.cp": "463146",
                        "ak.ai": parseInt("344245", 10),
                        "ak.ol": "0",
                        "ak.cr": 15,
                        "ak.ipv": 4,
                        "ak.proto": "h2",
                        "ak.rid": "bacaaca5",
                        "ak.r": 36352,
                        "ak.a2": a,
                        "ak.m": "dscb",
                        "ak.n": "essl",
                        "ak.bpcip": "91.181.203.0",
                        "ak.cport": 54046,
                        "ak.gh": "2.19.195.117",
                        "ak.quicv": "",
                        "ak.tlsv": "tls1.2",
                        "ak.0rtt": "",
                        "ak.csrc": "-",
                        "ak.acc": "",
                        "ak.t": "1580379993"
                    };
                    if ("" !== t)
                        i["ak.ruds"] = t;
                    var o = {
                        i: !1,
                        av: function(a) {
                            var t = "http.initiator";
                            if (a && (!a[t] || "spa_hard" === a[t]))
                                i["ak.feo"] = void 0 !== e.aFeoApplied ? 1 : 0,
                                BOOMR.addVar(i)
                        },
                        rv: function() {
                            var e = ["ak.bpcip", "ak.cport", "ak.cr", "ak.csrc", "ak.gh", "ak.ipv", "ak.m", "ak.n", "ak.ol", "ak.proto", "ak.quicv", "ak.tlsv", "ak.0rtt", "ak.r", "ak.acc", "ak.t"];
                            BOOMR.removeVar(e)
                        }
                    };
                    BOOMR.plugins.AK = {
                        akVars: i,
                        akDNSPreFetchDomain: n,
                        init: function() {
                            if (!o.i) {
                                var e = BOOMR.subscribe;
                                e("before_beacon", o.av, null, null),
                                e("onbeacon", o.rv, null, null),
                                o.i = !0
                            }
                            return this
                        },
                        is_complete: function() {
                            return !0
                        }
                    }
                }
            }()
        }(window);
    </script>
</head>
<body>
    <header class="header hidden-print">
        <div class="header-meta-container header-hidden-small">
        <!-- placeholder for desktop meta -->
        </div>
        <div class="header-navbar">
            <div class="header-corporate">
                <a class="u-pull-left" href="#">
                    <i class="mde-icon mde-logo"></i>
                </a>
                <p class="claim hidden-s">Importauto's uit Duitsland en geheel Europa</p>
            </div>
            <a class="header-menu-open header-hidden-large js-header-menu-toggle" href="#">
                Menu<i class="gicon-menu-open-m icon--m icon--right"></i>
            </a>
            <nav class="header-nav js-header-nav">
                <a class="header-menu-close header-hidden-large js-header-menu-toggle" href="#">
                    Menu<i class="gicon-menu-close-m icon--m icon--right"></i>
                </a>
                <ul class="header-main-nav">
                    <li class="header-main-nav-item">
                        <a class="header-nav-link header-news-link" href="/nl/nieuw/pg:news">Nieuw</a>
                    </li>
                    <li class="header-main-nav-item">
                        <a class="header-nav-link header-search-link header-nav-link-toggle" href="#">
                            Zoeken<i class="header-hidden-large icon--s icon--right gicon-submenu-open-s"></i>
                        </a>
                        <ul class="header-main-nav-dropdown" role="menu">
                            <li class="header-main-nav-dropdown-item">
                                <a class="header-nav-link header-search-car-link" href="/nl/uitgebreid-zoeken/nieuw/vhc:car,dmg:false/pg:dspcar">Auto's</a>
                            </li>
                            <li class="header-main-nav-dropdown-item">
                                <a class="header-nav-link" href="/nl/uitgebreid-zoeken/nieuw/vhc:motorbike,dmg:false/pg:dspmotorbike">Motoren</a>
                            </li>
                            <li class="header-main-nav-dropdown-item">
                                <a class="header-nav-link" href="/nl/uitgebreid-zoeken/nieuw/vhc:motorhome,dmg:false/pg:dspmotorhome">Campers</a>
                            </li>
                            <li class="header-main-nav-dropdown-item">
                                <a class="header-nav-link header-search-truck-link" href="/nl/uitgebreid-zoeken/nieuw/sg:truck,dmg:false/pg:dsptruck">Vrachtwagens en Bedrijfsvoertuigen</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="header-meta">
                    <ul class="header-meta-actions">
                        <li class="header-meta-actions-item">
                            <a class="header-meta-action js-track-event" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;navigation&quot;,&quot;/nl/public/navigation/dealer&quot;,&quot;login&quot;]" href="https://handel.mobile.de/?locale=en" target="_blank">Dealer</a>
                        </li>
                        <li class="header-meta-actions-item">
                            <a class="header-meta-action header-contact-link" href="/nl/neem+contact+met+ons+op/pg:contactus">Contact</a>
                        </li>

                        <li class="header-meta-actions-item header-hidden-large">
                            <span class="header-meta-action header-meta-action-toggle">
                                <span class="conversion-info js-exchange-rate u-text-bold">1 EUR</span>
                                <i class="header-hidden-large icon--s icon--right gicon-submenu-open-s"></i>
                            </span>
                            <div class="header-meta-action-dropdown-arrow">
                                <div></div>
                            </div>
                            <ul class="header-meta-action-dropdown" role="menu">
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="EUR">Euro</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="BGN">Bulgarian lev</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="CHF">Swiss franc</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="CZK">Czech koruna</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="DKK">Danish krone</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="HRK">Croatian kuna</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="HUF">Hungarian forint</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="NOK">Norwegian krone</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="GBP">Pound sterling</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="PLN">Polish zloty</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="RON">Romanian leu</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="RUB">Russian rouble</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="SEK">Swedish krona</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="TRY">Turkish lira</a>
                                </li>
                                <li class="header-meta-action-dropdown-item u-text-nowrap">
                                    <a class="header-nav-link js-click-currencies js-track-event" href="#" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;feature&quot;,&quot;/nl/public/dss/truck/newandused/currency/change&quot;]" data-value="USD">US Dollar</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="header-meta-actions header-login">
                        <li class="header-meta-actions-item">
                            <a href="/nl/mijn-opgeslagen-zoekresultaten/pg:savedsearches" class="header-meta-action js-track-event" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;search&quot;,&quot;/nl/public/navigation/mymobile&quot;]">
                                <i class="gicon-saved-searches-s icon--s"></i>
                                Mijn zoekresultaten
                            </a>
                        </li>
                        <li class="header-meta-actions-item">
                            <a href="/nl/mijn-geparkeerde-voertuigen/pg:parking" class="header-meta-action js-track-event" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;car park&quot;,&quot;/nl/public/navigation/mymobile&quot;]">
                                <i class="gicon-saved-cars-s icon--s"></i>
                                Parkeerplaats
                            </a>
                        </li>
                        <li class="header-meta-actions-item nav-logout">
                            <div class="header-meta-action-item">
                                <a class="header-meta-action header-meta-action-toggle" href="#">
                                    <i class="gicon-user-s icon--s"></i>
                                    Mijn mobile.de<i class="header-hidden-large icon--s icon--right gicon-submenu-open-s"></i>
                                </a>
                                <div class="header-meta-action-dropdown-arrow">
                                    <div></div>
                                </div>
                                <ul class="header-meta-action-dropdown right js-header-login" data-header-login-status-url="https://login.mobile.de/mycas/loginStatus.js?loc=" data-header-login-url="https://login.mobile.de/mycas/login?requestLogin=true&amp;locale=nl&amp;service=https://www.mobile.de/nl" role="menu">
                                    <li class="header-meta-action-dropdown-item header-meta-action-dropdown-item-info">
                                        <b>Aangemeld als:</b>
                                        <br>
                                        <p class="js-mymo-email"></p>
                                    </li>
                                    <li class="header-meta-action-dropdown-item">
                                        <a href="/nl/mijn-geparkeerde-voertuigen/pg:parking" class="header-nav-link js-track-event" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;car park&quot;,&quot;/nl/public/navigation/mymobile&quot;]">Mijn geparkeerde voertuigen</a>
                                    </li>
                                    <li class="header-meta-action-dropdown-item">
                                        <a href="/nl/mijn-opgeslagen-zoekresultaten/pg:savedsearches" class="header-nav-link js-track-event" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;search&quot;,&quot;/nl/public/navigation/mymobile&quot;]">Mijn opgeslagen zoekresultaten</a>
                                    </li>
                                    <li class="header-meta-action-dropdown-item">
                                        <a class="header-nav-link js-login-link js-track-event u-text-bold" href="https://login.mobile.de/mycas/logout?locale=nl&amp;redirect=true&amp;service=https://www.mobile.de/nl" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;navigation&quot;,&quot;/nl/public/navigation/mymobile&quot;,&quot;logout&quot;]">Uitloggen</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-login header-meta-actions-item header-meta-btn">
                            <a class="btn btn--orange btn--s header-login-button js-login-link js-track-event" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;navigation&quot;,&quot;/nl/public/navigation/mymobile&quot;,&quot;login&quot;]" href="https://login.mobile.de/mycas/login?requestLogin=true&amp;locale=nl&amp;service=https://www.mobile.de/nl">Inloggen</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header-backdrop js-header-menu-toggle"></div>
        </div>
    </header>
    <div class="g-content">
        <div class="g-container">
            <script type="text/javascript">
                var tracking = {
                    mgaDebug: false,
                    mgaDomain: "mobile.de",
                    mgaUaAccount: "UA-34215570-7",
                    mgaPageName: ""
                };
                tracking.mgaPageName = "/nl/public/dss/truck/newandused";
            </script>
            <div class="outofpage-ad-box hidden-s hidden-m">
                <div id='div-gpt-ad-1477575685-0'>
                    <script type='text/javascript'>
                        var ids = window.ads.filter(function(i) {
                            return i.id === "div-gpt-ad-1477575685-0";
                        }).map(function(i) {
                            return i.id;
                        });
                        if (ids.indexOf("div-gpt-ad-1477575685-0") >= 0) {
                            googletag.cmd.push(function() {
                                googletag.display('div-gpt-ad-1477575685-0');
                            });
                        }
                    </script>
                </div>
            </div>
            <div class="skyscraper-ad-box js-skyscraper-ad hidden-s hidden-m" data-align="left">
                <div id='div-gpt-ad-1542807616488-0'>
                    <script type='text/javascript'>
                        var ids = window.ads.filter(function(i) {
                            return i.id === "div-gpt-ad-1542807616488-0";
                        }).map(function(i) {
                            return i.id;
                        });
                        if (ids.indexOf("div-gpt-ad-1542807616488-0") >= 0) {
                            googletag.cmd.push(function() {
                                googletag.display('div-gpt-ad-1542807616488-0');
                            });
                        }
                    </script>
                </div>
            </div>
            <div class="skyscraper-ad-box js-skyscraper-ad hidden-s hidden-m" data-align="right">
                <div id='div-gpt-ad-1454110576089-0-Sky-Halfpage'>
                    <script type='text/javascript'>
                        var ids = window.ads.filter(function(i) {
                            return i.id === "div-gpt-ad-1454110576089-0-Sky-Halfpage";
                        }).map(function(i) {
                            return i.id;
                        });
                        if (ids.indexOf("div-gpt-ad-1454110576089-0-Sky-Halfpage") >= 0) {
                            googletag.cmd.push(function() {
                                googletag.display('div-gpt-ad-1454110576089-0-Sky-Halfpage');
                            });
                        }
                    </script>
                </div>
            </div>
            <section class="dsp-section js-dsp-section g-row">
                <div class="billboard-ad-box g-col-l-12 hidden-s hidden-m">
                    <div id='div-gpt-ad-1452529876088-0-BB_TopBanner'>
                        <script type='text/javascript'>
                            var ids = window.ads.filter(function(i) {
                                return i.id === "div-gpt-ad-1452529876088-0-BB_TopBanner";
                            }).map(function(i) {
                                return i.id;
                            });
                            if (ids.indexOf("div-gpt-ad-1452529876088-0-BB_TopBanner") >= 0) {
                                googletag.cmd.push(function() {
                                    googletag.display('div-gpt-ad-1452529876088-0-BB_TopBanner');
                                });
                            }
                        </script>
                    </div>
                </div>
                <form action="#" method="post" class="js-detail-search-form g-col-12">
                    <input type="hidden" name="segment" value="Truck"/>
                    <section class="infoband js-main-header g-row form-header default">
                        <div class="sticky-content js-sticky-header g-col-12">
                            <button class="btn btn--muted btn--s js-clear-all-btn u-margin-bottom-9" type="button">Alle verwijderen</button>
                            <input class="btn btn--orange btn--s u-pull-right js-show-results js-track-event" data-event="[&quot;send&quot;,&quot;event&quot;,&quot;truck&quot;,&quot;/nl/public/dss/truck/newandused&quot;,&quot;submit&quot;]" type="submit" value="Toon resultaten"/>
                            <div class="teaser-ad-box hidden-l hidden-m">
                                <div id='div-gpt-ad-1542808687851-0'>
                                    {{-- <script type='text/javascript'>
                                        var ids = window.ads.filter(function(i) {
                                            return i.id === "div-gpt-ad-1542808687851-0";
                                        }).map(function(i) {
                                            return i.id;
                                        });
                                        if (ids.indexOf("div-gpt-ad-1542808687851-0") >= 0) {
                                            googletag.cmd.push(function() {
                                                googletag.display('div-gpt-ad-1542808687851-0');
                                            });
                                        }
                                    </script> --}}
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- This div is important as it will show or hide according to the selected vehicleCategoryType -->
                    <div class="js-dsp-truck-search-fields" data-vehicle-type-selected="false">
                        <!-- Essentials Section -->
                        <div class="cBox cBox--content">
                            <header class="cBox-header flex-header">
                                <div class="flex-headline">
                                    <h3>Hoofdkenmerken auto</h3>
                                    <hr/>
                                </div>
                                <div>
                                    <button class="btn btn--muted js-clear-btn" data-clear="car-essentials" type="button">Verwijderen</button>
                                </div>
                            </header>
                            <div class="g-row">
                                <div class="form-element-row cBox-body g-col-12" data-fieldsBox="car-essentials" data-fieldsBoxType="makeModelDescription">
                                    <div class="g-row">
                                        <div class="g-col-l-4 g-col-m-6 g-col-s-12">
                                            <div class="form-group multiselect-dropdown">
                                                <label for="categories" class="">
                                                    <span>Categorie</span>
                                                </label>
                                                <select name="categories" id="categories" class="form-control form-control--dropdown selectpicker js-org-selectpicker" multiple>
                                                    <option value="" selected="selected">Alle</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="g-col-l-4 g-col-m-6 g-col-s-12">
                                            <div class="form-group">
                                                <label for="make">
                                                    <span>Merk</span>
                                                </label>
                                                <select class="form-control form-control--dropdown" name="make" id="make">
                                                    <option value="" selected="selected">Alle</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="g-col-l-4 g-col-m-6 g-col-s-12">
                                            <div class="form-group">
                                                <label for="modelDescription">
                                                    <span class="dropdown-text">Modelbeschrijving</span>
                                                </label>
                                                <input type="text" class="form-control js-vehicle-description js-ignore-enterkey" name="modelDescription" id="modelDescription" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Essentials Section -->
                        <!-- Details Section -->
                        <div class="cBox cBox--content">
                            <header class="cBox-header flex-header">
                                <div class="flex-headline">
                                    <h3>Autogegevens</h3>
                                    <hr/>
                                </div>
                                <div>
                                    <button class="btn btn--muted js-clear-btn" data-clear="truck-details-box" type="button">Verwijderen</button>
                                </div>
                            </header>
                            <div class="g-row">
                                <div class="form-element-row cBox-body g-col-12" data-fieldsBox="truck-details-box" data-fieldsBoxType="default">
                                    <div class="g-row">
                                        <div class="js-dsp-truck-details">
                                            <div class="g-col-l-6 g-col-m-6 g-col-s-12">
                                                <div class="form-group slider-widget js-slider-widget">
                                                    <label>
                                                        <span>Prijs</span>
                                                    </label>
                                                    <div class="slider-labels">
                                                        min. <span class="u-text-orange js-slider-labels">...</span>
                                                        max. <span class="u-text-orange js-slider-labels">...</span>
                                                    </div>
                                                    <div class="slider-wrapper">
                                                        <div class="slider-input u-pull-left">
                                                            <input type="number" class="form-control js-slider-textfield js-ignore-enterkey" placeholder="Alle" step="1" value="500" min="500"/>
                                                            <input id="minPrice" name="minPrice" value="499" class="js-hidden-input u-hide"/>
                                                            <span class="unit js-unit-label u-text-grey-30">€</span>
                                                        </div>
                                                        <div class="slider-input u-pull-right">
                                                            <input type="number" class="form-control js-slider-textfield js-ignore-enterkey" placeholder="Alle" step="1" value="100000" min="500"/>
                                                            <input id="maxPrice" name="maxPrice" value="100001" class="js-hidden-input u-hide"/>
                                                            <span class="unit js-unit-label u-text-grey-30">€</span>
                                                        </div>
                                                        <div class="slider js-slider" data-slider data-min="500" data-max="100000" data-selected-min="499" data-selected-max="100001" data-range="{&quot;min&quot;:[499],&quot;3%&quot;:[500],&quot;6%&quot;:[1000],&quot;9%&quot;:[2000],&quot;12%&quot;:[3000],&quot;15%&quot;:[4000],&quot;18%&quot;:[5000],&quot;21%&quot;:[6000],&quot;24%&quot;:[7000],&quot;26%&quot;:[8000],&quot;29%&quot;:[9000],&quot;32%&quot;:[10000],&quot;35%&quot;:[11000],&quot;38%&quot;:[12000],&quot;41%&quot;:[13000],&quot;44%&quot;:[14000],&quot;47%&quot;:[15000],&quot;50%&quot;:[17500],&quot;53%&quot;:[20000],&quot;56%&quot;:[22500],&quot;59%&quot;:[25000],&quot;62%&quot;:[27500],&quot;65%&quot;:[30000],&quot;68%&quot;:[35000],&quot;71%&quot;:[40000],&quot;74%&quot;:[45000],&quot;76%&quot;:[50000],&quot;79%&quot;:[55000],&quot;82%&quot;:[60000],&quot;85%&quot;:[70000],&quot;88%&quot;:[80000],&quot;91%&quot;:[90000],&quot;94%&quot;:[100000],&quot;max&quot;:[100001]}"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group slider-widget js-slider-widget">
                                                    <label>
                                                        <span>Eerste registratie</span>
                                                    </label>
                                                    <div class="slider-labels">
                                                        min. <span class="u-text-orange js-slider-labels">...</span>
                                                        max. <span class="u-text-orange js-slider-labels">...</span>
                                                    </div>
                                                    <div class="slider-wrapper">
                                                        <div class="slider-input u-pull-left">
                                                            <input type="number" class="form-control js-slider-textfield js-ignore-enterkey" placeholder="Alle" step="1" value="1900" min="1900"/>
                                                            <input id="minFirstRegistration" name="minFirstRegistration" value="1899" class="js-hidden-input u-hide"/>
                                                            <span class="unit js-unit-label u-text-grey-30"></span>
                                                        </div>
                                                        <div class="slider-input u-pull-right">
                                                            <input type="number" class="form-control js-slider-textfield js-ignore-enterkey" placeholder="Alle" step="1" value="2020" min="1900"/>
                                                            <input id="maxFirstRegistration" name="maxFirstRegistration" value="2021" class="js-hidden-input u-hide"/>
                                                            <span class="unit js-unit-label u-text-grey-30"></span>
                                                        </div>
                                                        <div class="slider js-slider" data-slider data-min="1900" data-max="2020" data-selected-min="1899" data-selected-max="2021" data-range="{&quot;min&quot;:[1899],&quot;3%&quot;:[1900],&quot;7%&quot;:[1970],&quot;10%&quot;:[1975],&quot;13%&quot;:[1980],&quot;17%&quot;:[1985],&quot;20%&quot;:[1990],&quot;23%&quot;:[1995],&quot;27%&quot;:[2000],&quot;30%&quot;:[2001],&quot;33%&quot;:[2002],&quot;37%&quot;:[2003],&quot;40%&quot;:[2004],&quot;43%&quot;:[2005],&quot;47%&quot;:[2006],&quot;50%&quot;:[2007],&quot;53%&quot;:[2008],&quot;57%&quot;:[2009],&quot;60%&quot;:[2010],&quot;63%&quot;:[2011],&quot;67%&quot;:[2012],&quot;70%&quot;:[2013],&quot;73%&quot;:[2014],&quot;77%&quot;:[2015],&quot;80%&quot;:[2016],&quot;83%&quot;:[2017],&quot;87%&quot;:[2018],&quot;90%&quot;:[2019],&quot;93%&quot;:[2020],&quot;max&quot;:[2021]}"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group slider-widget js-slider-widget">
                                                    <label>
                                                        <span>Bouwjaar</span>
                                                    </label>
                                                    <div class="slider-labels">
                                                        min. <span class="u-text-orange js-slider-labels">...</span>
                                                        max. <span class="u-text-orange js-slider-labels">...</span>
                                                    </div>
                                                    <div class="slider-wrapper">
                                                        <div class="slider-input u-pull-left">
                                                            <input type="number" class="form-control js-slider-textfield js-ignore-enterkey" placeholder="Alle" step="1" value="1900" min="1900"/>
                                                            <input id="minConstructionYear" name="minConstructionYear" value="1899" class="js-hidden-input u-hide"/>
                                                            <span class="unit js-unit-label u-text-grey-30"></span>
                                                        </div>
                                                        <div class="slider-input u-pull-right">
                                                            <input type="number" class="form-control js-slider-textfield js-ignore-enterkey" placeholder="Alle" step="1" value="2020" min="1900"/>
                                                            <input id="maxConstructionYear" name="maxConstructionYear" value="2021" class="js-hidden-input u-hide"/>
                                                            <span class="unit js-unit-label u-text-grey-30"></span>
                                                        </div>
                                                        <div class="slider js-slider" data-slider data-min="1900" data-max="2020" data-selected-min="1899" data-selected-max="2021" data-range="{&quot;min&quot;:[1899],&quot;3%&quot;:[1900],&quot;7%&quot;:[1970],&quot;10%&quot;:[1975],&quot;13%&quot;:[1980],&quot;17%&quot;:[1985],&quot;20%&quot;:[1990],&quot;23%&quot;:[1995],&quot;27%&quot;:[2000],&quot;30%&quot;:[2001],&quot;33%&quot;:[2002],&quot;37%&quot;:[2003],&quot;40%&quot;:[2004],&quot;43%&quot;:[2005],&quot;47%&quot;:[2006],&quot;50%&quot;:[2007],&quot;53%&quot;:[2008],&quot;57%&quot;:[2009],&quot;60%&quot;:[2010],&quot;63%&quot;:[2011],&quot;67%&quot;:[2012],&quot;70%&quot;:[2013],&quot;73%&quot;:[2014],&quot;77%&quot;:[2015],&quot;80%&quot;:[2016],&quot;83%&quot;:[2017],&quot;87%&quot;:[2018],&quot;90%&quot;:[2019],&quot;93%&quot;:[2020],&quot;max&quot;:[2021]}"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group slider-widget js-slider-widget">
                                                    <label>
                                                        <span>Kilometerstand</span>
                                                    </label>
                                                    <div class="slider-labels">
                                                        min. <span class="u-text-orange js-slider-labels">...</span>
                                                        max. <span class="u-text-orange js-slider-labels">...</span>
                                                    </div>
                                                    <div class="slider-wrapper">
                                                        <div class="slider-input u-pull-left">
                                                            <input type="number" class="form-control js-slider-textfield js-ignore-enterkey" placeholder="Alle" step="1" value="5000" min="5000"/>
                                                            <input id="minMileage" name="minMileage" value="4999" class="js-hidden-input u-hide"/>
                                                            <span class="unit js-unit-label u-text-grey-30">km</span>
                                                        </div>
                                                        <div class="slider-input u-pull-right">
                                                            <input type="number" class="form-control js-slider-textfield js-ignore-enterkey" placeholder="Alle" step="1" value="200000" min="5000"/>
                                                            <input id="maxMileage" name="maxMileage" value="200001" class="js-hidden-input u-hide"/>
                                                            <span class="unit js-unit-label u-text-grey-30">km</span>
                                                        </div>
                                                        <div class="slider js-slider" data-slider data-min="5000" data-max="200000" data-selected-min="4999" data-selected-max="200001" data-range="{&quot;min&quot;:[4999],&quot;6%&quot;:[5000],&quot;13%&quot;:[10000],&quot;19%&quot;:[20000],&quot;25%&quot;:[30000],&quot;31%&quot;:[40000],&quot;38%&quot;:[50000],&quot;44%&quot;:[60000],&quot;50%&quot;:[70000],&quot;56%&quot;:[80000],&quot;63%&quot;:[90000],&quot;69%&quot;:[100000],&quot;75%&quot;:[125000],&quot;81%&quot;:[150000],&quot;88%&quot;:[200000],&quot;max&quot;:[200001]}"></div>
                                                    </div>
                                                </div>
                                                <div class="power-wrapper js-power-wrapper u-clearfix" data-conversionrate="1.359622">
                                                    <div class="form-group slider-widget js-slider-widget">
                                                        <label>
                                                            <span>Vermogen</span>
                                                        </label>
                                                        <div class="slider-labels">
                                                            min. <span class="u-text-orange js-slider-labels">...</span>
                                                            max. <span class="u-text-orange js-slider-labels">...</span>
                                                        </div>
                                                        <div class="slider-wrapper">
                                                            <div class="slider-input u-pull-left">
                                                                <input type="number" class="form-control js-slider-textfield js-exclude-input js-ignore-enterkey" placeholder="Alle" step="1" value="44" min="44"/>
                                                                <input id="minPower" name="minPower" value="43" class="js-hidden-input u-hide"/>
                                                                <span class="unit js-unit-label u-text-grey-30">PS</span>
                                                            </div>
                                                            <div class="slider-input u-pull-right">
                                                                <input type="number" class="form-control js-slider-textfield js-exclude-input js-ignore-enterkey" placeholder="Alle" step="1" value="410" min="44"/>
                                                                <input id="maxPower" name="maxPower" value="411" class="js-hidden-input u-hide"/>
                                                                <span class="unit js-unit-label u-text-grey-30">PS</span>
                                                            </div>
                                                            <div class="slider js-slider" data-slider data-min="44" data-max="410" data-selected-min="43" data-selected-max="411" data-range="{&quot;min&quot;:[43],&quot;7%&quot;:[44],&quot;14%&quot;:[55],&quot;21%&quot;:[66],&quot;29%&quot;:[74],&quot;36%&quot;:[96],&quot;43%&quot;:[118],&quot;50%&quot;:[162],&quot;57%&quot;:[235],&quot;64%&quot;:[279],&quot;71%&quot;:[309],&quot;79%&quot;:[350],&quot;86%&quot;:[410],&quot;max&quot;:[411]}"></div>
                                                        </div>
                                                    </div>
                                                    <div class="toggle-widget hidden-no-js js-power-unit u-pull-left">
                                                        <input id="powerUnit" class="toggle-input js-toggle-input" type="checkbox"/>
                                                        <span class="option1">PS</span>
                                                        <label for="powerUnit" class="toggle-label"></label>
                                                        <span class="option2">kW</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group g-col-l-3 g-col-m-6 g-col-s-12">
                                                <label for="vat">
                                                    <span>Btw</span>
                                                </label>
                                                <select class="form-control form-control--dropdown" name="vat" id="vat">
                                                    <option value="" selected="selected">Alle</option>
                                                    <option value="1">Btw verrekenbaar</option>
                                                    <option value="0">Btw niet verrekenbaar</option>
                                                </select>
                                            </div>
                                            <div class="form-group g-col-l-3 g-col-m-6 g-col-s-12">
                                                <label for="export">
                                                    <span>Alleen bedrijfs-, export- en importaanbiedingen</span>
                                                </label>
                                                <select class="form-control form-control--dropdown" name="export" id="export">
                                                    <option value="" selected="selected">Alle</option>
                                                    <option value="not">Niet tonen</option>
                                                    <option value="only">Alleen tonen</option>
                                                </select>
                                            </div>
                                            <div class="checkbox form-group g-col-l-3 g-col-m-6 g-col-s-12">
                                                <input type="checkbox" name="newCars" id="newCars_NEW" value="NEW" class=""/>
                                                <label for="newCars_NEW">Alleen nieuwe auto &#39;s</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Details Section -->
                        <!-- Equipment Section -->
                        <div class="cBox cBox--content">
                            <header class="cBox-header flex-header">
                                <div class="flex-headline">
                                    <h3>Eigenschappen</h3>
                                    <hr/>
                                </div>
                                <div>
                                    <button class="btn btn--muted js-clear-btn" data-clear="equipment-box" type="button">Verwijderen</button>
                                </div>
                            </header>
                            <div class="g-row">
                                <div class="form-element-row cBox-body g-col-12 js-truck-equipment-fragment" data-fieldsBox="equipment-box" data-fieldsBoxType="default">
                                    <div class="g-row dsp-flex-row"></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Equipment Section -->
                        <!-- Begin Regional Search Section -->
                        <div class="cBox cBox--content">
                            <header class="cBox-header flex-header">
                                <div class="flex-headline">
                                    <h3>Regionaal zoeken</h3>
                                    <hr/>
                                </div>
                                <div>
                                    <button class="btn btn--muted js-clear-regional-search js-clear-btn" data-clear="regional-search" type="button">Verwijderen</button>
                                </div>
                            </header>
                            <div class="g-row">
                                <div class="form-element-row cBox-body g-col-12" data-fieldsBox="regional-search" data-fieldsBoxType="regionalSearch">
                                    <div class="g-row">
                                        <div class="g-col-l-3 g-col-m-6 g-col-s-12">
                                            <div class="form-group multiselect-dropdown">
                                                <label for="countryCode" class="">
                                                    <span>Importeer auto &#39;s uit</span>
                                                </label>
                                                <select name="countryCode" id="countryCode" class="form-control form-control--dropdown js-select-countries selectpicker js-org-selectpicker" multiple>
                                                    <option value="" selected="selected">Alle</option>
                                                    <option value="DE">Duitsland</option>
                                                    <option value="FR">Frankrijk</option>
                                                    <option value="IT">Italië</option>
                                                    <option value="NL">Nederland</option>
                                                    <option value="AT">Oostenrijk</option>
                                                    <option value="PL">Polen</option>
                                                    <option value="RO">Roemenië</option>
                                                    <option value="CZ">Tsjechië</option>
                                                    <option value="&nbsp;" data-divider="true"></option>
                                                    <option value="BE">België</option>
                                                    <option value="BA">Bosnië en Herzegovina</option>
                                                    <option value="BG">Bulgarije</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="DK">Denemarken</option>
                                                    <option value="EE">Estland</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="GR">Griekenland</option>
                                                    <option value="HU">Hongarije</option>
                                                    <option value="IE">Ierland</option>
                                                    <option value="IS">IJsland</option>
                                                    <option value="IL">Israël</option>
                                                    <option value="HR">Kroatië</option>
                                                    <option value="LV">Letland</option>
                                                    <option value="LT">Litouwen</option>
                                                    <option value="LU">Luxemburg</option>
                                                    <option value="MK">Macedonië</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="NO">Noorwegen</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="RU">Russische Federatie</option>
                                                    <option value="RS">Servië</option>
                                                    <option value="SI">Slovenië</option>
                                                    <option value="SK">Slowakije</option>
                                                    <option value="ES">Spanje</option>
                                                    <option value="TR">Turkije</option>
                                                    <option value="US">USA</option>
                                                    <option value="AE">Verenigde Arabische Emiraten</option>
                                                    <option value="GB">Verenigd Koninkrijk</option>
                                                    <option value="SE">Zweden</option>
                                                    <option value="CH">Zwitserland</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="g-col-l-9 g-col-m-6 g-col-s-12">
                                            <div class="g-row">
                                                <div class="g-col-m-4 g-col-s-12">
                                                    <div class="radio form-group">
                                                        <input type="radio" name="locationFilter" id="locationFilter_false" value="false" class=" js-locationfilter-off" checked="checked"/>
                                                        <label for="locationFilter_false">Geen regionale beperkingen</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g-row">
                                                <div class="g-col-m-4 g-col-s-12 js-expand-dsp-map">
                                                    <div class="radio form-group">
                                                        <input type="radio" name="locationFilter" id="locationFilter_true" value="true" class=" js-locationfilter-on"/>
                                                        <label for="locationFilter_true">In de buurt van</label>
                                                    </div>
                                                </div>
                                                <div class="g-col-l-7 g-col-m-6 g-col-m-offset-0 g-col-s-9 g-col-s-offset-1 u-margin-bottom-18">
                                                    <input class="form-control location-name-input js-expand-dsp-map js-ignore-enterkey" type="text" name='locationName' id='locationName' autocomplete="off" placeholder="Stad of postcode invullen" value=""/>
                                                </div>
                                                <label class="g-col-l-1 g-col-m-2 g-col-s-2 hidden-s">+</label>
                                            </div>
                                            <div class="g-row">
                                                <div class="g-col-l-7 g-col-m-6 g-col-m-offset-4 g-col-s-9 g-col-s-offset-1">
                                                    <input class="form-control location-radius-input js-expand-dsp-map js-ignore-enterkey" type="text" name='radiusInKm' id="radiusInKm" autocomplete="off" placeholder="Radius invullen in km" value=""/>
                                                </div>
                                                <label for="radiusInKm" class="g-col-l-1 g-col-m-2 g-col-s-2 hidden-s">km</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="map collapse hidden-s hidden-m u-margin-top-18">
                                        <div id="mapData" data-lang="nl" data-region="nl" data-client="gme-marktplaats"></div>
                                        <div id="map_canvas" class="hidden-no-js"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Regional Search Section -->
                        <!-- Limit Search Results Section -->
                        <div class="cBox cBox--content">
                            <header class="cBox-header flex-header">
                                <div class="flex-headline">
                                    <h3>Beperk zoekresultaten</h3>
                                    <hr/>
                                </div>
                                <div>
                                    <button class="btn btn--muted js-clear-btn" data-clear="limit-search-results" type="button">Verwijderen</button>
                                </div>
                            </header>
                            <div class="g-row">
                                <div class="form-element-row cBox-body g-col-12 js-truck-limitSearchResults-fragment" data-fieldsBox="limit-search-results" data-fieldsBoxType="default">
                                    <div class="g-row dsp-flex-row">
                                        <div class="form-group g-col-l-3 g-col-m-6 g-col-s-12">
                                            <label for="sellerType">
                                                <span>Leverancier</span>
                                            </label>
                                            <select class="form-control form-control--dropdown" name="sellerType" id="sellerType">
                                                <option value="" selected="selected">Alle</option>
                                                <option value="FSBO">Privéverkoper</option>
                                                <option value="DEALER">Dealer</option>
                                            </select>
                                        </div>
                                        <div class="form-group g-col-l-3 g-col-m-6 g-col-s-12">
                                            <label for="adOnlineSince">
                                                <span>Advertentie online sinds</span>
                                            </label>
                                            <select class="form-control form-control--dropdown" name="adOnlineSince" id="adOnlineSince">
                                                <option value="" selected="selected">Alle</option>
                                                <option value="1">1 dag</option>
                                                <option value="3">3 dagen</option>
                                                <option value="7">7 dagen</option>
                                                <option value="14">14 dagen</option>
                                            </select>
                                        </div>
                                        <div class="form-group g-col-l-3 g-col-m-6 g-col-s-12">
                                            <label for="numberOfPreviousOwners">
                                                <span>Aantal vorige eigenaars</span>
                                            </label>
                                            <select class="form-control form-control--dropdown" name="numberOfPreviousOwners" id="numberOfPreviousOwners">
                                                <option value="" selected="selected">Alle</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="form-group g-col-l-3 g-col-m-6 g-col-s-12">
                                            <label for="damagedUnrepaired">
                                                <span>Beschadigde voertuigen</span>
                                            </label>
                                            <select class="form-control form-control--dropdown" name="damagedUnrepaired" id="damagedUnrepaired">
                                                <option value="">Toon ook</option>
                                                <option value="true">Toon alleen</option>
                                                <option value="false" selected="selected">Niet tonen</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Limit Search Results Section -->
                        <div class="leaderboard-ad-box g-row hidden-s hidden-m">
                            <div id='div-gpt-ad-1440493196850-0-SB_LowerBanner'>
                                <script type='text/javascript'>
                                    var ids = window.ads.filter(function(i) {
                                        return i.id === "div-gpt-ad-1440493196850-0-SB_LowerBanner";
                                    }).map(function(i) {
                                        return i.id;
                                    });
                                    if (ids.indexOf("div-gpt-ad-1440493196850-0-SB_LowerBanner") >= 0) {
                                        googletag.cmd.push(function() {
                                            googletag.display('div-gpt-ad-1440493196850-0-SB_LowerBanner');
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="dsp-truck-search-loading js-dsp-truck-search-loading u-text-center">
                        <i class="loading--xxl">
                            <span></span>
                        </i>
                    </div>
                </form>
            </section>
            <button class="btn btn--muted btn-scroll-to-top js-scroll-top u-text-normal hidden-print" data-scroll-to="body" data-adjust-top="0">
                <i class="gicon-submenu-close-black-s icon--xs"></i>
                <span>Terug naar boven</span>
            </button>
        </div>
    </div>
    <footer class="footer u-margin-top-18 hidden-print">
        <div class="footer-linkbar">
            <hr/>
            <div class="links u-margin-top-18">
                <a id="footImpr" class="link--hidden" href="/nl/imprint/pg:imprint">Imprint</a>
                <a id="footPriv" class="link--hidden" href="/nl/privacy/pg:privacy">Privacy</a>
                <a id="footPrivSettings" class="link--hidden" href="/nl/privacy-instellingen/pg:consent">Privacy-instellingen</a>
                <a id="cookiePolicy" class="link--hidden" href="https://www.mobile.de/service/cookiePolicy?lang=en">Verklaring over het gebruik van cookies</a>
                <a class="oba-link link--hidden" target="_self" href="/nl/online+behavioural+advertising/pg:oba">
                    <i class="gicon-oba-s icon--s"></i>
                    Online behavioural advertising
                </a>
                <a id="footFeedbDeskt" class="dropdown-toggle hidden-s link--hidden" href="https://secure.opinionlab.com/ccc01/o.asp?id=XFRdxNMk&amp;referer=https%3A%2F%2Fwww.mobile.de%2Fnl%2Fdsp%2Fsg%3Atruck%2Cdmg%3Afalse%2Cnws%3Atrue%2Fpg%3Adsptruck" target="_blank" rel="noopener noreferrer">Feedback</a>
                <a id="footFeedbPhone" class="dropdown-toggle visible-s-block link--hidden" href="https://secure.opinionlab.com/ccc01/o.asp?id=UTPsnTSU&amp;referer=https%3A%2F%2Fwww.mobile.de%2Fnl%2Fdsp%2Fsg%3Atruck%2Cdmg%3Afalse%2Cnws%3Atrue%2Fpg%3Adsptruck" target="_blank" rel="noopener noreferrer">Feedback</a>
            </div>
        </div>
    </footer>
    <script src="https://static.classistatic.de/showroom/static/js/dsptruck-2f22874802.js?minimize=false" type="text/javascript"></script>
    <script src="https://static.classistatic.de/showroom/static/soy/common_macros_nl.soy.js?hash=1d487e8ae908990c3bbd47f593addc02" type="text/javascript"></script>
    <script src="https://static.classistatic.de/showroom/static/soy/widgets_nl.soy.js?hash=1d487e8ae908990c3bbd47f593addc02" type="text/javascript"></script>
    <script src="https://static.classistatic.de/showroom/static/soy/dsp_macros_nl.soy.js?hash=1d487e8ae908990c3bbd47f593addc02" type="text/javascript"></script>
    <script type="text/javascript">
        var _cf = _cf || [];
        _cf.push(['_setFsp', true]);
        _cf.push(['_setBm', true]);
        _cf.push(['_setAu', '{{asset('front_assets/js/c5031d369f198fcefe31fe84d4ce2c.js')}}']);
    </script>
    <!--End serch -->

<div class="skyDspRight">
    <div id="DSP_SKY_RIGHT" class="adv DSP_SKY_RIGHT_en">
        <div id="DSP_SKY_RIGHT-container" class="ad_container" style="width:auto">
            <script type="text/javascript">
                googletag.cmd.push(function() {
                    googletag.display('DSP_SKY_RIGHT-container');
                });
            </script>
        </div>
        <div id="DSP_SKY_RIGHT-criteo-container" class="ad_container" style=" margin-left: auto; margin-right: auto; display:none; width:160px; height:600px;">
            <script>
                mobile.adv.criteoAdBlockTraffic.createPlacement("1236529", "DSP_SKY_RIGHT", "", "", "passback-160x600");
            </script>
        </div>
    </div>
</div>
</div>


    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree"
                                id="list-group-men" data-children=".sub-men">
                                @foreach($categories as $cat)
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#{{$cat->id}}"
                                        data-toggle="collapse" aria-expanded="true"
                                        aria-controls="sub-men1">{{$cat->name}}
                                        <small class="text-muted"></small>
                                    </a>
                                    <div class="collapse show" id="{{$cat->id}}" data-parent="#list-group-men">
                                        <div class="list-group">
                                            @foreach($cat->categories as $key=>$subcat)
                                            <a href="{{url('/categories/'.$subcat->id)}}"
                                                class="list-group-item list-group-item-action active">{{$subcat->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">


                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i
                                                class="fa fa-th"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        @foreach($products as $product)
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="uploads/products/{{$product->image}}" class="img-fluid"
                                                        alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Compare"><i class="fas fa-sync-alt"></i></a>
                                                            </li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                                    title="Add to Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                        <a class="cart" href="{{url('/products/'.$product->id)}}">Detail
                                                            Page</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>{{$product->description}}</h4>
                                                    <h5>{{$product->price}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>latest blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="#" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet
                                    urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed
                                    mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i
                                            class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i
                                            class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i
                                            class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="#" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet
                                    urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed
                                    mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i
                                            class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i
                                            class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i
                                            class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="#" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet
                                    urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed
                                    mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i
                                            class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i
                                            class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i
                                            class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="#" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="#" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="#" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="#" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="#" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="#" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="#" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="#" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="#" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="#" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->

</body>

@endsection
