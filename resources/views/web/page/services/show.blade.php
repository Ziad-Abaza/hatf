@extends('web.layout.main_home_new')
@section('title')
    {{ $service->serviceBaner->title ?? '' }}
@endsection
@section('content')
    <!-- end nav -->
    <!-- start hero -->
    <div class="hero">
    <img src="{{ $service->serviceBaner->getFirstMediaUrl('services_baner') }}" alt="Hero Background" class="bg-image">
    <div class="overlay"></div>
    <div class="container">
        <div class="content">
            <h1 class="py-lg-3 py-2  text-end">
                {{ $service->serviceBaner->title ?? '' }}
                <span>
                    <img src="{{ asset('front/new_design/src/img/icon-hero-2.svg') }}" alt="img">
                </span>
            </h1>
            <h4 class="py-lg-3 py-2 text-end">
                {{ $service->serviceBaner->second_title ?? '' }}
            </h4>
            <p class="py-lg-3 py-2 text-end">
                {{ $service->serviceBaner->description ?? '' }}
            </p>
            <a href="https://wa.me/+9660530333218?text=هل يمكنني الحصول على استشارة مجانية" class="center main-btn">
                <span class="center me-2">
                    <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}" alt="">
                </span>احجز استشارتك المجانية
            </a>
        </div>
    </div>
