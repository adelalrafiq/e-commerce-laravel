if ("undefined" !== typeof mobile.dart) {
    mobile.dart.setAdData({
        "ad": {
            "specifics": {}
        },
        "adSegment": "Truck",
        "usersIpAddress": "91.181.203.0",
        "isDealer": false
    });
}
if ("undefined" !== typeof mobile.adv.page) {
    mobile.adv.page.storeVisit();
}
mobile = (mobile || {});
mobile.adv = (mobile.adv || {});
mobile.adv.adSlots = {};
googletag.cmd.push(function() {
    mobile.adv.adSlots.DSP_BILLBOARD = googletag.defineSlot("/4288/mobile.detailsearch/homepage", ["fluid", [468, 60], [728, 90], [750, 100], [750, 200], [800, 250], [970, 250]], "DSP_BILLBOARD-container");
    mobile.adv.adSlots.DSP_BILLBOARD.setTargeting("a", "65").setTargeting("pos", "DSP_BILLBOARD").addService(googletag.pubads());
    mobile.adv.adSlots.DSP_SKY_LEFT = googletag.defineSlot("/4288/mobile.detailsearch/homepage", ["fluid", [120, 600], [160, 600], [200, 600], [300, 600]], "DSP_SKY_LEFT-container").defineSizeMapping([[[1374, 0], ["fluid", [120, 600], [160, 600], [200, 600], [300, 600]]], [[1206, 0], ["fluid", [120, 600], [160, 600]]], [[1158, 0], ["fluid", [120, 600]]], [[0, 0], []]]);
    mobile.adv.adSlots.DSP_SKY_LEFT.setTargeting("a", "47").setTargeting("pos", "DSP_SKY_LEFT").addService(googletag.pubads());
    mobile.adv.adSlots.DSP_SKY_RIGHT = googletag.defineSlot("/4288/mobile.detailsearch/homepage", ["fluid", [120, 600], [160, 600], [200, 600], [300, 600]], "DSP_SKY_RIGHT-container").defineSizeMapping([[[1374, 0], ["fluid", [120, 600], [160, 600], [200, 600], [300, 600]]], [[1206, 0], ["fluid", [120, 600], [160, 600]]], [[1158, 0], ["fluid", [120, 600]]], [[0, 0], []]]);
    mobile.adv.adSlots.DSP_SKY_RIGHT.setTargeting("a", ["65", "77"]).setTargeting("pos", "DSP_SKY_RIGHT").addService(googletag.pubads());
    mobile.adv.adSlots.DSP_PIXEL = googletag.defineSlot("/4288/mobile.Segmente/Detailsuchseite", [[1, 1]], "DSP_PIXEL-container");
    mobile.adv.adSlots.DSP_PIXEL.setTargeting("a", "65").setTargeting("pos", "DSP_PIXEL").addService(googletag.pubads());
});
googletag.cmd.push(function() {
    googletag.pubads().set("page_url", "https://" + location.host + location.pathname).setTargeting("ab", ["112", "dt05"]).setTargeting("coSt", "BOrWpMCOrWpMCB9ABBDECw-AAAAsx7_______9______9uz_Ov_v_f__33e8__9v_l_7_-___u_-3zd4u_1vf99yfm1-7etr3tp_87ues2_Xur__79__3z3_9pxP78k89r7337Ew_v-_v8b7BCKNgA").setTargeting("pt", "DetailedSearches").setTargeting("g_hd", "7bd003ec65670fb75ea5e9cba44da7ed955f70c425819ec54e4e3453a0182ef2").setTargeting("ch", "02").setTargeting("hn", "suchen.mobile.de").setTargeting("g_pn", "1").setTargeting("geo", "be|9340|impe|50.9602|3.95239").setTargeting("ct", "truck").setTargeting("site", "01").setTargeting("lang", "en").setTargeting("li", "0").setTargeting("plz", "9340").setTargeting("gcon", window.mobile && window.mobile.consent && window.mobile.consent.isGoogleAdvertisingAllowed() ? "01" : "02").setTargeting("fcon", window.mobile && window.mobile.consent && window.mobile.consent.isFacebookMarketingAllowed() ? "01" : "02");
    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs(true);
    if (mobile && mobile.consent && !mobile.consent.isGoogleAdvertisingAllowed()) {
        googletag.pubads().setRequestNonPersonalizedAds(1);
    }
    googletag.pubads().setPublisherProvidedId("be17319d52a530de90698ad8a0f82ea96614baead9a3a272de60daa147fd2a01");
    googletag.enableServices();
});
var PREBID_TIMEOUT = parseInt(localStorage.prebidTimeout) || 1500;
var adUnits = [{
    "code": "DSP_BILLBOARD-container",
    "bids": [{
        "bidder": "appnexus",
        "params": {
            "placementId": "10497041"
        }
    }, {
        "bidder": "criteo",
        "params": {
            "zoneId": 1171663
        }
    }, {
        "bidder": "criteo",
        "params": {
            "zoneId": 1171670
        }
    }, {
        "bidder": "criteo",
        "params": {
            "zoneId": 1171692
        }
    }, {
        "bidder": "ix",
        "params": {
            "size": [728, 90],
            "siteId": "206794"
        }
    }, {
        "bidder": "ix",
        "params": {
            "size": [800, 250],
            "siteId": "206794"
        }
    }, {
        "bidder": "ix",
        "params": {
            "size": [970, 250],
            "siteId": "206794"
        }
    }, {
        "bidder": "openx",
        "params": {
            "delDomain": "mobile-de-d.openx.net",
            "unit": "538780424"
        }
    }, {
        "bidder": "pubmatic",
        "params": {
            "pmzoneid": "mobile.deDSS",
            "publisherId": "90485",
            "adSlot": "mobile.deDSS"
        }
    }, {
        "bidder": "rubicon",
        "params": {
            "accountId": "10812",
            "siteId": "24988",
            "zoneId": "595684",
            "position": "atf",
            "keywords": ["classic", "desktop"],
            "sizes": [2, 57, 125]
        }
    }, {
        "bidder": "yieldlab",
        "params": {
            "adslotId": "7055568",
            "supplyId": "11795"
        }
    }, {
        "bidder": "yieldlab",
        "params": {
            "adslotId": "7055569",
            "supplyId": "11795"
        }
    }, {
        "bidder": "yieldlab",
        "params": {
            "adslotId": "7055570",
            "supplyId": "11795"
        }
    }],
    "mediaTypes": {
        "banner": {
            "sizes": [[728, 90], [800, 250], [970, 250]]
        }
    }
}, {
    "code": "DSP_SKY_LEFT-container",
    "bids": [{
        "bidder": "appnexus",
        "params": {
            "placementId": "12783936"
        }
    }, {
        "bidder": "criteo",
        "params": {
            "zoneId": 1171667
        }
    }, {
        "bidder": "criteo",
        "params": {
            "zoneId": 1177805
        }
    }, {
        "bidder": "ix",
        "params": {
            "size": [120, 600],
            "siteId": "247522"
        }
    }, {
        "bidder": "ix",
        "params": {
            "size": [160, 600],
            "siteId": "247522"
        }
    }, {
        "bidder": "ix",
        "params": {
            "size": [300, 600],
            "siteId": "247522"
        }
    }, {
        "bidder": "openx",
        "params": {
            "delDomain": "mobile-de-d.openx.net",
            "unit": "539773279"
        }
    }, {
        "bidder": "pubmatic",
        "params": {
            "pmzoneid": "mobile.deDSSlinks",
            "publisherId": "90485",
            "adSlot": "mobile.deDSSlinks"
        }
    }, {
        "bidder": "rubicon",
        "params": {
            "accountId": "10812",
            "keywords": ["classic", "desktop"],
            "sizes": [10, 9, 8],
            "siteId": "24988",
            "zoneId": "837382",
            "position": "atf",
            "inventory": {
                "Channel": "Truck"
            }
        }
    }, {
        "bidder": "yieldlab",
        "params": {
            "adslotId": "7055574",
            "supplyId": "11795"
        }
    }, {
        "bidder": "yieldlab",
        "params": {
            "adslotId": "7055575",
            "supplyId": "11795"
        }
    }, {
        "bidder": "yieldlab",
        "params": {
            "adslotId": "7055577",
            "supplyId": "11795"
        }
    }],
    "mediaTypes": {
        "banner": {
            "sizes": [[120, 600], [160, 600], [300, 600]]
        }
    }
}, {
    "code": "DSP_SKY_RIGHT-container",
    "bids": [{
        "bidder": "appnexus",
        "params": {
            "placementId": "10497053"
        }
    }, {
        "bidder": "criteo",
        "params": {
            "zoneId": 1171667
        }
    }, {
        "bidder": "criteo",
        "params": {
            "zoneId": 1177805
        }
    }, {
        "bidder": "ix",
        "params": {
            "size": [120, 600],
            "siteId": "208046"
        }
    }, {
        "bidder": "ix",
        "params": {
            "size": [160, 600],
            "siteId": "208046"
        }
    }, {
        "bidder": "ix",
        "params": {
            "size": [300, 600],
            "siteId": "208046"
        }
    }, {
        "bidder": "openx",
        "params": {
            "delDomain": "mobile-de-d.openx.net",
            "unit": "538780423"
        }
    }, {
        "bidder": "pubmatic",
        "params": {
            "pmzoneid": "mobile.deDSSrechts",
            "publisherId": "90485",
            "adSlot": "mobile.deDSSrechts"
        }
    }, {
        "bidder": "rubicon",
        "params": {
            "accountId": "10812",
            "siteId": "24988",
            "zoneId": "595684",
            "position": "atf",
            "keywords": ["classic", "desktop"],
            "sizes": [10, 9, 8]
        }
    }, {
        "bidder": "yieldlab",
        "params": {
            "adslotId": "7055571",
            "supplyId": "11795"
        }
    }, {
        "bidder": "yieldlab",
        "params": {
            "adslotId": "7055572",
            "supplyId": "11795"
        }
    }, {
        "bidder": "yieldlab",
        "params": {
            "adslotId": "7055576",
            "supplyId": "11795"
        }
    }],
    "mediaTypes": {
        "banner": {
            "sizes": [[120, 600], [160, 600], [300, 600]]
        }
    }
}];
var isHeaderBiddingDone = false;
function adSlotsById(adSlotIds) {
    var adSlots = [];
    adSlotIds.forEach(function(adSlotId) {
        if (mobile.adv.adSlots[adSlotId]) {
            adSlots.push(mobile.adv.adSlots[adSlotId]);
        }
    });
    return adSlots;
}
function bidsBackHandler(adUnitCodes, adSlots, isFailSafe) {
    if (isHeaderBiddingDone) {
        return;
    }
    isHeaderBiddingDone = true;
    pbjs.setTargetingForGPTAsync(adUnitCodes);
    googletag.pubads().refresh(adSlots);
}
;function refreshBids(adSlotsIds) {
    var adUnitCodes = [];
    adSlotsIds.forEach(function(adSlotId) {
        adUnitCodes.push(adSlotId + "-container")
    });
    var adSlots = adSlotsById(adSlotsIds);
    if (window.mobile.consent && !window.mobile.consent.isGoogleAdvertisingAllowed()) {
        googletag.pubads().refresh(adSlots);
        return;
    }
    isHeaderBiddingDone = false;
    if (adUnitCodes.length > 0) {
        pbjs.que.push(function() {
            pbjs.requestBids({
                timeout: PREBID_TIMEOUT,
                adUnitCodes: adUnitCodes,
                bidsBackHandler: function() {
                    bidsBackHandler(adUnitCodes, adSlots);
                }
            });
        });
    }
    setTimeout(function() {
        bidsBackHandler(adUnitCodes, adSlots, true);
    }, 1500);
}
var pbjs = pbjs || {};
pbjs.que = pbjs.que || [];
pbjs.adserverRequestSent = false;
pbjs.que.push(function() {
    pbjs.setConfig({
        consentManagement: {
            cmpApi: 'iab',
            timeout: 8000,
            allowAuctionWithoutConsent: true
        },
        priceGranularity: {
            buckets: [{
                min: 0,
                max: 6,
                increment: 0.01
            }, {
                min: 6,
                max: 18,
                increment: 0.05
            }, {
                min: 18,
                max: 30,
                increment: 0.5
            }, {
                min: 30,
                max: 50,
                increment: 1
            }]
        },
        currency: {
            adServerCurrency: 'EUR',
            granularityMultiplier: 1,
            bidderCurrencyDefault: {
                'appnexus': 'USD',
                'rubicon': 'USD',
                'criteo': 'EUR',
                'ix': 'EUR',
                'pubmatic': 'USD',
                'openx': 'EUR'
            }
        },
        userSync: {
            filterSettings: {
                iframe: {
                    bidders: ['openx'],
                    filter: 'include'
                }
            }
        }
    });
});
var instantlyRenderedPreBidAdSlots = [];
instantlyRenderedPreBidAdSlots.push("DSP_BILLBOARD");
instantlyRenderedPreBidAdSlots.push("DSP_SKY_LEFT");
instantlyRenderedPreBidAdSlots.push("DSP_SKY_RIGHT");
googletag.cmd.push(function() {
    pbjs.que.push(function() {
        googletag.pubads().setTargeting("g_prebid_version", pbjs.version);
        if (instantlyRenderedPreBidAdSlots.length > 0) {
            pbjs.addAdUnits(adUnits);
            refreshBids(instantlyRenderedPreBidAdSlots);
        }
    });
});
googletag.cmd.push(function() {
    mobile && mobile.adv && mobile.adv.iab && mobile.adv.iab.post();
});
</script>
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
              , n = "lo24xoyxhucuexrrrivq-f-8ae869d6e-clientnsv4-s.akamaihd.net"
              , i = {
                "ak.v": 25,
                "ak.cp": "463241",
                "ak.ai": parseInt("344245", 10),
                "ak.ol": "0",
                "ak.cr": 14,
                "ak.ipv": 4,
                "ak.proto": "h2",
                "ak.rid": "41566561",
                "ak.r": 30128,
                "ak.a2": a,
                "ak.m": "dscb",
                "ak.n": "essl",
                "ak.bpcip": "91.181.203.0",
                "ak.cport": 56696,
                "ak.gh": "81.240.255.133",
                "ak.quicv": "",
                "ak.tlsv": "tls1.2",
                "ak.0rtt": "",
                "ak.csrc": "-",
                "ak.acc": "",
                "ak.t": "1580304939"
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
<body class="page-centered">
<div id="I_01_PAGE" class="adv I_01_PAGE_en">
<script>
    var iam_fadeout_flash = false
      , iam_fadeout_iframe = false
      , iam_fadeout_form = false;
    var iam_position_top = 150
      , iam_data = {
        "st": "mobile",
        "cp": "DE/EN/OB/S/L/M/G",
        "sv": "in",
        "sc": "yes"
    };
    (function() {
        var iam_local = iam_data
          , pollingIntervalMs = 250
          , maxPollingTimeMs = 30000;
        return function waitForIom() {
            if (typeof iom !== "undefined") {
                iam_data = iam_local;
                iom.c(iam_local, 1);
                return;
            }
            waitForIom.c = waitForIom.c + pollingIntervalMs || 1;
            if (waitForIom.c < maxPollingTimeMs) {
                setTimeout(waitForIom, pollingIntervalMs);
            }
        }
    }
    )()();
