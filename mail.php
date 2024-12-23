<!DOCTYPE html>
<html lang="en-US" class="s-light site-s-light">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-site-verification" content="8TMTXvSNalcszud_YM0Cw8zR0GNRSAVDs_Z7eGXAIkQ" />
    <meta name='robots' content='noindex, follow' />

    <!-- This site is optimized with the Yoast SEO plugin v16.7 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>soni</title>
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Page not found - Theembazaar" />
    <meta property="og:site_name" content="Theembazaar" />
    <script type="application/ld+json" class="yoast-schema-graph">
    {
        "@context": "https://schema.org",
        "@graph": [{
            "@type": "WebSite",
            "@id": "https://theembazaar.com/#website",
            "url": "https://theembazaar.com/",
            "name": "Theembazaar",
            "description": "Just another WordPress site",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://theembazaar.com/?s={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }],
            "inLanguage": "en-US"
        }]
    }
    </script>
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='//cdn.ampproject.org' />
    <link rel='dns-prefetch' href='//js.makestories.io' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Theembazaar &raquo; Feed"
        href="https://theembazaar.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Theembazaar &raquo; Comments Feed"
        href="https://theembazaar.com/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Theembazaar &raquo; Stories Feed"
        href="https://theembazaar.com/web-stories/feed/">
    <!-- This site uses the Google Analytics by MonsterInsights plugin v7.17.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
    <script src="//www.googletagmanager.com/gtag/js?id=UA-119595512-4" type="text/javascript" data-cfasync="false">
    </script>
    <script type="text/javascript" data-cfasync="false">
    var mi_version = '7.17.0';
    var mi_track_user = true;
    var mi_no_track_reason = '';

    var disableStr = 'ga-disable-UA-119595512-4';

    /* Function to detect opted out users */
    function __gtagTrackerIsOptedOut() {
        return document.cookie.indexOf(disableStr + '=true') > -1;
    }

    /* Disable tracking if the opt-out cookie exists. */
    if (__gtagTrackerIsOptedOut()) {
        window[disableStr] = true;
    }

    /* Opt-out function */
    function __gtagTrackerOptout() {
        document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
        window[disableStr] = true;
    }

    if ('undefined' === typeof gaOptout) {
        function gaOptout() {
            __gtagTrackerOptout();
        }
    }
    window.dataLayer = window.dataLayer || [];
    if (mi_track_user) {
        function __gtagTracker() {
            dataLayer.push(arguments);
        }
        __gtagTracker('js', new Date());
        __gtagTracker('set', {
            'developer_id.dZGIzZG': true,
        });
        __gtagTracker('config', 'UA-119595512-4', {
            forceSSL: true,
            link_attribution: true,
            page_path: '/404.html?page=' + document.location.pathname + document.location.search + '&from=' +
                document.referrer,
        });
        window.gtag = __gtagTracker;
        (
            function() {
                /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                /* ga and __gaTracker compatibility shim. */
                var noopfn = function() {
                    return null;
                };
                var newtracker = function() {
                    return new Tracker();
                };
                var Tracker = function() {
                    return null;
                };
                var p = Tracker.prototype;
                p.get = noopfn;
                p.set = noopfn;
                p.send = function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift('send');
                    __gaTracker.apply(null, args);
                };
                var __gaTracker = function() {
                    var len = arguments.length;
                    if (len === 0) {
                        return;
                    }
                    var f = arguments[len - 1];
                    if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                        if ('send' === arguments[0]) {
                            var hitConverted, hitObject = false,
                                action;
                            if ('event' === arguments[1]) {
                                if ('undefined' !== typeof arguments[3]) {
                                    hitObject = {
                                        'eventAction': arguments[3],
                                        'eventCategory': arguments[2],
                                        'eventLabel': arguments[4],
                                        'value': arguments[5] ? arguments[5] : 1,
                                    }
                                }
                            }
                            if (typeof arguments[2] === 'object') {
                                hitObject = arguments[2];
                            }
                            if (typeof arguments[5] === 'object') {
                                Object.assign(hitObject, arguments[5]);
                            }
                            if ('undefined' !== typeof(
                                    arguments[1].hitType
                                )) {
                                hitObject = arguments[1];
                            }
                            if (hitObject) {
                                action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject
                                    .eventAction;
                                hitConverted = mapArgs(hitObject);
                                __gtagTracker('event', action, hitConverted);
                            }
                        }
                        return;
                    }

                    function mapArgs(args) {
                        var gaKey, hit = {};
                        var gaMap = {
                            'eventCategory': 'event_category',
                            'eventAction': 'event_action',
                            'eventLabel': 'event_label',
                            'eventValue': 'event_value',
                            'nonInteraction': 'non_interaction',
                            'timingCategory': 'event_category',
                            'timingVar': 'name',
                            'timingValue': 'value',
                            'timingLabel': 'event_label',
                        };
                        for (gaKey in gaMap) {
                            if ('undefined' !== typeof args[gaKey]) {
                                hit[gaMap[gaKey]] = args[gaKey];
                            }
                        }
                        return hit;
                    }

                    try {
                        f.hitCallback();
                    } catch (ex) {}
                };
                __gaTracker.create = newtracker;
                __gaTracker.getByName = newtracker;
                __gaTracker.getAll = function() {
                    return [];
                };
                __gaTracker.remove = noopfn;
                __gaTracker.loaded = true;
                window['__gaTracker'] = __gaTracker;
            }
        )();
    } else {
        console.log("");
        (function() {
            function __gtagTracker() {
                return null;
            }
            window['__gtagTracker'] = __gtagTracker;
            window['gtag'] = __gtagTracker;
        })();
    }
    </script>
    <!-- / Google Analytics by MonsterInsights -->
    <script type="text/javascript">
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/theembazaar.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.8"
        }
    };
    ! function(e, a, t) {
        var n, r, o, i = a.createElement("canvas"),
            p = i.getContext && i.getContext("2d");

        function s(e, t) {
            var a = String.fromCharCode;
            p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
            e = i.toDataURL();
            return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
        }

        function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
        }
        for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
            if (!p || !p.fillText) return !1;
            switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                case "flag":
                    return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                        55356, 56826, 55356, 56819
                    ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                        56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                    ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                        56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                    ]);
                case "emoji":
                    return !s([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
            }
            return !1
        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
            .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
            .readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n
                .wpemoji)))
    }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://theembazaar.com/wp-includes/css/dist/block-library/style.min.css?ver=5.7.8' type='text/css'
        media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://theembazaar.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='style-main-css'
        href='https://theembazaar.com/wp-content/plugins/makestories-helper/assets/css/ms-style.css?ver=5.7.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='slick-theme-css-css'
        href='https://theembazaar.com/wp-content/plugins/makestories-helper/vendor/slick/slick-theme.css?ver=5.7.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='slick-css-css'
        href='https://theembazaar.com/wp-content/plugins/makestories-helper/vendor/slick/slick.css?ver=5.7.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='amp-story-player-css' href='https://cdn.ampproject.org/amp-story-player-v0.css?ver=5.7.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='smartmag-core-css'
        href='https://theembazaar.com/wp-content/themes/smart-mag/style.css?ver=5.1.1' type='text/css' media='all' />
    <link crossorigin="anonymous" rel='stylesheet' id='smartmag-fonts-css'
        href='https://fonts.googleapis.com/css?family=Libre+Franklin%3A400%2C400i%2C500%2C600%7CLato%3A400%2C700%2C900%7CHind%3A400%2C500%2C600'
        type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href='https://theembazaar.com/wp-content/themes/smart-mag/css/lightbox.css?ver=5.1.1' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome4-css'
        href='https://theembazaar.com/wp-content/themes/smart-mag/css/fontawesome/css/font-awesome.min.css?ver=5.1.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='smartmag-icons-css'
        href='https://theembazaar.com/wp-content/themes/smart-mag/css/icons/icons.css?ver=5.1.1' type='text/css'
        media='all' />
    <link rel='stylesheet' id='smartmag-skin-css'
        href='https://theembazaar.com/wp-content/themes/smart-mag/css/skin-trendy.css?ver=5.1.1' type='text/css'
        media='all' />
    <style id='smartmag-skin-inline-css' type='text/css'>
    :root {
        --c-main: #e54e53;
        --c-main-rgb: 229, 78, 83;
        --main-width: 1150px;
    }

    .smart-head-main {
        --c-shadow: rgba(10, 10, 10, 0.04);
    }

    .smart-head-main .smart-head-top {
        --head-h: 38px;
    }

    .smart-head-main .smart-head-mid {
        --head-h: 146px;
    }

    .s-dark .smart-head-main .smart-head-mid,
    .smart-head-main .s-dark.smart-head-mid {
        background-color: #181818;
    }

    .smart-head-main .smart-head-bot {
        --head-h: 52px;
    }

    .navigation-main .menu>li>a {
        letter-spacing: 0.02em;
    }

    .navigation-main {
        --nav-items-space: 16px;
    }

    .smart-head-mobile .smart-head-mid {
        border-top-width: 3px;
    }

    .mobile-menu {
        font-size: 15px;
    }

    .smart-head-main .offcanvas-toggle {
        transform: scale(0.65);
    }

    .loop-grid .ratio-is-custom {
        padding-bottom: calc(100% / 1.68);
    }

    .loop-list .ratio-is-custom {
        padding-bottom: calc(100% / 1.575);
    }

    .loop-list .media {
        width: 44%;
        max-width: 85%;
    }

    .loop-list .media:not(i) {
        max-width: 44%;
    }

    .loop-small .media:not(i) {
        max-width: 104px;
    }

    .single .featured .ratio-is-custom {
        padding-bottom: calc(100% / 2);
    }
    </style>
    <script type='text/javascript' id='monsterinsights-frontend-script-js-extra'>
    /* <![CDATA[ */
    var monsterinsights_frontend = {
        "js_events_tracking": "true",
        "download_extensions": "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
        "inbound_paths": "[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]",
        "home_url": "https:\/\/theembazaar.com",
        "hash_tracking": "false",
        "ua": "UA-119595512-4"
    };
    /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://theembazaar.com/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend-gtag.min.js?ver=7.17.0'
        id='monsterinsights-frontend-script-js'></script>
    <script type='text/javascript' src='https://theembazaar.com/wp-includes/js/jquery/jquery.min.js?ver=3.5.1'
        id='jquery-core-js'></script>
    <script type='text/javascript' src='https://theembazaar.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
        id='jquery-migrate-js'></script>
    <script type='text/javascript' src='https://cdn.ampproject.org/v0.js' id='amp-runtime-js' async></script>
    <script type='text/javascript' src='https://cdn.ampproject.org/v0/amp-story-player-0.1.js' id='amp-story-player-js'
        async custom-element="amp-story-player"></script>
    <link rel="https://api.w.org/" href="https://theembazaar.com/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://theembazaar.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://theembazaar.com/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.7.8" />
    <style>
    /* write your CSS code here */
    </style>
    <script>
    /* write your JavaScript code here */
    </script>

    <script>
    var BunyadSchemeKey = 'bunyad-scheme';
    (() => {
        const d = document.documentElement;
        const c = d.classList;
        const scheme = localStorage.getItem(BunyadSchemeKey);
        if (scheme) {
            d.dataset.origClass = c;
            scheme === 'dark' ? c.remove('s-light', 'site-s-light') : c.remove('s-dark', 'site-s-dark');
            c.add('site-s-' + scheme, 's-' + scheme);
        }
    })();
    </script>
    <style type="text/css">
    .broken_link,
    a.broken_link {
        text-decoration: line-through;
    }
    </style><!-- There is no amphtml version available for this URL. -->
    <link rel="icon" href="https://theembazaar.com/wp-content/uploads/2021/07/cropped-tb-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://theembazaar.com/wp-content/uploads/2021/07/cropped-tb-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://theembazaar.com/wp-content/uploads/2021/07/cropped-tb-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://theembazaar.com/wp-content/uploads/2021/07/cropped-tb-270x270.png" />


    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-849Y1143BW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-849Y1143BW');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119595512-4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-119595512-4');
    </script>
    <!--Google adesense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4853370906832450"
        crossorigin="anonymous"></script>
    <!-- AdAuto -->

    <!--
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4853370906832450"
     data-ad-slot="5743978515"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
