@extends('web.layout.main_home_new')
@section('title')
    هتف - Hatf
@endsection


@section('content')
    <!-- start hero-home -->
    <div id="تعرف_علينا" class="hero-home">
         <img src="{{ asset('storage/images/' . $section->about) }}" alt="Hero Background" class="bg-image">    
        <!-- bg-color -->
        <div class="overlay"></div>
        <div class="container">
            <div class="content">
                <h1 class="py-lg-3 py-2 text-end">
                    نعرّفك علينا
                    <span>
                        <img src="{{ asset('front/new_design/src/img/icon-home.svg') }}" alt="img"></span>
                </h1>

                <p class="py-lg-3 py-2 text-end">
                    نساعد العلامات التجارية في تحقيق النمو والتميز الرقمي عبر حلول تسويقية مبتكرة واستراتيجيات فعّالة
                    تعزز وجودها بثقة.
                </p>

                <a href="https://wa.me/+9660530333218?text=هل يمكنني الحصول على استشارة مجانية" class="center main-btn">
                    <span class="center me-2">
                        <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}" alt="">
                    </span>أحصل على استشارة مجانية
                </a>

            </div>
        </div>
    </div>
    <!-- end hero-home -->

    <!-- start-home-services -->
    <div id="خدماتنا" class="home-services py-2">
        <div class="container py-3">
            <div class="d-flex justify-content-end py-5">
                <div class="main-title-home">
                    <h4 class="card-title">
                        الخدمات
                        <img src="{{ asset('front/new_design/src/img/icon-home-service.svg') }}" width="5px"
                            height="5px" alt="">
                    </h4>
                </div>
            </div>
            <div class="container d-flex justify-content-center align-items-center">
            <div class="row justify-content-evenly w-75">
                @foreach ($services as $service)
                    <div class="col-md-6 col-12 col-lg-4 m-0 py-3 center bg-w d-flex">
                        {{-- <div class="center"> --}}
                            <div class="card py-3 h-100 w-100 d-flex flex-column">
                                <!-- card-header -->
                                <div class="d-flex justify-content-center align-items-center py-3">
                                    <div class="d-flex flex-column align-items-end me-2 ">
                                        <h5 class="text-center ">{{ $service->name }}</h5>
                                        <span></span>
                                    </div>
                                    {{-- <img src="{{ asset('front/new_design/src/img/icon-card-home-service-3.svg') }}"
                                    class="card-img-top" alt="img"> --}}

                                    <img class="card-img-top" alt="img" loading="lazy"
                                        src="{{ asset('storage/images/' . $service->image) }}">
                                </div>
                                <!-- card-body -->
                                <div class="card-body text-center py-3">
                                    <p class="card-text">
                                        {{ $service->desc }}
                                    </p>
                                </div>
                                <!-- card-footer -->
                                <div class="w-100 d-flex justify-content-center align-items-center py-3">
                                    <a href="{{ route('service.show', ['service' => $service->id]) }}"
                                        class="center main-btn">
                                        <div class="center me-2">
                                            <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}"
                                                alt="">
                                        </div>
                                        تفاصيل الخدمة
                                    </a>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                @endforeach

                {{-- <div class="col-md-6 col-12 col-lg-4 py-3 center bg-w">
                    <div class="center">
                        <div class="card py-3">
                            <!-- card-header -->
                            <div class="d-flex justify-content-center align-items-center py-3">
                                <div class="d-flex flex-column align-items-end me-2 ">
                                    <h5>الانتاج المرئي</h5>
                                    <span></span>
                                </div>
                                <img src="{{ asset('front/new_design/src/img/icon-card-home-service-2.svg') }}"
                                    class="card-img-top" alt="img">
                            </div>
                            <!-- card-body -->
                            <div class="card-body text-center py-3">
                                <p class="card-text" style="text-align: justify;">
                                    نعزز هوية علامتك التـجارية عـبـر محتوي بصري مميز مـن جرافيـك وموشن و جرافيك وتعليق
                                    صوتي ومونتـاج لتـحقيق تفاعـل أكبـر.
                                </p>
                            </div>
                            <!-- card-footer -->
                            <div class="w-100 d-flex justify-content-center align-items-center py-3">
                                <a href="#" class="center main-btn">
                                    <div class="center me-2">
                                        <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}" alt="">
                                    </div>
                                    تفاصيل الخدمه
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 py-3 center bg-w">
                    <div class="center">
                        <div class="card py-3">
                            <!-- card-header -->
                            <div class="d-flex justify-content-center align-items-center py-3">
                                <div class="d-flex flex-column align-items-end me-2 ">
                                    <h5>التسويق الرقمي </h5>
                                    <span></span>
                                </div>
                                <img src="{{ asset('front/new_design/src/img/icon-card-home-service-1.svg') }}"
                                    class="card-img-top" alt="img">
                            </div>
                            <!-- card-body -->
                            <div class="card-body text-center py-3">
                                <p class="card-text">
                                    نعزز حضورك الرقمي باستراتيجيات متـكامـلـة تـشمــل إدارة محـتـوي و إعــلانــات Google
                                    و إعـــلانــات مــمـولـة عــلي جـميـع الــمنـصـات.
                                </p>
                            </div>
                            <!-- card-footer -->
                            <div class="w-100 d-flex justify-content-center align-items-center py-3">
                                <a href="#" class="center main-btn">
                                    <div class="center me-2">
                                        <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}" alt="">
                                    </div>
                                    تفاصيل الخدمه
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            </div> 
        </div>
    </div>
    <!-- end-home-services -->
    <!-- start-home-mcq -->
    <div id="home-mcq" class="home-mcq py-2">
        <div class="container py-3">
            <div class="d-flex justify-content-end py-5">
                <div class="main-title-home">
                    <h4 class="card-title">
                        لماذا تختار هتف؟
                        <img src="{{ asset('front/new_design/src/img/icon-home-msq.svg') }}" width="5px" height="5px"
                            alt="">
                    </h4>
                </div>
            </div>
            <div class="row center">

                <div class="col-md-6 col-12 col-lg-4 py-3 center bg-w">
                    <div class="center">
                        <div class="card py-3 center">
                            <!-- card-header -->
                            <img src="{{ asset('front/new_design/src/img/icon-card-home-msq-1.svg') }}" class="card-img-top"
                                alt="img">
                            <!-- card-body -->
                            <div class="card-body text-center py-3">
                                <p class="card-text">
                                    فريقنا يمتلك خــــــــــــــبرات
                                    عميقة لتحقيق أهـــــــــدافك.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 py-3 center bg-w">
                    <div class="center">
                        <div class="card py-3 center">
                            <!-- card-header -->
                            <img src="{{ asset('front/new_design/src/img/icon-card-home-msq-2.svg') }}"
                                class="card-img-top" alt="img">
                            <!-- card-body -->
                            <div class="card-body text-center py-3">
                                <p class="card-text">
                                    أسعارنـــــــــا تنافسية وجودة
                                    خدماتنا عــــــــــــالية ومتميزة.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 py-3 center bg-w">
                    <div class="center">
                        <div class="card py-3 center">
                            <!-- card-header -->
                            <img src="{{ asset('front/new_design/src/img/icon-card-home-msq-3.svg') }}"
                                class="card-img-top" alt="img">
                            <!-- card-body -->
                            <div class="card-body text-center py-3">
                                <p class="card-text">
                                    نواكب أحــــــــــدث التطورات التقنية لضمـــــــــــان النتائج.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 py-3 center bg-w">
                    <div class="center">
                        <div class="card py-3 center">
                            <!-- card-header -->
                            <img src="{{ asset('front/new_design/src/img/icon-card-home-msq-4.svg') }}"
                                class="card-img-top" alt="img">
                            <!-- card-body -->
                            <div class="card-body text-center py-3">
                                <p class="card-text">
                                    نقدم تقــارير دورية لمساعدتك
                                    في اتخـــــــــــــــــــاذ القرارات.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 py-3 center bg-w">
                    <div class="center">
                        <div class="card py-3 center">
                            <!-- card-header -->
                            <img src="{{ asset('front/new_design/src/img/icon-card-home-msq-5.svg') }}"
                                class="card-img-top" alt="img">
                            <!-- card-body -->
                            <div class="card-body text-center py-3">
                                <p class="card-text">
                                    نصمم استراتيجيات مخصصة تناسب نشـــــــاطك التجاري.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="w-100 d-flex justify-content-center align-items-center py-3">

                <a href="https://wa.me/+9660530333218?text={{ urlencode('هل يمكنني الحصول على خدمات هتف ؟') }}"
                    class="center main-btn">
                    <span class="center me-2">
                        <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}" alt="">
                    </span>
                    تواصل معنا
                </a>
            </div>
        </div>
    </div>
    <!-- end-home-mcq -->
    <!-- start-home-navbar-enfente -->
    <div id="شركائنا" class="home-navbar-enfente py-2">
        <div class=" py-3">
            <div class="container d-flex justify-content-end py-5">
                <div class="main-title-home">
                    <h4 class="card-title">
                        شركاء النجاح
                        <img src="{{ asset('front/new_design/src/img/icon-home-navbar-enfente.svg') }}" width="5px"
                            height="5px" alt="">
                    </h4>
                </div>
            </div>
            <div class="shadow-box">
                <div class="logos-container">
                    <div class="logos">
                        <div class="logos-slide">
                            @foreach ($partners as $partner)
                                <img loading="lazy" src="{{ asset('storage/images/' . $partner->image) }}"
                                    alt="Partner Logo">
                            @endforeach
                            {{-- <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-1.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-2.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-3.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-4.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-1.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-2.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-3.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-4.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-1.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-2.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-3.svg') }}"
                                alt="Partner Logo">
                            <img src="{{ asset('front/new_design/src/img/img-home-navbar-enfenete-4.svg') }}"
                                alt="Partner Logo"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end-home-navbar-enfente -->
    <!-- start-home-blog -->
    <div id="home-blog" class="home-blog py-2">
        <div class="container py-3">
            <div class="d-flex justify-content-end py-3">
                <div class="main-title-home">
                    <h4 class="card-title">
                        احدث مدوناتنا
                        <img src="{{ asset('front/new_design/src/img/icon-home-blog.svg') }}" width="5px"
                            height="5px" alt="">
                    </h4>
                </div>
            </div>
            <div class="row justify-content-center">

                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-12 col-lg-4 center bg-w">
                        <div class="center py-3">
                            <div class="card">
                                <!-- card-header -->
                                <a
                                    href="{{ route('blogns.show', [$blog->id, preg_replace('/[^\p{Arabic}\d]+/u', '-', trim($blog->title_ar))]) }}">
                                    <img loading="lazy" src="{{ asset('storage/images/' . $blog->img) }}"
                                        class="card-img-top" alt="img">
                                </a>
                                <!-- card-body -->
                                <div class="card-body text-end py-3">
                                    <h5>
                                        {{ Str::limit($blog->title_ar, 30) }}
                                    </h5>
                                    {{-- <p class="card-text">
                                        {!! Str::limit($blog->descraption_ar, 20) !!}
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-md-6 col-12 col-lg-4 py-3 center bg-w">
                    <div class="center py-3">
                        <div class="card">
                            <!-- card-header -->
                            <img src="{{ asset('front/new_design/src/img/img-home-blog.svg') }}" class="card-img-top"
                                alt="img">
                            <!-- card-body -->
                            <div class="card-body text-end py-3">
                                <h5>
                                    العنوان الكبير للمنتج
                                </h5>
                                <p class="card-text">
                                    العنوان الاصغر للمنتج
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 col-lg-4 py-3 center bg-w">
                    <div class="center py-3">
                        <div class="card">
                            <!-- card-header -->
                            <img src="{{ asset('front/new_design/src/img/img-home-blog.svg') }}" class="card-img-top"
                                alt="img">
                            <!-- card-body -->
                            <div class="card-body text-end py-3">
                                <h5>
                                    العنوان الكبير للمنتج
                                </h5>
                                <p class="card-text">
                                    العنوان الاصغر للمنتج
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12 col-lg-4 py-3 center bg-w">
                    <div class="center py-3">
                        <div class="card">
                            <!-- card-header -->
                            <img src="{{ asset('front/new_design/src/img/img-home-blog.svg') }}" class="card-img-top"
                                alt="img">
                            <!-- card-body -->
                            <div class="card-body text-end py-3">
                                <h5>
                                    العنوان الكبير للمنتج
                                </h5>
                                <p class="card-text">
                                    العنوان الاصغر للمنتج
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
            <!--btn-->
            <div class="w-100 d-flex justify-content-center align-items-center pt-3">
                <a href="#" class="center main-btn">
                    <span class="center me-2">
                        <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}" alt="">
                    </span>
                    المزيد
                </a>
            </div>
        </div>
    </div>
    <!-- end-home-blog -->
    <!-- start-hom-packages -->
    <div id="باقاتنا" class="home-packages pt-2 pb-5">
        <div class="">
            <div class="container d-flex justify-content-end py-3 pb-5">
                <div class="main-title-home ">
                    <h4 class="card-title ">
                        باقاتنا
                        <img src="{{ asset('front/new_design/src/img/icon-home-packages.svg') }}" alt="">
                    </h4>
                </div>
            </div>

            <div class="swiper-container ps-3">
                <div class="swiper home-packages-slider">
                    <div class="swiper-wrapper">

                        @foreach ($packages as $package)
                            <div class="swiper-slide d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('storage/images/' . $package->image) }}" loading="lazy"
                                    alt="Blog Image">

                                <!-- btn -->
                                <div class="w-100 d-flex justify-content-center align-items-center pt-3">
                                    <a href="https://wa.me/+9660530333218?text={{ urlencode('هل يمكنني الحصول على باقة ' . asset('storage/images/' . $package->image)) }}"
                                        class="center main-btn">
                                        <!--<span class="center me-2">-->
                                        <!--       <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}" alt="">-->
                                        <!--</span>-->
                                        اطلب باقتك
                                    </a>
                                </div>

                            </div>
                        @endforeach

                        {{-- <div class="swiper-slide">
                            <img src="{{ asset('front/new_design/src/img/img-home-packages.png') }}" alt="Blog Image">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('front/new_design/src/img/img-home-packages.png') }}" alt="Blog Image">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('front/new_design/src/img/img-home-packages.png') }}" alt="Blog Image">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('front/new_design/src/img/img-home-packages.png') }}" alt="Blog Image">
                        </div> --}}
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- end-home-packages -->
    <!-- start-hom-contact -->
    <div id="هاتفنا" class="home-contact pt-2 pb-5">
        <div class="container">
            <div class="d-flex justify-content-end py-3">
                <div class="main-title-home ">
                    <h4 class="card-title d-flex justify-content-end align-items-center gap-2 ">
                        لطلب خدماتنا، بادر بالتواصل معنا
                        <img src="{{ asset('front/new_design/src/img/icon-home-packages.svg') }}" alt="">
                    </h4>
                </div>
            </div>
            <div class="row justify-content-center">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                <div class="col-lg-6 center col-12 py-3">
                    <img src="{{ asset('front/new_design/src/img/img-home-contact.png') }}" class="card-img-top"
                        alt="img">
                </div>

                <div class="col-lg-6 col-12 py-3 center bg-w">


                    <form class="w-100" method="POST" action="{{ route('contactUs') }}">
                        @csrf
                        <div class="form-container">
                            <div class="form-group">
                                <input type="text" name="name" value="{{ old('name') }}" required />
                            </div>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <div class="form-group">
                                <input type="number" name="phone" value="{{ old('phone') }}" required />
                            </div>
                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}" required />
                            </div>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <!-- Dropdown without JavaScript -->
                            <div class="form-group">
                                <select name="service" required>
                                    <option value="">اختر الخدمة</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->name }}"
                                            {{ old('service') == $service->name ? 'selected' : '' }}>
                                            {{ $service->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('service')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <div class="textarea-group">
                                <textarea name="message" required>{{ old('message') }}</textarea>
                            </div>
                            @error('message')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror

                            <div class="w-100 center">
                                <button type="submit" class="center main-btn mt-3">إرسال</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
    <!-- end-home-contact -->
@endsection
