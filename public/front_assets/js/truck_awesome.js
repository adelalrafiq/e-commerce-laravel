window._trackJs = {
    token: "71831be17d4e4cb5a019b60b2dbb0c5e",
    application: "public-search-germany",
    version: "2020-01-28-10-14-25.master.7bfdc9a68389dc8c7c517595e63b3a5be9aa5749",
    userId: "706781d9-3ea4-4f88-b234-bf82685cabed",
    enabled: true && Math.floor((Math.random() * 1000) + 1) === 1,
    onError: function(payload, error) {
        payload.metadata.push({
            key: "lang",
            value: 'en'
        });
        payload.metadata.push({
            key: "deviceType",
            value: 'DESKTOP'
        });
        payload.metadata.push({
            key: "viClientId",
            value: '706781d9-3ea4-4f88-b234-bf82685cabed'
        });
        payload.metadata.push({
            key: "abTests",
            value: JSON.stringify({
                "cd117-vip-gal-below-change-fin": "vip-gal-below-change-fin-control-web",
                "cd195-offer-space-fin": "NO_VARIANT",
                "cd198-srp-removesrplink-fin": "NO_VARIANT",
                "cd200-vip-sliders-fin": "NO_VARIANT",
                "cd191-vip-financing-car-valuation": "NO_VARIANT",
                "cd124-header-newlayout-fin": "NO_VARIANT",
                "cd183-sbs-reboost": "NO_VARIANT",
                "cd175-equal-choice": "NO_VARIANT"
            })
        });
        return true;
    }
};
!function(a, b, c) {
    "use awesome";
    if (a.trackJs)
        a.console && a.console.warn && a.console.warn("TrackJS global conflict");
    else {
        var d = function(a, b, c, d, e) {
            this.util = a,
            this.onError = b,
            this.onFault = c,
            this.options = e,
            e.enabled && this.initialize(d)
        };
        d.prototype = {
            initialize: function(a) {
                n.forEach(["EventTarget", "Node", "XMLHttpRequest"], function(b) {
                    n.has(a, b + ".prototype.addEventListener") && (b = a[b].prototype,
                    b.hasOwnProperty("addEventListener") && (this.wrapAndCatch(b, "addEventListener", 1),
                    this.wrapRemoveEventListener(b)))
                }, this),
                this.wrapAndCatch(a, "setTimeout", 0),
                this.wrapAndCatch(a, "setInterval", 0)
            },
            wrapAndCatch: function(a, b, c) {
                var d = this
                  , f = a[b];
                n.isWrappableFunction(f) && (a[b] = function() {
                    try {
                        var g, h, i = Array.prototype.slice.call(arguments), j = i[c];
                        if (d.options.bindStack)
                            try {
                                throw Error()
                            } catch (a) {
                                h = a.stack,
                                g = d.util.isoNow()
                            }
                        var k = function() {
                            try {
                                if (n.isObject(j))
                                    return j.handleEvent.apply(j, arguments);
                                if (n.isFunction(j))
                                    return j.apply(this, arguments)
                            } catch (a) {
                                throw d.onError("catch", a, {
                                    bindTime: g,
                                    bindStack: h
                                }),
                                n.wrapError(a)
                            }
                        };
                        if ("addEventListener" === b && (this._trackJsEvt || (this._trackJsEvt = new e),
                        this._trackJsEvt.get(i[0], j, i[2])))
                            return;
                        try {
                            j && (n.isWrappableFunction(j) || n.isWrappableFunction(j.handleEvent)) && (i[c] = k,
                            "addEventListener" === b && this._trackJsEvt.add(i[0], j, i[2], i[c]))
                        } catch (a) {
                            return f.apply(this, arguments)
                        }
                        return f.apply(this, i)
                    } catch (c) {
                        a[b] = f,
                        d.onFault(c)
                    }
                }
                )
            },
            wrapRemoveEventListener: function(a) {
                if (a && a.removeEventListener && this.util.hasFunction(a.removeEventListener, "call")) {
                    var b = a.removeEventListener;
                    a.removeEventListener = function(a, c, d) {
                        if (this._trackJsEvt) {
                            var e = this._trackJsEvt.get(a, c, d);
                            return e && this._trackJsEvt.remove(a, c, d),
                            b.call(this, a, e, d)
                        }
                        return b.call(this, a, c, d)
                    }
                }
            }
        };
        var e = function() {
            this.events = []
        };
        e.prototype = {
            add: function(a, b, c, d) {
                -1 >= this.indexOf(a, b, c) && (c = this.getEventOptions(c),
                this.events.push([a, b, c.capture, c.once, c.passive, d]))
            },
            get: function(a, b, d) {
                return a = this.indexOf(a, b, d),
                0 > a ? c : this.events[a][5]
            },
            getEventOptions: function(a) {
                var b = {
                    capture: !1,
                    once: !1,
                    passive: !1
                };
                return n.isBoolean(a) ? n.extend(b, {
                    capture: a
                }) : n.extend(b, a)
            },
            indexOf: function(a, b, c) {
                c = this.getEventOptions(c);
                for (var d = 0; d < this.events.length; d++) {
                    var e = this.events[d];
                    if (e[0] === a && e[1] === b && e[2] === c.capture && e[3] === c.once && e[4] === c.passive)
                        return d
                }
                return -1
            },
            remove: function(a, b, c) {
                a = this.indexOf(a, b, c),
                a >= 0 && this.events.splice(a, 1)
            }
        };
        var f = function(a, b) {
            this.util = a,
            this.initCurrent(b)
        };
        f.prototype = {
            current: {},
            initOnly: {
                cookie: !0,
                enabled: !0,
                token: !0,
                callback: {
                    enabled: !0
                },
                console: {
                    enabled: !0
                },
                navigation: {
                    enabled: !0
                },
                network: {
                    enabled: !0
                },
                visitor: {
                    enabled: !0
                },
                window: {
                    enabled: !0,
                    promise: !0
                }
            },
            defaults: {
                application: "",
                cookie: !1,
                enabled: !0,
                errorURL: "https://capture.trackjs.com/capture",
                errorNoSSLURL: "http://capture.trackjs.com/capture",
                faultURL: "https://usage.trackjs.com/fault.gif",
                onError: function() {
                    return !0
                },
                serialize: function(a) {
                    if (a && "string" == typeof a)
                        return a;
                    if ("number" == typeof a && isNaN(a))
                        return "NaN";
                    if ("" === a)
                        return "Empty String";
                    var b;
                    try {
                        b = JSON.stringify(a)
                    } catch (a) {
                        b = "Unserializable Object"
                    }
                    return b ? b : a === c ? "undefined" : a && a.toString ? "" + a : "unknown"
                },
                sessionId: "",
                token: "",
                userId: "",
                version: "",
                callback: {
                    enabled: !0,
                    bindStack: !1
                },
                console: {
                    enabled: !0,
                    display: !0,
                    error: !0,
                    warn: !1,
                    watch: ["log", "debug", "info", "warn", "error"]
                },
                navigation: {
                    enabled: !0
                },
                network: {
                    enabled: !0,
                    error: !0
                },
                visitor: {
                    enabled: !0
                },
                usageURL: "https://usage.trackjs.com/usage.gif",
                window: {
                    enabled: !0,
                    promise: !0
                }
            },
            initCurrent: function(a) {
                return this.validate(a, this.defaults, "config", {}) ? (this.current = this.util.extend(this.current, this.defaults, a),
                !0) : (this.current = this.util.extend(this.current, this.defaults),
                !1)
            },
            setCurrent: function(a) {
                return !!this.validate(a, this.defaults, "config", this.initOnly) && (this.current = this.util.extend(this.current, a),
                !0)
            },
            validate: function(a, b, c, d) {
                var e = !0;
                c = c || "",
                d = d || {};
                for (var f in a)
                    if (a.hasOwnProperty(f))
                        if (b.hasOwnProperty(f)) {
                            var g = typeof b[f];
                            g !== typeof a[f] ? (console.warn(c + "." + f + ": property must be type " + g + "."),
                            e = !1) : "[object Array]" !== Object.prototype.toString.call(a[f]) || this.validateArray(a[f], b[f], c + "." + f) ? "[object Object]" === Object.prototype.toString.call(a[f]) ? e = this.validate(a[f], b[f], c + "." + f, d[f]) : d.hasOwnProperty(f) && (console.warn(c + "." + f + ": property cannot be set after load."),
                            e = !1) : e = !1
                        } else
                            console.warn(c + "." + f + ": property not supported."),
                            e = !1;
                return e
            },
            validateArray: function(a, b, c) {
                var d = !0;
                c = c || "";
                for (var e = 0; e < a.length; e++)
                    this.util.contains(b, a[e]) || (console.warn(c + "[" + e + "]: invalid value: " + a[e] + "."),
                    d = !1);
                return d
            }
        };
        var g = function(a, b, c, d, e, f, g) {
            this.util = a,
            this.log = b,
            this.onError = c,
            this.onFault = d,
            this.serialize = e,
            g.enabled && (f.console = this.wrapConsoleObject(f.console, g))
        };
        g.prototype = {
            wrapConsoleObject: function(a, b) {
                a = a || {};
                var c, d = a.log || function() {}
                , e = this;
                for (c = 0; c < b.watch.length; c++)
                    (function(c) {
                        var f = a[c] || d;
                        a[c] = function() {
                            try {
                                var a = Array.prototype.slice.call(arguments);
                                if (e.log.add("c", {
                                    timestamp: e.util.isoNow(),
                                    severity: c,
                                    message: e.serialize(1 === a.length ? a[0] : a)
                                }),
                                b.error && "error" === c || b.warn && "warn" === c)
                                    try {
                                        throw Error(e.serialize(1 === a.length ? a[0] : a))
                                    } catch (a) {
                                        e.onError("console", a)
                                    }
                                b.display && (e.util.hasFunction(f, "apply") ? f.apply(this, a) : f(a[0], a[1], a[2]))
                            } catch (a) {
                                e.onFault(a)
                            }
                        }
                    }
                    )(b.watch[c]);
                return a
            },
            report: function() {
                return this.log.all("c")
            }
        };
        var h = function(a, b, c, d, e) {
            this.config = a,
            this.util = b,
            this.log = c,
            this.window = d,
            this.document = e,
            this.correlationId = this.token = null,
            this.initialize()
        };
        h.prototype = {
            initialize: function() {
                this.token = this.getCustomerToken(),
                this.correlationId = this.getCorrelationId()
            },
            getCustomerToken: function() {
                if (this.config.current.token)
                    return this.config.current.token;
                var a = this.document.getElementsByTagName("script");
                return a[a.length - 1].getAttribute("data-token")
            },
            getCorrelationId: function() {
                var a;
                if (!this.config.current.cookie)
                    return this.util.uuid();
                try {
                    a = this.document.cookie.replace(/(?:(?:^|.*;\s*)TrackJS\s*\=\s*([^;]*).*$)|^.*$/, "$1"),
                    a || (a = this.util.uuid(),
                    this.document.cookie = "TrackJS=" + a + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/")
                } catch (b) {
                    a = this.util.uuid()
                }
                return a
            },
            report: function() {
                return {
                    application: this.config.current.application,
                    correlationId: this.correlationId,
                    sessionId: this.config.current.sessionId,
                    token: this.token,
                    userId: this.config.current.userId,
                    version: this.config.current.version
                }
            }
        };
        var i = function(a) {
            this.loadedOn = (new Date).getTime(),
            this.window = a
        };
        i.prototype = {
            discoverDependencies: function() {
                var a, b = {};
                this.window.jQuery && this.window.jQuery.fn && this.window.jQuery.fn.jquery && (b.jQuery = this.window.jQuery.fn.jquery),
                this.window.jQuery && this.window.jQuery.ui && this.window.jQuery.ui.version && (b.jQueryUI = this.window.jQuery.ui.version),
                this.window.angular && this.window.angular.version && this.window.angular.version.full && (b.angular = this.window.angular.version.full);
                for (a in this.window)
                    if ("_trackJs" !== a && "_trackJS" !== a && "_trackjs" !== a && "webkitStorageInfo" !== a && "webkitIndexedDB" !== a && "top" !== a && "parent" !== a && "frameElement" !== a)
                        try {
                            if (this.window[a]) {
                                var c = this.window[a].version || this.window[a].Version || this.window[a].VERSION;
                                "string" == typeof c && (b[a] = c)
                            }
                        } catch (a) {}
                return b
            },
            report: function() {
                return {
                    age: (new Date).getTime() - this.loadedOn,
                    dependencies: this.discoverDependencies(),
                    userAgent: this.window.navigator.userAgent,
                    viewportHeight: this.window.document.documentElement.clientHeight,
                    viewportWidth: this.window.document.documentElement.clientWidth
                }
            }
        };
        var j = function(a) {
            this.util = a,
            this.appender = [],
            this.maxLength = 30
        };
        j.prototype = {
            all: function(a) {
                var b, c, d = [];
                for (c = 0; c < this.appender.length; c++)
                    (b = this.appender[c]) && b.category === a && d.push(b.value);
                return d
            },
            clear: function() {
                this.appender.length = 0
            },
            truncate: function() {
                this.appender.length > this.maxLength && (this.appender = this.appender.slice(Math.max(this.appender.length - this.maxLength, 0)))
            },
            add: function(a, b) {
                var c = this.util.uuid();
                return this.appender.push({
                    key: c,
                    category: a,
                    value: b
                }),
                this.truncate(),
                c
            },
            get: function(a, b) {
                var c, d;
                for (d = 0; d < this.appender.length; d++)
                    if (c = this.appender[d],
                    c.category === a && c.key === b)
                        return c.value;
                return !1
            }
        };
        var k = function(a, b) {
            this.log = a,
            this.options = b,
            b.enabled && this.watch()
        };
        k.prototype = {
            isCompatible: function(b) {
                return b = b || a,
                !n.has(b, "chrome.app.runtime") && n.has(b, "addEventListener") && n.has(b, "history.pushState")
            },
            record: function(a, b, c) {
                this.log.add("h", {
                    type: a,
                    from: n.truncate(b, 250),
                    to: n.truncate(c, 250),
                    on: n.isoNow()
                })
            },
            report: function() {
                return this.log.all("h")
            },
            watch: function() {
                if (this.isCompatible()) {
                    var b = this
                      , c = n.getLocationURL().relative;
                    a.addEventListener("popstate", function() {
                        var a = n.getLocationURL().relative;
                        b.record("popState", c, a),
                        c = a
                    }, !0),
                    n.forEach(["pushState", "replaceState"], function(a) {
                        n.patch(history, a, function(d) {
                            return function() {
                                c = n.getLocationURL().relative;
                                var e = d.apply(this, arguments)
                                  , f = n.getLocationURL().relative;
                                return b.record(a, c, f),
                                c = f,
                                e
                            }
                        })
                    })
                }
            }
        };
        var l = function(a, b, c, d, e, f) {
            this.util = a,
            this.log = b,
            this.onError = c,
            this.onFault = d,
            this.window = e,
            this.options = f,
            f.enabled && this.initialize(e)
        };
        l.prototype = {
            initialize: function(a) {
                a.XMLHttpRequest && this.util.hasFunction(a.XMLHttpRequest.prototype.open, "apply") && this.watchNetworkObject(a.XMLHttpRequest),
                a.XDomainRequest && this.util.hasFunction(a.XDomainRequest.prototype.open, "apply") && this.watchNetworkObject(a.XDomainRequest)
            },
            watchNetworkObject: function(a) {
                var b = this
                  , c = a.prototype.open
                  , d = a.prototype.send;
                return a.prototype.open = function(a, b) {
                    var d = "" + (b || "");
                    return 0 > d.indexOf("localhost:0") && (this._trackJs = {
                        method: a,
                        url: d
                    }),
                    c.apply(this, arguments)
                }
                ,
                a.prototype.send = function() {
                    try {
                        if (!this._trackJs)
                            return d.apply(this, arguments);
                        this._trackJs.logId = b.log.add("n", {
                            startedOn: b.util.isoNow(),
                            method: this._trackJs.method,
                            url: this._trackJs.url
                        }),
                        b.listenForNetworkComplete(this)
                    } catch (a) {
                        b.onFault(a)
                    }
                    return d.apply(this, arguments)
                }
                ,
                a
            },
            listenForNetworkComplete: function(a) {
                var b = this;
                b.window.ProgressEvent && a.addEventListener && a.addEventListener("readystatechange", function() {
                    4 === a.readyState && b.finalizeNetworkEvent(a)
                }, !0),
                a.addEventListener ? a.addEventListener("load", function() {
                    b.finalizeNetworkEvent(a),
                    b.checkNetworkFault(a)
                }, !0) : setTimeout(function() {
                    try {
                        var c = a.onload;
                        a.onload = function() {
                            b.finalizeNetworkEvent(a),
                            b.checkNetworkFault(a),
                            "function" == typeof c && b.util.hasFunction(c, "apply") && c.apply(a, arguments)
                        }
                        ;
                        var d = a.onerror;
                        a.onerror = function() {
                            b.finalizeNetworkEvent(a),
                            b.checkNetworkFault(a),
                            "function" == typeof oldOnError && d.apply(a, arguments)
                        }
                    } catch (a) {
                        b.onFault(a)
                    }
                }, 0)
            },
            finalizeNetworkEvent: function(a) {
                if (a._trackJs) {
                    var b = this.log.get("n", a._trackJs.logId);
                    b && (b.completedOn = this.util.isoNow(),
                    b.statusCode = 1223 == a.status ? 204 : a.status,
                    b.statusText = 1223 == a.status ? "No Content" : a.statusText)
                }
            },
            checkNetworkFault: function(a) {
                if (this.options.error && 400 <= a.status && 1223 != a.status) {
                    var b = a._trackJs || {};
                    this.onError("ajax", a.status + " " + a.statusText + ": " + b.method + " " + b.url)
                }
            },
            report: function() {
                return this.log.all("n")
            }
        };
        var m = function(b, c) {
            this.util = b,
            this.config = c,
            this.disabled = !1,
            this.throttleStats = {
                attemptCount: 0,
                throttledCount: 0,
                lastAttempt: (new Date).getTime()
            },
            a.JSON && a.JSON.stringify || (this.disabled = !0)
        };
        m.prototype = {
            errorEndpoint: function(b) {
                var c = this.config.current.errorURL;
                return this.util.testCrossdomainXhr() || -1 !== a.location.protocol.indexOf("https") || (c = this.config.current.errorNoSSLURL),
                c + "?token=" + b
            },
            usageEndpoint: function(a) {
                return this.appendObjectAsQuery(a, this.config.current.usageURL)
            },
            trackerFaultEndpoint: function(a) {
                return this.appendObjectAsQuery(a, this.config.current.faultURL)
            },
            appendObjectAsQuery: function(a, b) {
                b += "?";
                for (var c in a)
                    a.hasOwnProperty(c) && (b += encodeURIComponent(c) + "=" + encodeURIComponent(a[c]) + "&");
                return b
            },
            getCORSRequest: function(b, c) {
                var d;
                return this.util.testCrossdomainXhr() ? (d = new a.XMLHttpRequest,
                d.open(b, c),
                d.setRequestHeader("Content-Type", "text/plain")) : void 0 !== a.XDomainRequest ? (d = new a.XDomainRequest,
                d.open(b, c)) : d = null,
                d
            },
            sendTrackerFault: function(a) {
                this.throttle(a) || ((new Image).src = this.trackerFaultEndpoint(a))
            },
            sendUsage: function(a) {
                (new Image).src = this.usageEndpoint(a)
            },
            sendError: function(b, d) {
                var e = this;
                if (!this.disabled && !this.throttle(b))
                    try {
                        var f = this.getCORSRequest("POST", this.errorEndpoint(d));
                        f.onreadystatechange = function() {
                            4 === f.readyState && 200 !== f.status && (e.disabled = !0)
                        }
                        ,
                        f._trackJs = c,
                        f.send(a.JSON.stringify(b))
                    } catch (a) {
                        throw this.disabled = !0,
                        a
                    }
            },
            throttle: function(a) {
                var b = (new Date).getTime();
                if (this.throttleStats.attemptCount++,
                this.throttleStats.lastAttempt + 1e3 < b)
                    a.throttled = this.throttleStats.throttledCount,
                    this.throttleStats.attemptCount = 0,
                    this.throttleStats.lastAttempt = b,
                    this.throttleStats.throttledCount = 0;
                else if (this.throttleStats.lastAttempt = b,
                10 < this.throttleStats.attemptCount)
                    return this.throttleStats.throttledCount++,
                    !0;
                return !1
            }
        };
        var n = function() {
            return {
                bind: function(a, b) {
                    return function() {
                        return a.apply(b, Array.prototype.slice.call(arguments))
                    }
                },
                contains: function(a, b) {
                    var c;
                    for (c = 0; c < a.length; c++)
                        if (a[c] === b)
                            return !0;
                    return !1
                },
                defer: function(a, b) {
                    setTimeout(function() {
                        a.apply(b)
                    })
                },
                extend: function(a) {
                    for (var b, d = Array.prototype.slice.call(arguments, 1), e = 0; e < d.length; e++)
                        for (b in d[e])
                            null === d[e][b] || d[e][b] === c ? a[b] = d[e][b] : "[object Object]" === Object.prototype.toString.call(d[e][b]) ? (a[b] = a[b] || {},
                            this.extend(a[b], d[e][b])) : a[b] = d[e][b];
                    return a
                },
                forEach: function(a, b, c) {
                    if (a.forEach)
                        return a.forEach(b, c);
                    for (var d = 0; d < a.length; )
                        b.call(c, a[d], d, a),
                        d++
                },
                getLocation: function() {
                    return ("" + a.location).replace(/ /g, "%20")
                },
                getLocationURL: function() {
                    return n.parseURL(n.getLocation())
                },
                has: function(a, b) {
                    for (var c = b.split("."), d = a, e = 0; e < c.length; e++) {
                        if (!d[c[e]])
                            return !1;
                        d = d[c[e]]
                    }
                    return !0
                },
                hasFunction: function(a, b) {
                    try {
                        return !!a[b]
                    } catch (a) {
                        return !1
                    }
                },
                isBoolean: function(a) {
                    return !0 === a || !1 === a
                },
                isBrowserIE: function(b) {
                    b = b || a.navigator.userAgent;
                    var c = b.match(/Trident\/([\d.]+)/);
                    return c && "7.0" === c[1] ? 11 : !!(b = b.match(/MSIE ([\d.]+)/)) && parseInt(b[1], 10)
                },
                isBrowserSupported: function() {
                    var a = this.isBrowserIE();
                    return !a || a >= 8
                },
                isFunction: function(a) {
                    return !(!a || "function" != typeof a)
                },
                isObject: function(a) {
                    return !(!a || "object" != typeof a)
                },
                isWrappableFunction: function(a) {
                    return this.isFunction(a) && this.hasFunction(a, "apply")
                },
                isoNow: function() {
                    var a = new Date;
                    return a.toISOString ? a.toISOString() : a.getUTCFullYear() + "-" + this.pad(a.getUTCMonth() + 1) + "-" + this.pad(a.getUTCDate()) + "T" + this.pad(a.getUTCHours()) + ":" + this.pad(a.getUTCMinutes()) + ":" + this.pad(a.getUTCSeconds()) + "." + ((a.getUTCMilliseconds() / 1e3).toFixed(3) + "").slice(2, 5) + "Z"
                },
                noop: function() {},
                pad: function(a) {
                    return a += "",
                    1 === a.length && (a = "0" + a),
                    a
                },
                parseURL: function(a) {
                    var b = a.match(/^(([^:\/?#]+):)?(\/\/([^\/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/);
                    return b ? (b = {
                        protocol: b[2],
                        host: b[4],
                        path: b[5],
                        query: b[6],
                        hash: b[8]
                    },
                    b.origin = (b.protocol || "") + "://" + (b.host || ""),
                    b.relative = (b.path || "") + (b.query || "") + (b.hash || ""),
                    b.href = a,
                    b) : {}
                },
                patch: function(a, b, c) {
                    a[b] = c(a[b] || n.noop)
                },
                testCrossdomainXhr: function() {
                    return "withCredentials"in new XMLHttpRequest
                },
                truncate: function(a, b) {
                    if (a.length <= b)
                        return a;
                    var c = a.length - b;
                    return a.substr(0, b) + "...{" + c + "}"
                },
                uuid: function() {
                    return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(a) {
                        var b = 16 * Math.random() | 0;
                        return ("x" == a ? b : 3 & b | 8).toString(16)
                    })
                },
                wrapError: function(a) {
                    if (a.innerError)
                        return a;
                    var b = Error("TrackJS Caught: " + (a.message || a));
                    return b.description = "TrackJS Caught: " + a.description,
                    b.file = a.file,
                    b.line = a.line || a.lineNumber,
                    b.column = a.column || a.columnNumber,
                    b.stack = a.stack,
                    b.innerError = a,
                    b
                }
            }
        }()
          , o = function(a, b, c, d, e, f) {
            this.util = a,
            this.log = b,
            this.onError = c,
            this.onFault = d,
            this.options = f,
            this.document = e,
            f.enabled && this.initialize(e)
        };
        o.prototype = {
            initialize: function(a) {
                var b = this.util.bind(this.onDocumentClicked, this)
                  , c = this.util.bind(this.onInputChanged, this);
                a.addEventListener ? (a.addEventListener("click", b, !0),
                a.addEventListener("blur", c, !0)) : a.attachEvent && (a.attachEvent("onclick", b),
                a.attachEvent("onfocusout", c))
            },
            onDocumentClicked: function(a) {
                try {
                    var b = this.getElementFromEvent(a);
                    b && b.tagName && (this.isDescribedElement(b, "a") || this.isDescribedElement(b, "button") || this.isDescribedElement(b, "input", ["button", "submit"]) ? this.writeVisitorEvent(b, "click") : this.isDescribedElement(b, "input", ["checkbox", "radio"]) && this.writeVisitorEvent(b, "input", b.value, b.checked))
                } catch (a) {
                    this.onFault(a)
                }
            },
            onInputChanged: function(a) {
                try {
                    var b = this.getElementFromEvent(a);
                    b && b.tagName && (this.isDescribedElement(b, "textarea") ? this.writeVisitorEvent(b, "input", b.value) : this.isDescribedElement(b, "select") && b.options && b.options.length ? this.onSelectInputChanged(b) : this.isDescribedElement(b, "input") && !this.isDescribedElement(b, "input", ["button", "submit", "hidden", "checkbox", "radio"]) && this.writeVisitorEvent(b, "input", b.value))
                } catch (a) {
                    this.onFault(a)
                }
            },
            onSelectInputChanged: function(a) {
                if (a.multiple)
                    for (var b = 0; b < a.options.length; b++)
                        a.options[b].selected && this.writeVisitorEvent(a, "input", a.options[b].value);
                else
                    0 <= a.selectedIndex && a.options[a.selectedIndex] && this.writeVisitorEvent(a, "input", a.options[a.selectedIndex].value)
            },
            writeVisitorEvent: function(a, b, d, e) {
                "password" === this.getElementType(a) && (d = c),
                this.log.add("v", {
                    timestamp: this.util.isoNow(),
                    action: b,
                    element: {
                        tag: a.tagName.toLowerCase(),
                        attributes: this.getElementAttributes(a),
                        value: this.getMetaValue(d, e)
                    }
                })
            },
            getElementFromEvent: function(a) {
                return a.target || b.elementFromPoint(a.clientX, a.clientY)
            },
            isDescribedElement: function(a, b, c) {
                if (a.tagName.toLowerCase() !== b.toLowerCase())
                    return !1;
                if (!c)
                    return !0;
                for (a = this.getElementType(a),
                b = 0; b < c.length; b++)
                    if (c[b] === a)
                        return !0;
                return !1
            },
            getElementType: function(a) {
                return (a.getAttribute("type") || "").toLowerCase()
            },
            getElementAttributes: function(a) {
                for (var b = {}, c = 0; c < a.attributes.length; c++)
                    "value" !== a.attributes[c].name.toLowerCase() && (b[a.attributes[c].name] = a.attributes[c].value);
                return b
            },
            getMetaValue: function(a, b) {
                return a === c ? c : {
                    length: a.length,
                    pattern: this.matchInputPattern(a),
                    checked: b
                }
            },
            matchInputPattern: function(a) {
                return "" === a ? "empty" : /^[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/.test(a) ? "email" : /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/.test(a) || /^(\d{4}[\/\-](0?[1-9]|1[012])[\/\-]0?[1-9]|[12][0-9]|3[01])$/.test(a) ? "date" : /^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/.test(a) ? "usphone" : /^\s*$/.test(a) ? "whitespace" : /^\d*$/.test(a) ? "numeric" : /^[a-zA-Z]*$/.test(a) ? "alpha" : /^[a-zA-Z0-9]*$/.test(a) ? "alphanumeric" : "characters"
            },
            report: function() {
                return this.log.all("v")
            }
        };
        var p = function(a, b, c, d, e) {
            this.onError = a,
            this.onFault = b,
            this.serialize = c,
            e.enabled && this.watchWindowErrors(d),
            e.promise && this.watchPromiseErrors(d)
        };
        p.prototype = {
            watchPromiseErrors: function(a) {
                if (a.addEventListener) {
                    var b = this;
                    a.addEventListener("unhandledrejection", function(a) {
                        b.onError("window", (a || {}).reason)
                    })
                }
            },
            watchWindowErrors: function(a) {
                var b = this
                  , c = a.onerror || function() {}
                ;
                a.onerror = function(d, e, f, g, h) {
                    try {
                        h = h || {},
                        h.message = h.message || b.serialize(d),
                        h.line = h.line || parseInt(f, 10) || null,
                        h.column = h.column || parseInt(g, 10) || null,
                        h.file = "[object Event]" !== Object.prototype.toString.call(d) || e ? h.file || b.serialize(e) : (d.target || {}).src,
                        b.onError("window", h)
                    } catch (a) {
                        b.onFault(a)
                    }
                    c.call(a, d, e, f, g, h)
                }
            }
        };
        var q = function(a, b, c, d, e, f, g, h, i, j, k, l, m, o, p, q, r) {
            try {
                if (this.window = p,
                this.document = q,
                this.util = n,
                this.onError = this.util.bind(this.onError, this),
                this.onFault = this.util.bind(this.onFault, this),
                this.serialize = this.util.bind(this.serialize, this),
                this.config = new d(this.util,a),
                this.transmitter = new k(this.util,this.config),
                this.log = new h(this.util),
                this.api = new b(this.config,this.util,this.onError,this.serialize),
                this.metadata = new i(this.serialize),
                this.environment = new g(this.window),
                this.customer = new f(this.config,this.util,this.log,this.window,this.document),
                this.customer.token && (this.apiConsoleWatcher = new e(this.util,this.log,this.onError,this.onFault,this.serialize,this.api,this.config.defaults.console),
                this.config.current.enabled && (this.windowConsoleWatcher = new e(this.util,this.log,this.onError,this.onFault,this.serialize,this.window,this.config.current.console),
                this.util.isBrowserSupported()))) {
                    this.callbackWatcher = new c(this.util,this.onError,this.onFault,this.window,this.config.current.callback),
                    this.visitorWatcher = new l(this.util,this.log,this.onError,this.onFault,this.document,this.config.current.visitor),
                    this.navigationWatcher = new r(this.log,this.config.current.navigation),
                    this.networkWatcher = new j(this.util,this.log,this.onError,this.onFault,this.window,this.config.current.network),
                    this.windowWatcher = new m(this.onError,this.onFault,this.serialize,this.window,this.config.current.window);
                    var s = this;
                    setTimeout(function() {
                        s.transmitter.sendUsage({
                            token: s.customer.token,
                            correlationId: s.customer.correlationId,
                            application: s.config.current.application,
                            x: s.util.uuid()
                        })
                    }, 1e3)
                }
            } catch (a) {
                this.onFault(a)
            }
        };
        q.prototype = {
            reveal: function() {
                return this.customer.token ? (this.api.addMetadata = this.metadata.addMetadata,
                this.api.removeMetadata = this.metadata.removeMetadata,
                this.api) : (this.window.console && this.window.console.warn && this.window.console.warn("TrackJS could not find a token"),
                c)
            },
            onError: function() {
                var b = !1;
                return function(c, d, e) {
                    if (this.util.isBrowserSupported() && this.config.current.enabled)
                        try {
                            d = d || {},
                            e = e || {
                                bindStack: null,
                                bindTime: null,
                                force: !1
                            };
                            var f = d.message || this.serialize(d, e.force);
                            if (f && f.indexOf) {
                                if (-1 !== f.indexOf("TrackJS Caught"))
                                    return;
                                if (b && -1 !== f.indexOf("Script error"))
                                    return void (b = !1)
                            }
                            var g = this.util.extend({}, {
                                bindStack: e.bindStack,
                                bindTime: e.bindTime,
                                column: d.column || d.columnNumber,
                                console: this.windowConsoleWatcher.report(),
                                customer: this.customer.report(),
                                entry: c,
                                environment: this.environment.report(),
                                file: d.file || d.fileName,
                                line: d.line || d.lineNumber,
                                message: f,
                                metadata: this.metadata.report(),
                                nav: this.navigationWatcher.report(),
                                network: this.networkWatcher.report(),
                                url: "" + (a.location || ""),
                                stack: d.stack,
                                timestamp: this.util.isoNow(),
                                visitor: this.visitorWatcher.report(),
                                version: "2.6.1"
                            });
                            if (!e.force)
                                try {
                                    if (!this.config.current.onError(g, d))
                                        return
                                } catch (a) {
                                    g.console.push({
                                        timestamp: this.util.isoNow(),
                                        severity: "error",
                                        message: a.message
                                    });
                                    var h = this;
                                    setTimeout(function() {
                                        h.onError("catch", a, {
                                            force: !0
                                        })
                                    }, 0)
                                }
                            this.log.clear(),
                            setTimeout(function() {
                                b = !1
                            }),
                            b = !0,
                            this.transmitter.sendError(g, this.customer.token)
                        } catch (a) {
                            this.onFault(a)
                        }
                }
            }(),
            onFault: function(a) {
                var b = this.transmitter || new m;
                a = a || {},
                a = {
                    token: this.customer.token,
                    file: a.file || a.fileName,
                    msg: a.message || "unknown",
                    stack: (a.stack || "unknown").substr(0, 500),
                    url: this.window.location,
                    v: "2.6.1",
                    h: "bfe15be969e93a1eecb7c355c6044295c27e4cb5",
                    x: this.util.uuid()
                },
                b.sendTrackerFault(a)
            },
            serialize: function(a, b) {
                if (this.config.current.serialize && !b)
                    try {
                        return this.config.current.serialize(a)
                    } catch (a) {
                        this.onError("catch", a, {
                            force: !0
                        })
                    }
                return this.config.defaults.serialize(a)
            }
        },
        d = new q(a._trackJs || a._trackJS || a._trackjs || {},function(a, b, c, d) {
            return {
                attempt: function(a, d) {
                    try {
                        var e = Array.prototype.slice.call(arguments, 2);
                        return a.apply(d || this, e)
                    } catch (a) {
                        throw c("catch", a),
                        b.wrapError(a)
                    }
                },
                configure: function(b) {
                    return a.setCurrent(b)
                },
                track: function(a) {
                    var b = d(a);
                    if (a = a || {},
                    !a.stack)
                        try {
                            throw Error(b)
                        } catch (b) {
                            a = b
                        }
                    c("direct", a)
                },
                watch: function(a, d) {
                    return function() {
                        try {
                            var e = Array.prototype.slice.call(arguments, 0);
                            return a.apply(d || this, e)
                        } catch (a) {
                            throw c("catch", a),
                            b.wrapError(a)
                        }
                    }
                },
                watchAll: function(a) {
                    var d, e = Array.prototype.slice.call(arguments, 1);
                    for (d in a)
                        "function" == typeof a[d] && (b.contains(e, d) || function() {
                            var e = a[d];
                            a[d] = function() {
                                try {
                                    var a = Array.prototype.slice.call(arguments, 0);
                                    return e.apply(this, a)
                                } catch (a) {
                                    throw c("catch", a),
                                    b.wrapError(a)
                                }
                            }
                        }());
                    return a
                },
                hash: "bfe15be969e93a1eecb7c355c6044295c27e4cb5",
                version: "2.6.1"
            }
        }
        ,d,f,g,h,i,j,function(a) {
            var b = {};
            return {
                addMetadata: function(a, c) {
                    b[a] = c
                },
                removeMetadata: function(a) {
                    delete b[a]
                },
                report: function() {
                    var c, d = [];
                    for (c in b)
                        b.hasOwnProperty(c) && d.push({
                            key: c,
                            value: a(b[c])
                        });
                    return d
                },
                store: b
            }
        }
        ,l,m,o,p,e,a,b,k),
        a.trackJs = d.reveal()
    }
}(window, document);