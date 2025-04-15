<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="facebook-domain-verification" content="io9rpttns7ztrjz273fs9q4dwk1g4b" />
    <meta name="google-site-verification" content="3Fg8fQvJVpe_y5VW_SoU2h44JxrZYkAxj6Fqy8xZM7M" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hatf - هتف</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('front/assets/imgs/hatf.svg')}}" type="image/svg+xml" />

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="/front/assets/css/style.css">

    <style>
        /* Make the button smaller on big screens */
        @media (min-width: 1200px) {
            .carousel-control-prev {
                left: -75px;
            }

            .carousel-control-next {
                right: -75px;
            }

        }

        @media (min-width: 992px) {
            .whatsapp-button {
                font-size: 20px;
                padding: 0px 10px;
            }

            .carousel-inner .carousel-item {
                flex: 0 0 100% !important;
            }
        }

        /* Add a white arrow to change slides */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1);
        }

        .media_jo {
            padding: 0;
        }

        @media (min-width: 545px) and (max-width: 1400px) {
            .media_jo {
                padding: 0 14rem;

            }
        }
    </style>

    <style>
        .carousel-inner {
            overflow: hidden;
        }

        .carousel-item {
            transition: transform 0.6s ease;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        .owl-dots {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .owl-dot {
            width: 10px;
            height: 10px;
            background: #ddd;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .owl-dot.active {
            background: #000;
        }
    </style>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
            box-shadow: 0 0 16px -2px #bcbbba40;
        }

        .swiper-slide:hover img {
            transform: scale(1.01);
            box-shadow: 0 0 20px -1px #bcbbba40;
        }

        .aftar {
            position: relative;

            width: 100%;
            height: 100%;
            overflow: hidden;
            box-sizing: border-box;
            padding: 0;
            box-shadow: 0 0 16px -2px #bcbbba40;
        }

        .aftar:hover {
            box-shadow: 0 0 20px -1px #bcbbba40;
        }

        .aftar::after {
            content: 'غير متوفر!\A ستتوفر قريبا';
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.696);
            color: #a3a2a2;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            white-space: pre-line;
        }

        .swiper-slide a {
            color: #515151;
            padding: 8px 9px;
            background: #a4a4a4;
            border-radius: 6px;
            font-family: ManchetteFine;
            font-weight: 500;
            font-size: 16px;
            border: none;
            transition: 0.5s;
        }

        .swiper-slide .fa-whatsapp {
            color: #515151;
            font-size: 15px;
            transition: .5s;

        }
        
        .btn-close-custom {
            background-color: white;
            color: black;
            border-radius: 27%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            width: 1.5rem;
            height: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            z-index: 1000;
        }
    </style>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
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

    <!-- start header section -->
    <!-- end header section -->
    
        <!-- start header section -->
    <section style="background-image:  url({{ asset('storage/images/' . $section->header) }})">
        <!-- start navbar section -->
        <nav id="navbar" class=" position-fixed w-100 z-3 navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand m-auto" href="{{ route('home') }}"><img
                        style="height: 50px; width: 130px; @if ($agent->isMobile()) position: relative; left: 80px; @endif"
                        src="{{ asset('front/assets/imgs/hatf.svg') }}" alt="" srcset=""></a>
                <button class="navbar-toggler navbar-toggler-icon toggler-sidebar">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#about">نعرفك علينا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#services">خدماتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#gallary"> أعمالنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#Packages"> باقتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('blogns') }}">مدوّنتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">هاتفنا </a>
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
                        <a class="nav-link" aria-current="page" href="#about">نعرفك علينا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#services">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#gallary"> أعمالنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#Packages"> باقتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('blogns') }}">مدوّنتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">هاتفنا </a>
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

    {{-- //start content --}}
    <!-- start نعرفك section -->
    <section class="about d-flex justify-content-center" id="about"
        style="background-image: url({{ asset('storage/images/' . $section->about) }});">
        <div class="py-3">
            <div class="container">
                <div class="about-body">
                    <div class="main-title">
                        <p>نعرفك علينا</p>
                        <img src="{{ asset('front/assets/imgs/main-title-bg.svg') }}" height="8" width="160" alt="">
                    </div>
                    <div class="row my-3 d-flex">
                        <div class=" col-12 col-md-6 about-art mt-100">
                            <hr class="hr-p border-2 border-white" style="margin-right: 6px" />
                            <p class="about__p" @if ($agent->isMobile()) style="margin-right: -15px" @endif>
                                تخصصنا في صناعة الإعلام الجديد والذي يُعتبر إحدى القوى المؤثرة في العالم وسُلطة رابعة في
                                المُجتمع لا يُستهان بتأثيرها على تحريك الجماهير.
                            </p>
                        </div>
                        <div class=" col-12 col-md-6 ps-0 pe-md-5 about-art mt-100">
                            <hr class="hr-p border-2 border-white" style="margin-right: 6px" />
                            <p class="about__p" @if ($agent->isMobile()) style="margin-right: -15px" @endif>
                                ومن هنا تبلورت رؤيتنا بأن نصنع لعميلنا منتج إعلامي رصين قادر على التأثير في جمهوره و
                                فئته المستهدفة و محققًا للأهداف التي وُضع لأجلها.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end نعرفك section -->

    <!-- start خدماتنا section -->
    <section class="services section-p" id="services"
        style="background-image: url({{ asset('storage/images/' . $section->services) }}">
        <div class="container">
            <div class="main-title">
                <p>خدماتنا</p>
                <img src="{{ asset('front/assets/imgs/main-title-bg.svg') }}" height="8" width="160" alt="">
            </div>

            <p class=" mt-4 fs-md-3 services__p" style="font-weight: 500;">
                تكاملت جهود مختصينا لخلق تواجدًا إعلاميًا لافتاً، يُحقق رؤيتك ورسالتك في العمل وذلك من خلال خدماتنا
                المتكاملة التي
                نقدمها لك:
            </p>
        </div>
        <div class="row container">
            @foreach ($services as $service)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-5 my-3 mb-sm-0">
                <center>
                    <div class="card" style=" 
                       border-radius: 15px;
                       background: linear-gradient(144deg, rgb(152 123 34 / 43%) 2%, rgb(255 255 255 / 20%) 34.46%, rgb(152 123 35 / 48%) 78.03%, rgb(255 255 255 / 23%) 100%);
                       padding: 1px;
                       box-shadow: 0 0 10px -5px #ffffff52;
                       border: none;
                       ">
                        <div class="card-body text-center" style="
                           width: 100%;
                           height: 100%;
                           border-radius: 12px; /* Matches the outer border for smooth corners */
                           overflow: hidden;
                           background: #212121;
                           ">
                            <img class="m-auto mt-3" height="70" width="70"
                                src="{{ asset('storage/images/' . $service->icon_number) }}" alt="{{ $service->name }}">
                            <div class="card-body-img d-flex justify-content-center align-items-center my-3">
                                <img class="img-fluid" height="110" width="110" loading="lazy"
                                    src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->name }}" />
                            </div>
                            <hr style="border: 1px solid #e0e0e0;" />
                            <h3 class="card-title fw-bold text-center" style="margin-top: 10px;">
                                {{ $service->name }}</h3>
                            <p class="card-text fs-5 text-justify m-auto" style="margin: 15px 0;">
                                {{ $service->desc }}</p>
                        </div>
                    </div>
                </center>
                <!-- علي فكره التاج ده بيعمل مشاكل و غير معترف بيه -->
            </div>
            @endforeach
        </div>
    </section>
    <!-- end خدماتنا section -->

    <!-- Start أعمالنا section -->
    <section class="gallary" id="gallary"
        style="background-image: url({{ asset('storage/images/' . $section->business_show) }})">
        <div class="py-3">
            {{-- edit jo --}}
            <div class="container">
                <div class="gallary-header head-p">
                    <div class="main-title">
                        <p>أعمالنا</p>
                        <img src="{{ asset('front/assets/imgs/main-title-bg.svg') }}" height="8" width="160" alt="">
                    </div>

                    <h5 class="head-t text-center fw-bold mb-3 mt-4 ">جزء من إبداعنا أمام ناظريك</h5>
                </div>
            </div>
            <div class="container row justify-content-cetner">
                @foreach ($businessExhibitions as $businessExhibition)
                <div class="col-12 col-lg-4 mb-3 mb-sm-0 text-center">
                    <!-- Gradient Border Container -->
                    {{-- edit jo --}}
                    <div style=" 
                         border-radius: 15px;
                       background: linear-gradient(144deg, rgb(152 123 34 / 43%) 2%, rgb(255 255 255 / 20%) 34.46%, rgb(152 123 35 / 48%) 78.03%, rgb(255 255 255 / 23%) 100%);
                       padding: 1px;
                       box-shadow: 0 0 10px -5px #ffffff52;
                       border: none;
                       display: inline-block;
                       ">
                        <!-- Inner Card -->
                        <div class="card" style="
                           width: 100%;
                           height: 100%;
                           border-radius: 12px; /* Matches the outer border for smooth corners */
                           overflow: hidden;
                           background: #212121;
                       ">
                            <img src="{{ asset('storage/images/' . $businessExhibition->image) }}" class="card-img-h"
                                alt="">
                            <div class="card-body text-end">
                                <h5 class="card-title">{{ $businessExhibition->name }}</h5>
                                <p class="card-text">{{ Str::limit($businessExhibition->desc, 15, '...') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                {{ $businessExhibitions->links('web.pagination.custom') }}
            </div>
        </div>
    </section>
    <!-- end أعمالنا section -->

    <!--{{-- start باقاتنا --}}-->
    <section class="Packages" id="Packages"
        style="background-image: url({{ asset('storage/images/' . $section->business_show) }})">
        <div class="py-3">
            <div class="">
                <div class="gallary-header head-p">
                    <div style="background-color: #161616; padding: 3rem 0;">
                        <div class="container" style="padding-right: 10px; padding-left: 10px;">
                            <div class="head-p gallary-header gallary">
                                <div class="main-title"
                                    style="color: #EEEEEE; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                                    <p>باقتنا</p>
                                    <img src="{{ asset('storage/images/Rectangle 14.png') }}"
                                    alt="{{ asset('storage/images/Rectangle 14.png') }}">
                                </div>
                                <h5 class="head-t fw-bold mb-3 mt-4" style="color: #EEEEEE; text-align: center;">
                                    اكتشف باقاتنا الاحترافية المصممة خصيصًا لتلبية متطلبات أعمالك.
                                </h5>
                            </div>
                        </div>

                        <!-- Swiper -->
                        <div class="media_jo">
                            <div class="swiper mySwiper" style="padding: 2.5rem 1rem;">
                                <!-- Add ID here for JavaScript to target -->
                                <div class="swiper-wrapper" id="package-cards">
                                    <!-- looping here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--{{-- end باقاتنا --}}-->
    
    <!-- Modal Section -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <!-- Close Button -->
                <button type="button" class="btn-close btn-close-custom position-absolute top-0 end-0"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <!-- Image Display -->
                <div class="modal-body p-0 d-flex">
                    <img id="modalImage" src="" class="img-fluid w-100" alt="Expanded Image">
                </div>
            </div>
        </div>
    </div>


    <!-- start احدث مدونتنا -->
    <section class="gallary" id="gallary"
        style="background-image: url({{ asset('storage/images/' . $section->business_show) }})">
        <div class="  py-3">
            <div class="container">
                <div class="gallary-header head-p">
                    <div class="main-title">
                        <p> أحدث مدوناتنا
                        </p>
                        <img src="{{ asset('front/assets/imgs/main-title-bg.svg') }}" height="8" width="160" alt="">
                    </div>

                    <h5 class="head-t text-center fw-bold mb-3 mt-4 "> ابق على اطلاع بأخر التوجيهات و الرؤى
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end احدث مدونتنا -->


    <!-- start شركاء section -->
    <section class="partners"
        style="background-image: url({{ asset('storage/images/' . $section->success_partners) }}); height: 400px">
       <div class=" forces d-flex py-5 flex-column justify-content-center align-items-center"
        style="margin-top: 3rem;">
        <div class="main-title">
            <p>شركاء النجاح</p>
        </div>
        <div class="owl-carousel owl-theme max-width_partners" dir="ltr">
            @foreach ($partners as $partner)
            <div class="item"><img src="{{ asset('storage/images/' . $partner->image) }}" height="100" width="50" />
            </div>
            @endforeach
        </div>
        </div>
    </section>
    <!-- end شركاء section -->

    <!-- Start بالتواصل page -->
    <div class="contact" id="contact">
        <div class="main-title">
            <p>هاتفنا</p>
            <img src="{{ asset('front/assets/imgs/main-title-bg.svg') }}" height="8" width="160" alt="">
        </div>

        <h3 class=" pt-1 text-white text-center fw-lighter">
            "بادر بالتواصل معنا لطلب خدماتنا"
        </h3>
        <div class="container">
            <center>
                <div class="m-auto d-flex form-size">
                    <div class="col-4 d-none d-md-block">
                        <img style=" height: 100%;" class="w-100 rounded"
                            src="{{ asset('front/assets/imgs/cont.png') }}" alt="">
                    </div>
                    <div class="col-12 col-md-8">
                        <form id="contactForm" style="height: 100%;" name="contactForm"
                            class="bg-light p-3 align-content-around rounded" data-bs-theme="light">

                            <div class="row">
                                <div class="mb-3 col-12 col-md-6 text-end">
                                    <label for="fullName" class="form-label text-dark fw-bold">اسمك الكريم</label>
                                    <input type="text" placeholder="الاسم الثلاثي" class="form-control" id="fullName"
                                        name="fullName" required />
                                    <div class="invalid-feedback">يجب ان يكون الاسم ثلاثيا باللغة العربية</div>
                                </div>
                                <div class="mb-3 col-12 col-md-6 text-end">
                                    <label for="phoneNumber" class="form-label text-dark fw-bold">هاتف التواصل</label>
                                    <input type="tel" placeholder="0530333218" class="form-control font-m"
                                        id="phoneNumber" name="phoneNumber" required />
                                    <div class="invalid-feedback">يجب ان يكون رقما صالحا مكونا من 10 أرقام</div>
                                </div>
                            </div>

                            <div class="mb-3 text-end">
                                <label for="email" class="form-label text-dark fw-bold">البريد الالكتروني</label>
                                <input type="email" autocomplete="email" placeholder="info@hatf.sa"
                                    class="form-control font-m" id="email" name="email" required />
                                <div class="invalid-feedback">يجب ان يكون بريدا الكترونيا صالحا</div>
                            </div>
                            <div class="mb-3 text-end">
                                <label for="service" class="form-label text-dark fw-bold">الخدمة</label>
                                <select id="service" class="form-select" name="service"
                                    aria-label="Default select example" required>
                                    <option value="تصميم" selected>تصميم</option>
                                    <option value="تسويق">تسويق</option>
                                    <option value="برمجة">برمجة</option>
                                    <option value="صوتي و مرئي">صوتي و مرئي</option>
                                    <option value="أخرى">أخرى</option>
                                </select>
                            </div>
                            <div class="mb-3 text-end">
                                <label for="msg" class="form-label text-dark fw-bold">تفاصيل الخدمة</label>
                                <textarea placeholder="اكتب تفاصيل الخدمة المطلوب بالتفصيل" class="form-control"
                                    id="msg" rows="5" name="msg" required></textarea>
                                <div class="invalid-feedback">يجب ان تكون الرسالة تشمل بحد ادني 3 حروف</div>
                            </div>

                            <button type="submit" style="
                                   font-size: 5px; 
                                   font-weight: 200; 
                                   background-color: #333; 
                                   border-color: #333; 
                                   box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2); 
                                   padding: 0px 0px;  
                                   color: white;
                                   transition: all 0.3s ease;
                                   width: {{ $agent->isMobile() ? '100%' : '40%' }};
                                   height: 50px;
                               " class="col-6 btn btn-dark">
                                ارسال
                            </button>

                            <div id="formMessage" class="alert alert-success" role="alert"
                                style="display:none; text-align: center; margin-top: 20px;">
                                تم الارسال شكرا لك
                            </div>
                            <div id="error-message" class="alert alert-danger"
                                style="display:none; text-align: center; margin-top: 20px;"></div>
                        </form>
                    </div>
            </center>
        </div>
    </div>
    </div>
    <!-- End بالتواصل page -->
    {{-- //End content --}}

    <!-- start main page -->
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
    <!-- End main page -->

    <!-- Swiper JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Update dot active state based on current slide
        var carousel = document.querySelector('#carouselPackages');
        var dots = document.querySelectorAll('.owl-dot');

        carousel.addEventListener('slid.bs.carousel', function () {
            var activeItem = carousel.querySelector('.carousel-item.active');
            var index = Array.from(activeItem.parentNode.children).indexOf(activeItem);

            dots.forEach(function (dot, i) {
                if (i === index) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        });
    </script>

    <script>
        // Initialize Swiper
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 15,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                992: {
                    slidesPerView: 3,
                },
                0: {
                    slidesPerView: 1.2,
                }
            }
        });
        
        // Fetch data and populate Swiper slides
        fetch("https://hatf.sa/api/package")
            .then((response) => {
                if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
                return response.json();
            })
            .then((data) => {
                console.log(data);
            const path = data.path;
            const pathImage = data.data[0].image;
            const fullPath = path+"/"+pathImage;
            console.log(fullPath);


                if (data.status === 200) {
                    const swiperWrapper = document.getElementById("package-cards");
                    data.data.forEach((packageItem) => {
                        const slide = document.createElement("div");
                        slide.classList.add("swiper-slide");

                        // Generate HTML based on availability
                        const packageCard = packageItem.availability === "available" ? `
                        <div class="d-flex flex-column align-items-center">
                            <div class="position-relative w-100">
                                <img src="${data.path}/${packageItem.image}" alt="Package 1" class="d-block w-100 card-img-top"
                                    data-bs-toggle="modal" data-bs-target="#imageModal">
                            </div>
                            <div class="w-100" style="text-align: center; margin-top: 10px;">
                                <a href="https://wa.me/${packageItem.number}?text= ${data.path}/${packageItem.image} اريد الحصول على هذه الباقة"
                                    class="btn btn-light text-dark mt-3 " target="_blank">
                                    <i class="fa-brands fa-whatsapp"></i>
                                  اطلبها الان
                                </a>
                            </div>
                        </div>` : `
                        <div class="d-flex flex-column align-items-center">
                            <div class="position-relative w-100">
                                <!-- class aftar  -->
                                <div id="specialContent" class="aftar">
                                    <img src="${data.path}/${packageItem.image}" alt="Package 1"
                                        class="d-block w-100">
                                </div>
                            </div>
                            <div class="w-100 container-a" style="text-align: center; margin-top: 10px;">
                                <a href="https://wa.me/${packageItem.number}?text= ${data.path}/${packageItem.image} اريد الحصول على هذه الباقة"
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
                    if (typeof swiper !== 'undefined' && swiper.update) {
                        swiper.update();
                    } else {
                        console.warn("Swiper instance not found. Ensure Swiper is initialized.");
                    }
                } else {
                    console.error("Error fetching data:", data);
                }
                
        const images = document.querySelectorAll('.card-img-top').forEach(img => {
            img.addEventListener('click', (e) => {
                document.getElementById('modalImage').src = e.target.src;
                
            });
        }); 
    })
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
</body>

</html>