-->

</head>

<body class="error404 has-lb has-lb-sm has-sb-sep layout-normal elementor-default elementor-kit-7">



    <div class="main-wrap">


        <div class="off-canvas-backdrop"></div>
        <div class="mobile-menu-container off-canvas" id="off-canvas">

            <div class="off-canvas-head">
                <a href="#" class="close"><i class="tsi tsi-times"></i></a>

                <div class="ts-logo">
                </div>
            </div>

            <div class="off-canvas-content">

                <ul class="mobile-menu"></ul>



                <div class="spc-social spc-social-b smart-head-social">


                    <a href="#" class="link s-facebook" target="_blank" rel="noopener">
                        <i class="icon tsi tsi-facebook"></i>
                        <span class="visuallyhidden">Facebook</span>
                    </a>


                    <a href="#" class="link s-twitter" target="_blank" rel="noopener">
                        <i class="icon tsi tsi-twitter"></i>
                        <span class="visuallyhidden">Twitter</span>
                    </a>


                    <a href="#" class="link s-instagram" target="_blank" rel="noopener">
                        <i class="icon tsi tsi-instagram"></i>
                        <span class="visuallyhidden">Instagram</span>
                    </a>


                </div>


            </div>

        </div>
        <div class="smart-head smart-head-a smart-head-main" id="smart-head" data-sticky="bot" data-sticky-type="smart">

            <div class="smart-head-row smart-head-top s-dark smart-head-row-full">

                <div class="inner wrap">


                    <div class="items items-left ">

                        <span class="h-date">
                            Friday, April 21</span>
                        <div class="nav-wrap">
                            <nav class="navigation navigation-small nav-hov-a has-search">
                                <ul id="menu-top-links" class="menu">
                                    <li id="menu-item-911"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-911">
                                        <a href="https://theembazaar.com/privacy-policy/">Privacy Policy</a></li>
                                    <li id="menu-item-1044"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1044">
                                        <a href="https://theembazaar.com/contact-us/">Contact Us</a></li>
                                    <li id="menu-item-1124"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1124">
                                        <a href="https://theembazaar.com/megadelicieux/">megadelicieux</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>


                    <div class="items items-center empty">
                    </div>


                    <div class="items items-right ">

                        <div class="spc-social spc-social-a smart-head-social">


                            <a href="#" class="link s-facebook" target="_blank" rel="noopener">
                                <i class="icon tsi tsi-facebook"></i>
                                <span class="visuallyhidden">Facebook</span>
                            </a>


                            <a href="#" class="link s-twitter" target="_blank" rel="noopener">
                                <i class="icon tsi tsi-twitter"></i>
                                <span class="visuallyhidden">Twitter</span>
                            </a>


                            <a href="#" class="link s-linkedin" target="_blank" rel="noopener">
                                <i class="icon tsi tsi-linkedin"></i>
                                <span class="visuallyhidden">LinkedIn</span>
                            </a>


                            <a href="#" class="link s-vk" target="_blank" rel="noopener">
                                <i class="icon tsi tsi-vk"></i>
                                <span class="visuallyhidden">VKontakte</span>
                            </a>


                        </div>

                    </div>


                </div>
            </div>


            <div class="smart-head-row smart-head-mid is-light smart-head-row-full">

                <div class="inner wrap">


                    <div class="items items-left ">
                        <a href="https://theembazaar.com/" title="Theembazaar" rel="home" class="logo-link ts-logo">
                            <span>



                                <img src="https://theembazaar.com/wp-content/uploads/2021/07/logo.png"
                                    class="logo-image" alt="Theembazaar" />


                            </span>
                        </a>
                    </div>


                    <div class="items items-center empty">
                    </div>


                    <div class="items items-right ">

                        <div class="h-text h-text">
                            <div style="height:150px; background:red">
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
                                </script>
                                <!-- H_M_ads -->
                                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4853370906832450"
                                    data-ad-slot="8823407734" data-ad-format="auto"
                                    data-full-width-responsive="true"></ins>
                                <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="smart-head-row smart-head-bot is-light smart-head-row-full">

                <div class="inner wrap">


                    <div class="items items-left ">

                        <button class="offcanvas-toggle has-icon" type="button" aria-label="Menu">
                            <span class="hamburger-icon hamburger-icon-a">
                                <span class="inner"></span>
                            </span>
                        </button>
                        <div class="nav-wrap">
                            <nav class="navigation navigation-main nav-hov-a has-search">
                                <ul id="menu-main-menu" class="menu">
                                    <li id="menu-item-887"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-cat-26 menu-item-887">
                                        <a href="https://theembazaar.com/category/domain/">Domain</a></li>
                                    <li id="menu-item-888"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-cat-27 menu-item-888">
                                        <a href="https://theembazaar.com/category/hosting/">Hosting</a></li>
                                    <li id="menu-item-889"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-cat-28 menu-item-889">
                                        <a href="https://theembazaar.com/category/tools/">Tools</a></li>
                                    <li id="menu-item-1045"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1045">
                                        <a href="https://theembazaar.com/contact-us/">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>


                    <div class="items items-center empty">
                    </div>


                    <div class="items items-right ">


                        <a href="#" class="search-icon has-icon-only is-icon" title="Search">
                            <i class="tsi tsi-search"></i>
                        </a>

                    </div>


                </div>
            </div>

        </div>
        <div class="smart-head smart-head-a smart-head-mobile" id="smart-head-mobile" data-sticky="mid"
            data-sticky-type>

            <div class="smart-head-row smart-head-mid smart-head-row-3 is-light smart-head-row-full">

                <div class="inner wrap">


                    <div class="items items-left ">

                        <button class="offcanvas-toggle has-icon" type="button" aria-label="Menu">
                            <span class="hamburger-icon hamburger-icon-a">
                                <span class="inner"></span>
                            </span>
                        </button>
                    </div>


                    <div class="items items-center ">
                        <a href="https://theembazaar.com/" title="Theembazaar" rel="home" class="logo-link ts-logo">
                            <span>



                                <img src="https://theembazaar.com/wp-content/uploads/2021/07/logo.png"
                                    class="logo-image" alt="Theembazaar" />


                            </span>
                        </a>
                    </div>


                    <div class="items items-right ">


                        <a href="#" class="search-icon has-icon-only is-icon" title="Search">
                            <i class="tsi tsi-search"></i>
                        </a>

                    </div>


                </div>
            </div>

        </div>
        <div class="a-wrap a-wrap-base a-wrap-2">
            <div class="add_box_img"></div>
            <!-- H_M_ads -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4853370906832450"
                data-ad-slot="8823407734" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <div class="main ts-contain cf right-sidebar">
            <div class="ts-row">
                <div class="col-12 cf">

                    <div class="the-post the-page page-404 cf">

                        <header>
                            <h1 class="main-heading">Page Not Found!</h1>
                        </header>

                        <div class="post-content error-page row">

                            <div class="col-3 text-404 main-color">
                                404 </div>

                            <div class="col-8 post-content">
                                <p>
                                    We&#039;re sorry, but we can&#039;t find the page you were looking for. It&#039;s
                                    probably some thing we&#039;ve done wrong but now we know about it and we&#039;ll
                                    try to fix it. In the meantime, try one of these options: </p>
                                <ul class="links">
                                    <li> <a href="#" class="go-back">Go to Previous Page</a></li>
                                    <li> <a href="https://theembazaar.com">Go to Homepage</a></li>
                                </ul>

                                <form role="search" method="get" class="search-form" action="https://theembazaar.com/">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search &hellip;" value=""
                                            name="s" />
                                    </label>
                                    <input type="submit" class="search-submit" value="Search" />
                                </form>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div> <!-- .main -->


        <div class="a-wrap a-wrap-base a-wrap-3">
            <!-- H_M_ads -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4853370906832450"
                data-ad-slot="8823407734" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

        </div>
        <footer class="main-footer cols-gap-lg footer-classic s-dark">

            <div class="upper-footer classic-footer-upper">
                <div class="ts-contain wrap">

                    <div class="widgets row cf">
                        <div class="widget col-4 widget_categories">
                            <div
                                class="widget-title block-head block-head-ac block-head block-head-ac block-head-h is-left has-style">
                                <h5 class="heading">Categories</h5>
                            </div>
                            <ul>
                                <li class="cat-item cat-item-26"><a
                                        href="https://theembazaar.com/category/domain/">Domain</a>
                                </li>
                                <li class="cat-item cat-item-27"><a
                                        href="https://theembazaar.com/category/hosting/">Hosting</a>
                                </li>
                                <li class="cat-item cat-item-28"><a
                                        href="https://theembazaar.com/category/tools/">Tools</a>
                                </li>
                                <li class="cat-item cat-item-1"><a
                                        href="https://theembazaar.com/category/uncategorized/">Uncategorized</a>
                                </li>
                                <li class="cat-item cat-item-30"><a
                                        href="https://theembazaar.com/category/wordpress/">Wordpress</a>
                                </li>
                            </ul>

                        </div>
                        <div class="widget col-4 ts-block-widget smartmag-widget-posts-small">
                            <div class="block">
                                <section class="block-wrap block-posts-small block-sc mb-none" data-id="1">

                                    <div
                                        class="widget-title block-head block-head-ac block-head block-head-ac block-head-h is-left has-style">
                                        <h5 class="heading">Latest Post</h5>
                                    </div>
                                    <div class="block-content">

                                        <div
                                            class="loop loop-small loop-small-a loop-sep loop-small-sep grid grid-1 md:grid-1 sm:grid-1 xs:grid-1">


                                            <article class="l-post  small-a-post m-pos-left small-post">


                                                <div class="media">


                                                    <a href="https://theembazaar.com/css-parallax-effects/"
                                                        class="image-link media-ratio ratio-3-2"><span
                                                            data-bgsrc="https://theembazaar.com/wp-content/uploads/2023/01/SNAKE-PARALLAX-300x68.gif"
                                                            class="img bg-cover wp-post-image attachment-medium size-medium lazyload"
                                                            data-bgset="https://theembazaar.com/wp-content/uploads/2023/01/SNAKE-PARALLAX-300x68.gif 300w, https://theembazaar.com/wp-content/uploads/2023/01/SNAKE-PARALLAX-768x174.gif 768w, https://theembazaar.com/wp-content/uploads/2023/01/SNAKE-PARALLAX-450x102.gif 450w"
                                                            data-sizes="(max-width: 105px) 100vw, 105px"></span></a>




                                                </div>



                                                <div class="content">

                                                    <div class="post-meta post-meta-a post-meta-left has-below">
                                                        <h4 class="is-title post-title"><a
                                                                href="https://theembazaar.com/css-parallax-effects/">Best
                                                                26 CSS Parallax Effects 2023</a></h4>
                                                        <div class="post-meta-items meta-below"><span
                                                                class="meta-item date"><a
                                                                    href="https://theembazaar.com/css-parallax-effects/"
                                                                    class="date-link"><time class="post-date"
                                                                        datetime="2023-01-30T08:30:50+00:00">January 30,
                                                                        2023</time></a></span></div>
                                                    </div>


                                                </div>


                                            </article>

                                            <article class="l-post  small-a-post m-pos-left small-post">


                                                <div class="media">


                                                </div>



                                                <div class="content">

                                                    <div class="post-meta post-meta-a post-meta-left has-below">
                                                        <h4 class="is-title post-title"><a
                                                                href="https://theembazaar.com/smooth-parallax-scrolling-background-image/">Best
                                                                24 Smooth Parallax Scrolling Background Image</a></h4>
                                                        <div class="post-meta-items meta-below"><span
                                                                class="meta-item date"><a
                                                                    href="https://theembazaar.com/smooth-parallax-scrolling-background-image/"
                                                                    class="date-link"><time class="post-date"
                                                                        datetime="2023-01-26T15:44:36+00:00">January 26,
                                                                        2023</time></a></span></div>
                                                    </div>


                                                </div>


                                            </article>

                                            <article class="l-post  small-a-post m-pos-left small-post">


                                                <div class="media">


                                                    <a href="https://theembazaar.com/how-to-make-a-site-map-with-wordpress-and-settings/"
                                                        class="image-link media-ratio ratio-3-2"><span
                                                            data-bgsrc="https://theembazaar.com/wp-content/uploads/2022/03/How-to-make-a-site-map-with-WordPress-and-settings-300x188.jpg"
                                                            class="img bg-cover wp-post-image attachment-medium size-medium lazyload"
                                                            data-bgset="https://theembazaar.com/wp-content/uploads/2022/03/How-to-make-a-site-map-with-WordPress-and-settings-300x188.jpg 300w, https://theembazaar.com/wp-content/uploads/2022/03/How-to-make-a-site-map-with-WordPress-and-settings-1024x640.jpg 1024w, https://theembazaar.com/wp-content/uploads/2022/03/How-to-make-a-site-map-with-WordPress-and-settings-768x480.jpg 768w, https://theembazaar.com/wp-content/uploads/2022/03/How-to-make-a-site-map-with-WordPress-and-settings-150x94.jpg 150w, https://theembazaar.com/wp-content/uploads/2022/03/How-to-make-a-site-map-with-WordPress-and-settings-450x281.jpg 450w, https://theembazaar.com/wp-content/uploads/2022/03/How-to-make-a-site-map-with-WordPress-and-settings.jpg 1200w"
                                                            data-sizes="(max-width: 105px) 100vw, 105px" role="img"
                                                            aria-label="How to make a site map with WordPress and settings"></span></a>




                                                </div>



                                                <div class="content">

                                                    <div class="post-meta post-meta-a post-meta-left has-below">
                                                        <h4 class="is-title post-title"><a
                                                                href="https://theembazaar.com/how-to-make-a-site-map-with-wordpress-and-settings/">How
                                                                to make a site map with WordPress &#038; settings!
                                                                Explanation with figures for beginners</a></h4>
                                                        <div class="post-meta-items meta-below"><span
                                                                class="meta-item date"><a
                                                                    href="https://theembazaar.com/how-to-make-a-site-map-with-wordpress-and-settings/"
                                                                    class="date-link"><time class="post-date"
                                                                        datetime="2022-03-05T13:31:18+00:00">March 5,
                                                                        2022</time></a></span></div>
                                                    </div>


                                                </div>


                                            </article>

                                        </div>

                                    </div>

                                </section>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


            <div class="lower-footer classic-footer-lower">
                <div class="ts-contain wrap">
                    <div class="inner">

                        <div class="copyright">
                            Copyright &copy; Designed by <a href="#">Theembazaar</a> 2014-<script>
                            document.write(new Date().getFullYear())
                            </script>
                            <a><b>Flower Moon Nursery</b></a>.
                            All Rights Reserved.
                        </div>

                        <div class="links">
                            <div class="menu-footer-links-container">
                                <ul id="menu-footer-links" class="menu">
                                    <li id="menu-item-835"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-835">
                                        <a href="https://theembazaar.com">Home</a></li>
                                    <li id="menu-item-909"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-909">
                                        <a href="https://theembazaar.com/privacy-policy/">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </footer>


    </div><!-- .main-wrap -->



    <div class="search-modal-wrap" data-scheme="light">
        <div class="search-modal-box" role="dialog" aria-modal="true">

            <form method="get" class="search-form" action="https://theembazaar.com/">
                <input type="search" class="search-field live-search-query" name="s" placeholder="Search..." value=""
                    required />

                <button type="submit" class="search-submit visuallyhidden">Submit</button>

                <p class="message">
                    Type above and press <em>Enter</em> to search. Press <em>Esc</em> to cancel. </p>

            </form>

        </div>
    </div>


    <script type='text/javascript' id='smartmag-lazyload-js-extra'>
    /* <![CDATA[ */
    var BunyadLazy = {
        "type": "normal"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://theembazaar.com/wp-content/themes/smart-mag/js/lazyload.js?ver=5.1.1'
        id='smartmag-lazyload-js'></script>
    <script type='text/javascript' src='https://theembazaar.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4'
        id='wp-polyfill-js'></script>
    <script type='text/javascript' id='wp-polyfill-js-after'>
    ('fetch' in window) || document.write(
        '<script src="https://theembazaar.com/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' +
        'ipt>');
    (document.contains) || document.write(
        '<script src="https://theembazaar.com/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' +
        'ipt>');
    (window.DOMRect) || document.write(
        '<script src="https://theembazaar.com/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' +
        'ipt>');
    (window.URL && window.URL.prototype && window.URLSearchParams) || document.write(
        '<script src="https://theembazaar.com/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' +
        'ipt>');
    (window.FormData && window.FormData.prototype.keys) || document.write(
        '<script src="https://theembazaar.com/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' +
        'ipt>');
    (Element.prototype.matches && Element.prototype.closest) || document.write(
        '<script src="https://theembazaar.com/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' +
        'ipt>');
    ('objectFit' in document.documentElement.style) || document.write(
        '<script src="https://theembazaar.com/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' +
        'ipt>');
    </script>
    <script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/theembazaar.com\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        },
        "cached": "1"
    };
    /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://theembazaar.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.4.2'
        id='contact-form-7-js'></script>
    <script type='text/javascript'
        src='https://theembazaar.com/wp-content/plugins/makestories-helper/vendor/slick/slick.min.js?ver=5.7.8'
        id='slick-min-js-js'></script>
    <script type='text/javascript'
        src='https://theembazaar.com/wp-content/plugins/makestories-helper/assets/js/ms-script.js?ver=5.7.8'
        id='script-main-js'></script>
    <script type='text/javascript' src='https://js.makestories.io/player/StoryPlayer.js?ver=5.7.8'
        id='ms-story-player-js'></script>
    <script type='text/javascript'
        src='https://theembazaar.com/wp-content/themes/smart-mag/js/jquery.mfp-lightbox.js?ver=5.1.1'
        id='magnific-popup-js'></script>
    <script type='text/javascript' id='smartmag-theme-js-extra'>
    /* <![CDATA[ */
    var Bunyad = {
        "ajaxurl": "https:\/\/theembazaar.com\/wp-admin\/admin-ajax.php"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='https://theembazaar.com/wp-content/themes/smart-mag/js/theme.js?ver=5.1.1'
        id='smartmag-theme-js'></script>
    <script type='text/javascript'
        src='https://theembazaar.com/wp-content/themes/smart-mag/js/jquery.sticky-sidebar.js?ver=5.1.1'
        id='theia-sticky-sidebar-js'></script>
    <script type='text/javascript' src='https://theembazaar.com/wp-includes/js/wp-embed.min.js?ver=5.7.8'
        id='wp-embed-js'></script>

</body>

</html>
<!-- Page generated by LiteSpeed Cache 4.4.5 on 2023-04-21 05:42:06 -->