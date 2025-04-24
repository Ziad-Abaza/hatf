<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="facebook-domain-verification" content="io9rpttns7ztrjz273fs9q4dwk1g4b" />
    <meta name="google-site-verification" content="3Fg8fQvJVpe_y5VW_SoU2h44JxrZYkAxj6Fqy8xZM7M" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>هتف - Hatf</title>
    <meta name="description" content="{{ config('app-meta.descraption') }}" />
    <meta name="keywords" content="{{ config('app-meta.key_words') }}" />
    <meta name="author" content="Hatf" />
    <meta name="robots" content="index, follow" />
    <link rel="icon" href="{{ asset('front/assets/imgs/favicon.svg') }}" type="image/svg+xml" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front/assets/imgs/favicon.ico') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('front/assets/imgs/favicon.ico?v=2') }}">
    <link rel="shortcut icon" href="front/assets/imgs/favicon.ico">

    <link rel="alternate" href="https://hatf.sa/" hreflang="ar-sa"  />


    <!-- link css style -->
    <link rel="stylesheet" href="{{ asset('front/new_design/src/style/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/new_design/src/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/new_design/src/bootstrap/bootstrap.min.css.map') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">


    @yield('css')
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js",
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-PGW6ZSCB");
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E8ZRMWHQRS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-E8ZRMWHQRS");
    </script>
    <script>
        ! function(w, d, t) {
            w.TiktokAnalyticsObject = t;
            var ttq = w[t] = w[t] || [];
            ttq.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once", "ready", "alias",
                "group", "enableCookie", "disableCookie", "holdConsent", "revokeConsent", "grantConsent"
            ], ttq.setAndDefer = function(t, e) {
                t[e] = function() {
                    t.push([e].concat(Array.prototype.slice.call(arguments, 0)))
                }
            };
            for (var i = 0; i < ttq.methods.length; i++) ttq.setAndDefer(ttq, ttq.methods[i]);
            ttq.instance = function(t) {
                for (
                    var e = ttq._i[t] || [], n = 0; n < ttq.methods.length; n++) ttq.setAndDefer(e, ttq.methods[n]);
                return e
            }, ttq.load = function(e, n) {
                var r = "https://analytics.tiktok.com/i18n/pixel/events.js",
                    o = n && n.partner;
                ttq._i = ttq._i || {}, ttq._i[e] = [], ttq._i[e]._u = r, ttq._t = ttq._t || {}, ttq._t[e] = +new Date,
                    ttq._o = ttq._o || {}, ttq._o[e] = n || {};
                n = document.createElement("script");
                n.type = "text/javascript", n.async = !0, n.src = r + "?sdkid=" + e + "&lib=" + t;
                e = document.getElementsByTagName("script")[0];
                e.parentNode.insertBefore(n, e)
            };


            ttq.load('CU4C53RC77U77A9KR7TG');
            ttq.page();
        }(window, document, 'ttq');
    </script>
    @yield('js_header')
</head>

<body data-bs-theme="dark">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGW6ZSCB" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    {{-- //content --}}

    <!-- start nav -->
    @include('web.layout.new_desighn.header')
    <!-- end nav -->


    <!-- start hero -->
    @include('web.layout.new_desighn.hero')
    <!-- end hero -->


    @yield('content')


    <!-- start footer -->
    @include('web.layout.new_desighn..footer')
    <!-- end footer -->

    {{-- //content --}}

    <!-- Bootstrap js -->
    <script src="{{ asset('front/new_design/src/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/new_design/src/bootstrap/bootstrap.bundle.min.js.map') }}"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // swiper
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 15000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            slidesPerView: 3, // الوضع الافتراضي للكمبيوتر
            spaceBetween: 20,
            breakpoints: {
                1200: {
                    slidesPerView: 3, // 3 صور على الكمبيوتر
                    spaceBetween: 20,
                },
                770: {
                    slidesPerView: 2, // 2 صورة على التابلت
                    spaceBetween: 20,
                },
                0: {
                    slidesPerView: 1, // 1 صورة على الموبايل
                    spaceBetween: 10,
                }
            }
        });


        // btn add and remov services
        document.addEventListener("DOMContentLoaded", function() {
            let showMoreButton = document.getElementById("showMore");
            let hiddenCards = document.querySelectorAll(".services .card-item:nth-child(n+3)");

            function toggleServicesCards() {
                hiddenCards.forEach(card => {
                    card.style.display = (card.style.display === "none" || card.style.display === "") ?
                        "block" : "none";
                });

                showMoreButton.innerText = showMoreButton.innerText === "عرض المزيد" ? "إخفاء الكروت" :
                    "عرض المزيد";
            }

            function checkServicesScreenSize() {
                if (window.innerWidth >= 768) {
                    hiddenCards.forEach(card => card.style.display = "block");
                    showMoreButton.style.display = "none";
                } else {
                    hiddenCards.forEach(card => card.style.display = "none");
                    showMoreButton.style.display = "inline-block";
                }
            }

            showMoreButton.addEventListener("click", toggleServicesCards);
            window.addEventListener("resize", checkServicesScreenSize);
            checkServicesScreenSize();
        });


        // btn add and remove mcq
        function toggleMcqCards() {
            let moreCards = document.querySelectorAll(".mcq .card-hiden");
            moreCards.forEach(card => {
                card.style.display = (card.style.display === "none" || card.style.display === "") ? "block" :
                    "none";
            });

            let button = document.querySelector(".mcq #btn-hiden");
            button.innerText = button.innerText === "عرض المزيد" ? "إخفاء الكروت" : "عرض المزيد";
        }

        function checkMcqScreenSize() {
            let allCards = document.querySelectorAll(".mcq .card-item");
            let moreCards = document.querySelectorAll(".mcq .card-hiden");
            let button = document.querySelector(".mcq #btn-hiden");

            if (window.innerWidth >= 768) {
                allCards.forEach(card => card.style.display = "block");
                if (button) button.style.display = "none";
            } else {
                moreCards.forEach(card => card.style.display = "none");
                if (button) button.style.display = "inline-block";
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            let button = document.querySelector(".mcq #btn-hiden");
            if (button) button.addEventListener("click", toggleMcqCards);

            checkMcqScreenSize();
            window.addEventListener("resize", checkMcqScreenSize);
        });
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "hatf",
  "image": "https://hatf.sa/",
  "@id": "",
  "url": "https://hatf.sa/",
  "telephone": "9660530333218",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "",
    "addressLocality": "",
    "postalCode": "",
    "addressCountry": "SA"
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  }
}
</script>
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "ovvzh2zmro");
    </script>
    <script>
        function copyPathWithAppUrl(path) {
            const appUrl = "{{ env('APP_URL') }}"; // Dynamically get APP_URL from Laravel
            const fullUrl = `${appUrl}/${path.replace(/^\//, '')}`;
            navigator.clipboard.writeText(fullUrl).catch(err => {
                console.error('Failed to copy URL to clipboard:', err);
            });
        }
    </script>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-16806674298/nlBlCI7W1PUZEPr-hc4-',
            'value': 1.0,
            'currency': 'SAR'
        });
    </script>
    @yield('js_footer')
</body>

</html>