</div>

    <!-- end hero -->
    <!-- start services -->
    <div id="services" class="services py-1 py-md-3 py-lg-5">
        <div class="container py-3">
            <div class="text-end py-5">
                <h4 class="card-title d-flex justify-content-end align-items-center gap-2">
                    خدمات هتف
                    {{ $service->serviceBaner->title ?? '' }}
                    <img src="{{ asset('front/new_design/src/img/icon-serves-2.svg') }}" width="5px" height="5px"
                        alt="">
                </h4>
            </div>
            <div class="row center">

                @foreach ($service->subServices as $subService)
                    <div class="col-md-6 py-3 center card-item">
                        <div class="bg center">
                            <div class="card py-3 " style="width: 19rem;">
                                <div class="w-100 center">
                                    <img src="{{ $subService->getFirstMediaUrl('sub_services') }}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-end">
                                    <h5 class="card-title">
                                        {{ $subService->title }}
                                        <img src="{{ asset('front/new_design/src/img/icon-2-serves-1.svg') }}"
                                            width="15px" height="15px" alt="img">
                                    </h5>
                                    <p class="card-text">
                                        {!! $subService->description !!}
                                    </p>
                                </div>
                                <div class="w-100 d-flex justify-content-center align-items-center">
                                    <a href="https://wa.me/+9660530333218?text={{ urlencode(' هل يمكنني الحصول على خدمة ' . ' ' . $service->name) }}"
                                        class="center main-link">
                                        <span class="center me-2">
                                            <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}"
                                                alt="img">
                                        </span>
                                        احجز الان
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="text-center mt-4">
                <button id="showMore" class="main-link">عرض المزيد</button>
            </div>
        </div>
    </div>
    <!-- end services -->
    <!-- start about-1 -->
    <div class="about-1 py-1 py-md-3 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 py-3 order-2 order-lg-1">

                    <div class="text-end py-3">
                        <h4 class="card-title d-flex justify-content-end align-items-center gap-2">
                            {{ $service->serviceSectshions[0]->title }}
                            <img src="{{ asset('front/new_design/src/img/icon-title-services.svg') }}" alt="">
                        </h4>
                    </div>

                    <ul class="text-end">
                        @foreach ($service->customerAdvantages as $customerAdvantage)
                            <li>
                                <h5 class="card-title pb-2">
                                    {{ $customerAdvantage->title }}
                                    <img src="{{ asset('front/new_design/src/img/icon-h-list.svg') }}" alt="">
                                </h5>
                                <div class="">
                                    <p>
                                        {{ $customerAdvantage->description }}
                                    </p>
                                    <img src="{{ asset('front/new_design/src/img/dot.svg') }}" alt="">
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <div class="w-100 d-flex justify-content-end align-items-center">
                        <a href="https://wa.me/+9660530333218?text={{ urlencode('هل يمكنني الحصول على خدمات هتف') }}"
                            class="center main-btn">
                            <span class="center me-2">
                                <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}" alt="">
                            </span>
                            تواصل معنا
                        </a>
                    </div>

                </div>
                <div class="col-lg-6 col-12 py-5 order-1 order-lg-2 center ">
                    <img width="75%" height="100%"
                        src="{{ $service->serviceSectshions[0]->getFirstMediaUrl('services_sectshions') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end about-1 -->
    <!-- start about-2 -->
    <div class="about-2 py-1 py-md-3 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 py-3 center">
                    <img width="75%" height="100%"
                        src="{{ $service->serviceSectshions[1]->getFirstMediaUrl('services_sectshions') }}" alt="">
                </div>
                <div class="col-lg-6 col-12 py-3">

                    <div class="text-end py-3">
                        <h4 class="card-title d-flex justify-content-end align-items-center gap-2">
                            {{ $service->serviceSectshions[1]->title }}
                            <img src="{{ asset('front/new_design/src/img/icon-title-services.svg') }}" alt="">
                        </h4>
                    </div>

                    <ul class="text-end">

                        @foreach ($service->ourAdvantages as $ourAdvantage)
                            <li>
                                <h5 class="card-title pb-2">
                                    {{ $ourAdvantage->title }}
                                    <img src="{{ asset('front/new_design/src/img/icon-h-list.svg') }}" alt="">
                                </h5>
                                <div class="">
                                    <p>
                                        {{ $ourAdvantage->description }}
                                    </p>
                                    <img src="{{ asset('front/new_design/src/img/dot.svg') }}" alt="">
                                </div>
                            </li>
                        @endforeach

                    </ul>

                    <div class="w-100 d-flex justify-content-end align-items-center">
                        <a href="https://wa.me/+9660530333218?text={{ urlencode('هل يمكنني الحصول على خدمات هتف') }}"
                            class="center main-btn">
                            <span class="center me-2">
                                <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}" alt="">
                            </span>
                            تواصل معنا
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end about-2 -->
    <!-- start mcq -->
    <div class="mcq py-1 py-md-3 py-lg-5">
        <div class="container py-3">
            <div class="text-end py-3">
                <h4 class="card-title">
                    لماذا اختار هتف؟
                    <img src="{{ asset('front/new_design/src/img/icon-home-msq.svg') }}" width="5px" height="5px"
                        alt="">
                </h4>
            </div>
            <div class="row center">

                @foreach ($features as $feature)
                    <div class="col-lg-4 col-md-6 col-sm-12 py-3 center card-item">
                        <div class="bg center">
                            <div class="card py-3">
                                <div class="dev w-100">
                                    <div class="d-flex justify-content-center w-100 align-items-center">
                                        <img src="{{ $feature->getFirstMediaUrl('features') }}" class="card-img-top"
                                            alt="img">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title"> {{ $feature->title }} </h5>
                                        <p class="card-text text-center">
                                            {{ $feature->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            <div class="w-100 d-flex justify-content-center align-items-center py-4">
                <button id="btn-hiden" class="center main-link">عرض المزيد</button>
            </div>
        </div>
    </div>
    <!-- end mcq -->
    <!-- start comment -->
    <div class="comment py-1 py-md-3 py-lg-5">
        <div class="container pb-3">
            <div class="text-end">
                <h4 class="card-title">
                    تقييمات العملاء
                    <img src="{{ asset('front/new_design/src/img/icon-title-comment.svg') }}" width="20"
                        height="20" alt="img">
                </h4>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper py-4">

                    @foreach ($reviews as $review)
                        <div class="swiper-slide">
                            <div class="center bg">
                                <div class="card py-3">
                                    <div class="center w-100 py-2">
                                        @for ($i = 0; $i < $review->rating; $i++)
                                            <img src="{{ asset('front/new_design/src/img/star-comment.svg') }}"
                                                class="card-img-top" alt="img">
                                        @endfor
                                    </div>
                                    <div class="card-body text-end">
                                        <p class="card-text text-center">
                                            {{ $review->content }}
                                        </p>
                                        <div class="center py-3">
                                            <div class="d-flex flex-column pe-3">
                                                <h6 class="card-title">
                                                    {{ $review->name }}
                                                    </h5>
                                                    <span>
                                                        {{ $review->job_title }}
                                                    </span>
                                            </div>
                                            <div class="dev">
                                                <img src="{{ $review->getFirstMediaUrl('reviews') ?? '' }}"
                                                    width="100%" height="100%" alt="img">
                                            </div>
                                        </div>
                                        <div class="" style="margin-top: -33px;">
                                            <img src="{{ asset('front/new_design/src/img/comment.svg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- end comment -->
    <!-- start about-3 -->
    <div class="about-3 py-1 py-md-3 py-lg-5 text-end">
        <div class="container py-3">
            <div class="text-end py-3">
                <h4 class="card-title d-flex justify-content-end align-items-center gap-2">
                    {{ $service->serviceSectshions[2]->title }}
                    <img src="{{ asset('front/new_design/src/img/icon-title-cmq.svg') }}" alt="">
                </h4>
            </div>
            <div class="py-3 text-end">
                <ul class="text-end p-0">
                    @foreach ($service->questions as $question)
                        <li class="toggle-li">
                            <p class="pe-2 toggle-question">
                                {{ $question->title }}
                                <img  src="{{ asset('front/new_design/src/img/dot-2.svg') }}"
                                    alt="">
                            </p>
                            <div class="answer d-none">
                                {{ $question->description }}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- end about-3 -->
    <!-- start contact -->
    <div class="contact py-1 py-md-3 py-lg-5 text-center">
        <div class="container py-3">
            <div class="pb-3">
                <img src="{{ $service->serviceSectshions[2]->getFirstMediaUrl('services_sectshions') }}" width="50%"
                    height="100%" alt="img">
            </div>
            <div class="py-3">
                <h5 class="pb-5">
                    تواصل معنا الآن
                    <img src="{{ asset('front/new_design/src/img/icon-title-contact.svg') }}" width="20px"
                        height="20px" alt="img" />
                </h5>
                <p class="m-0">
                    لا تتردد في الانضمام إلى قائمة عملائنا المميزين. احجز استشارتك المجانية الآن ودعنا نساعدك في تحقيق
                    أهدافك الرقمية.
                </p>
                <span class="">
                    احجز استشارتك المجانية الآن
                </span>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center py-4">
                <a href="https://wa.me/+9660530333218?text={{ urlencode('هل يمكنني الحصول على خدمات هتف') }}"
                    class="center main-btn">
                    <span class="center me-2">
                        <img src="{{ asset('front/new_design/src/img/icon-btn-hero.svg') }}" alt="">
                    </span>
                    تواصل معنا
                </a>
            </div>
        </div>
    </div>
    <!-- end contact -->
@endsection
