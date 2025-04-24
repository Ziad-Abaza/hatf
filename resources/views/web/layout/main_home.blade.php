<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
            <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGW6ZSCB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="facebook-domain-verification" content="io9rpttns7ztrjz273fs9q4dwk1g4b" />
    <meta name="google-site-verification" content="3Fg8fQvJVpe_y5VW_SoU2h44JxrZYkAxj6Fqy8xZM7M" />


    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>هتف - Hatf</title>
    <meta name="description" content="{{ config('app-meta.descraption') }}" />
    <meta name="keywords" content="{{ config('app-meta.key_words') }}" />
    <meta name="author" content="Hatf" />
    <meta name="robots" content="index, follow" />
    <!-- Favicon -->
    <!--<link-->
    <!--  rel="icon"-->
    <!--  href="{{ asset('front/assets/imgs/hatf.svg') }}"-->
    <!--  type="image/svg+xml"-->
    <!--/>-->
    <link rel="icon" href="{{ asset('front/assets/imgs/favicon.svg') }}" type="image/svg+xml" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front/assets/imgs/favicon.ico') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('front/assets/imgs/favicon.ico?v=2') }}">
    <link rel="alternate" href="https://hatf.sa/" hreflang="ar-sa"  />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.theme.default.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/style2.css') }}" />
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
    <!-- TikTok Pixel Code Start -->
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
    <!-- TikTok Pixel Code End -->


    @yield('js_header')
</head>

<body data-bs-theme="dark">

    <!-- start header section -->
    @include('web.layout.navbar_home')

        <!-- start hero -->
        <!-- end hero -->

    <!-- end header section -->

    {{-- //start content --}}
    @yield('content')
    {{-- //End content --}}

    <!-- start main page -->
     @include('web.layout.footer')

    <!-- End main page -->

    <!-- Swiper JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Update dot active state based on current slide
        var carousel = document.querySelector("#carouselPackages");
        var dots = document.querySelectorAll(".owl-dot");

        carousel.addEventListener("slid.bs.carousel", function() {
            var activeItem = carousel.querySelector(".carousel-item.active");
            var index = Array.from(activeItem.parentNode.children).indexOf(
                activeItem
            );

            dots.forEach(function(dot, i) {
                if (i === index) {
                    dot.classList.add("active");
                } else {
                    dot.classList.remove("active");
                }
            });
        });
    </script>
    <script>
        // Initialize Swiper
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 3,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {

                768: {
                    slidesPerView: 3,
                },

                0: {
                    slidesPerView: 1.4,
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });


        // Fetch data and populate Swiper slides
        fetch("https://hatf.sa/api/package")
            .then((response) => {
                if (!response.ok)
                    throw new Error(`HTTP error! status: ${response.status}`);
                return response.json();
            })
            .then((data) => {
                console.log(data);
                const path = data.path;
                const pathImage = data.data[0].image;
                const fullPath = path + "/" + pathImage;
                console.log(fullPath);

                if (data.status === 200) {
                    const swiperWrapper = document.getElementById("package-cards");
                    data.data.forEach((packageItem) => {
                        const slide = document.createElement("div");
                        slide.classList.add("swiper-slide");

                        // Generate HTML based on availability
                        const packageCard =
                            packageItem.availability === "available" ?
                            `
                        <div class="d-flex flex-column align-items-center">
                            <div class="position-relative w-100 image-container-icon-slider">
                                <img src="${data.path}/${packageItem.image}" alt="Package 1" class="d-block w-100 card-img-top"
                                    data-bs-toggle="modal" data-bs-target="#imageModal">
                                <i class="fa-solid eye-icon fa-magnifying-glass"></i>
                            </div>
                            <div class="w-100" style="text-align: center; margin-top: 10px;">
                                <a href="https://wa.me/${packageItem.number}?text= ${data.path}/${packageItem.image} اريد الحصول على هذه الباقة"
                                    class="btn btn-light text-dark mt-3 " target="_blank">
                                    <i class="fa-brands fa-whatsapp"></i>
                                  اطلبها الان
                                </a>
                            </div>
                        </div>` :
                            `
                        <div class="d-flex flex-column align-items-center">
                            <div class="position-relative w-100">
                                <!-- class aftar  -->
                                <div id="specialContent" class="aftar">
                                    <img src="${data.path}/${packageItem.image}" alt="Package 1"
                                        class="d-block w-100">
                                </div>
                            </div>
                            <div class="w-100 container-a" style="text-align: center; margin-top: 10px;">
                                <a href="https://wa.me/${packageItem.number}?text= ${data.path}/${packageItem.image}  هل يمكننى حجز هذه الباقة!؟"
                                    class="btn btn-light text-dark mt-3 " target="_blank">
                                    <i class=" fa-brands fa-whatsapp"></i>
                                   احجزهاالان
                                </a>
                            </div>
                        </div>`;

                        // Insert package card into slide
                        slide.innerHTML = packageCard;
                        swiperWrapper.appendChild(slide);
                    });

                    // Update Swiper layout
                    if (typeof swiper !== "undefined" && swiper.update) {
                        swiper.update();
                    } else {
                        console.warn(
                            "Swiper instance not found. Ensure Swiper is initialized."
                        );
                    }
                } else {
                    console.error("Error fetching data:", data);
                }

                const images = document
                    .querySelectorAll(".card-img-top")
                    .forEach((img) => {
                        img.addEventListener("click", (e) => {
                            document.getElementById("modalImage").src = e.target.src;
                        });
                    });
            });
        // .catch((error) => console.error("Fetch error:", error));
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/all.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/app.js') }}"></script>
    <script src="{{ asset('front/assets/js/package.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
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
