<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="facebook-domain-verification" content="io9rpttns7ztrjz273fs9q4dwk1g4b" />
    <meta name="google-site-verification" content="3Fg8fQvJVpe_y5VW_SoU2h44JxrZYkAxj6Fqy8xZM7M" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hatf - هتف</title>
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
    <link rel="icon" href="{{ asset('front/assets/imgs/favicon.svg') }}" type="image/svg+xml" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front/assets/imgs/favicon.svg') }}">
    <link rel="icon" type="image/png" href="{{ asset('front/assets/imgs/favicon.ico') }}">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PGW6ZSCB');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E8ZRMWHQRS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-E8ZRMWHQRS');
    </script>
</head>

<body data-bs-theme="dark">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGW6ZSCB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- start main page -->
    <div class="main-title" style="margin-top: 50px;">
        <h1>هَتْفَ</h1>
    </div>
    <!-- start header section -->
    <section style="background-image:  url({{ asset('storage/images/' . $section->header) }})">
        <!-- start navbar section -->
        <nav id="navbar" class=" position-fixed w-100 z-3 navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand m-auto" href="{{route('home')}}"><img style="height: 50px; width: 130px;"
                        src="{{ asset('front/assets/imgs/hatf.svg') }}" alt="" srcset=""></a>
                <button class="navbar-toggler navbar-toggler-icon toggler-sidebar">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#about"
                                onclick="scrollToSection(event, 'about')">نعرفك علينا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#services"
                                onclick="scrollToSection(event, 'services')">خدماتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#gallary"
                                onclick="scrollToSection(event, 'gallary')">أعمالنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#Packages"
                                onclick="scrollToSection(event, 'Packages')">باقتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#contact"
                                onclick="scrollToSection(event, 'contact')">هاتفنا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="navbar-mobile">
            <button class="btn close-sidebar fa-solid fa-times"></button>
            <!-- Start Sidebar -->
            <div class="links">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#about"
                            onclick="scrollToSection(event, 'about')">نعرفك علينا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#services"
                            onclick="scrollToSection(event, 'services')">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#gallary"
                            onclick="scrollToSection(event, 'gallary')">أعمالنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#Packages"
                            onclick="scrollToSection(event, 'Packages')">باقتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#contact"
                            onclick="scrollToSection(event, 'contact')">هاتفنا</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- End navbar section -->
        <div class=" background p-3">
            <div class="container min-vh-100 d-flex flex-column justify-content-evenly">
                <div class="header-body">{{ $header->title }}</div>
                <div class="header-end row justify-content-between">
                    <div class="col-12 col-md-8">
                        <p class="header__content-text">{{ $header->desc }} </p>
                    </div>
                    <div class="col-12 col-md-4 text-start header__arrow-right">
                        <p>
                            <a href="{{ asset('هتف - الملف التعريفي.pdf') }}" download="هتف - الملف التعريفي.pdf">
                                <i class="fas fa-arrow-right"></i>
                                الملف التعريفي
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-12 text-center header__arrow-down">
                    <a href="#about" class="fs-4  rounded-circle p-3">
                        <i class="fas fa-angle-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end header section -->
    <section class="gallary" id="gallary"
        style="background-image: url({{ asset('storage/images/' . $section->business_show) }})">
        <div class="  py-3">
            <div class="container">
                <div class="gallary-header head-p">
                    <div class="main-title">
                        <p> أحدث مدوناتنا
                        </p>
                        <img src="{{ asset('front/assets/imgs/main-title-bg.svg') }}" height="8" width="160"
                            alt="">
                    </div>

                    <h5 class="head-t text-center fw-bold mb-3 mt-4 "> ابق على اطلاع بأخر التوجيهات و الرؤى
                    </h5>
                </div>
            </div>


            <div class="container row justify-content-start">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-12 col-lg-12 mb-3 mb-sm-0" style="margin-top: 100px;">
                            <div class="row">

                                <div class="col-12" style="display: flex; justify-content: center;">
                                    <img src="{{ asset('storage/images/' . $blog->img) }}" class="card-img-h"
                                        alt="">
                                </div>

                                <div class="col-12" style="margin-bottom: 40px; margin-top: 40px;">
                                    <h5 class="card-title" style="text-align: center;">{{ $blog->title_ar }}</h5>
                                </div>


                                <div class="col-12">
                                    <p class="card-text">{!! $blog->descraption_ar !!}</p>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $blogs->links('web.pagination.custom') }}
            </div>

        </div>
    </section>
    <!-- end احدث مدونتنا -->

    <!-- End blogs page -->

    <!-- start main page -->
    <section class="footer  ">
        <div class="container pt-4">
            <div class="footer-body">
                <div class="row">
                    <div class=" col-12 col-md-6 text-center align-items-center">
                        <img class="py-1" style="height: 50px; width: 130px;"
                            src="{{ asset('front/assets/imgs/hatf.svg') }}" alt="" srcset="">
                        <div class=" py-1 d-flex justify-content-center col-md-12">
                            <a target="_blank" class="nav-link fw-bold" style="width: 38px;"
                                href="https://www.instagram.com/hatf_sa">
                                <img class="icon-footer" style="width: 60%;"
                                    src="{{ asset('front/assets/imgs/instagram.png') }}" alt="instagramIcon" />
                            </a>
                            <a target="_blank" class="nav-link fw-bold" style="width: 38px;"
                                href="https://x.com/hatf_sa">
                                <img class="icon-footer" style="width: 60%;"
                                    src="{{ asset('front/assets/imgs/x.png') }}" alt="xIcon" />
                            </a>
                            <a target="_blank" class="nav-link fw-bold" style="width: 38px;"
                                href="https://www.tiktok.com/@hatf_sa">
                                <img class="icon-footer" style="width: 60%;"
                                    src="{{ asset('front/assets/imgs/tiktok.png') }}" alt="tictokIcon" />
                            </a>
                        </div>
                    </div>
                    <div class=" col-12 col-md-6">
                        <div class="foot-s" style="margin-top: 10px">
                            <a href="https://wa.me/+9660530333218" style="direction: ltr"
                                class=" py-1 nav-link d-flex justify-content-center align-items-center fw-bold">
                                <i class="fab fa-whatsapp" style="width: 18px; height: 18px;"></i>
                                <p class="m-0 font-m" style="padding-top: 5px;">0530333218</p>
                            </a>
                        </div>
                        <div class="foot-s">
                            <a class=" py-1 nav-link d-flex justify-content-center align-items-center font-m"
                                href="mailto:Info@hatf.sa">
                                Info@hatf.sa
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-end pt-3">
                <div class="row py-1">
                    <div class="col-12 text-center">
                        <p class="fw-light mb-0">جميع الحقوق محفوظة لـ هتْف © 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End main page -->
    <script>
        function scrollToSection(event, sectionId) {
            // Prevent the default link behavior
            event.preventDefault();

            // Check if we're on the homepage
            if (window.location.pathname === "{{ route('home') }}") {
                // Scroll to the specified section
                document.getElementById(sectionId).scrollIntoView({
                    behavior: 'smooth'
                });
            } else {
                // Redirect to the homepage with the section ID
                window.location.href = "{{ route('home') }}#" + sectionId;
            }
        }
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
</body>

</html>
