@extends('web.layout.main_home')

@section('content')
    <div class="main-title" style="margin-top: 50px;">
        <h1>{{ __('frontend/home.home.hatf') }}</h1>
    </div>

    {{-- //start content --}}
    <!-- start About Us section -->
    <section class="about d-flex justify-content-center" id="about_us"
        style="background-image: url({{ asset('storage/images/' . $section->about) }});">
        <div class="py-3">
            <div class="container">
                <div class="about-body">
                    <div class="main-title d-flex justify-content-center align-items-center">
                        <div class="jo-box-cont d-flex justify-content-center align-items-center w-auto">
                            <p class="m-0">{{ trans('frontend/home.home.about_section_title') }}</p>
                        </div>
                    </div>
                    <div class="row my-3 d-flex">
                        <div class="col-12 col-md-6 about-art mt-100">
                            <hr class="hr-p border-2 border-white" style="margin-right: 6px" />
                            <p
                                @if ($agent->isMobile()) style="font-size: 20px;max-width: 329px; line-height: 30px; margin-right: -15px"
                            @else
                            style="font-size: 20px;max-width: 329px; line-height: 30px;" @endif>
                                {{ trans('frontend/home.home.about_section_desc1') }}
                            </p>
                        </div>
                        <div class="col-12 col-md-6 ps-0 pe-md-5 about-art mt-100">
                            <hr class="hr-p border-2 border-white" style="margin-right: 6px" />
                            <p
                                @if ($agent->isMobile()) style="font-size: 20px;max-width: 329px; line-height: 30px; margin-right: -15px"
                            @else
                            style="font-size: 20px;max-width: 329px; line-height: 30px;" @endif>
                                {{ trans('frontend/home.home.about_section_desc2') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end About Us section -->

    <!-- start Our Services section -->
    <section class="services section-p pt-5 pb-5" id="our_services"
        style="background-image: url({{ asset('storage/images/' . $section->services) }}">
        <div class="container">
            <div class="main-title d-flex justify-content-center align-items-center">
                <div class="jo-box-cont d-flex justify-content-center align-items-center w-auto">
                    <p class="m-0" @if ($agent->isMobile()) style="font-size: 20px;" @endif>
                        {{ trans('frontend/home.home.services_section_title') }}</p>
                </div>
            </div>
            <p class="mt-4 fs-md-3 services__p"
                @if ($agent->isMobile()) style="font-size: 20px; font-weight: 500 text-align: right;" @endif>
                {{ trans('frontend/home.home.services_section_desc') }}
            </p>
        </div>
        <div class="row container">
            @foreach ($services as $service)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-5 my-3 mb-sm-0">
                    <center>
                        <div class=""
                            style=" 
                   border-radius: 15px;
                   background: linear-gradient(144deg, rgb(152 123 34 / 43%) 2%, rgb(255 255 255 / 20%) 34.46%, rgb(152 123 35 / 48%) 78.03%, rgb(255 255 255 / 23%) 100%);
                   padding: 1px;
                   box-shadow: 0 0 10px -5px #ffffff52;
                   border: none;"
                            style="
                    width: 18rem;
                    height: 100%;
                ">
                            <div class="card-body text-center jo-edit-card pt-4 pb-4"
                                style="
                        width: 100%;
                        height: 100%;
                        border-radius: 12px;
                        overflow: hidden;
                        background: #212121;
                        position: relative;
                    ">
                                <img loading="lazy" class="m-auto" height="70" width="70"
                                    src="{{ asset('storage/images/' . $service->icon_number) }}" alt="{{ $service->name }}">

                                <div class="card-overlay"></div>

                                <div class="card-body-img d-flex justify-content-center align-items-center pt-3 pb-3 "
                                    style="box-shadow: 0 6px 5px -7px wheat;         
                        height: 125px;
                        width: 200px;
                        margin: auto;">
                                    <img loading="lazy" class="img-fluid" height="100" width="100" loading="lazy"
                                        src="{{ asset('storage/images/' . $service->image) }}"
                                        alt="{{ $service->name }}" />
                                </div>
                                <!--<hr style="border: 1px solid #e0e0e0;" />-->
                                <h3 class="card-title fw-bold text-center pt-3 pb-3 m-0" style="font-size: 30px;">
                                    {{ $service->name }}
                                </h3>

                                <p class="jo-edit-card-content card-text fs-5 text-justify m-auto">
                                    {{ $service->desc }}
                                </p>


                                <a href="https://wa.me/+9660530333218?text={{ urlencode(trans('frontend/home.home.consult_now') . ': ' . $service->name) }}"
                                    class="text-white" target="_blank">
                                    <i class="fab fa-whatsapp icon-top-right"></i>
                                    {{ trans('frontend/home.home.consult_now') }}
                                </a>



                            </div>

                        </div>
                    </center>
                    <!-- علي فكره التاج ده بيعمل مشاكل و غير معترف بيه -->
                </div>
            @endforeach
        </div>
    </section>
    <!-- end Our Services section -->


    <!-- Start أعمالنا section -->
    <section class="gallary" id="أعمالنا"
        style="background-image: url({{ asset('storage/images/' . $section->business_show) }})">
        <div class="py-3">
            {{-- edit jo --}}
            <div class="container">
                <div class="gallary-header head-p">
                    <div class="main-title d-flex justify-content-center align-items-center">
                        <div class="jo-box-cont d-flex justify-content-center align-items-center w-auto">
                            <p style="margin: 0;">{{ trans('frontend/home.home.business_section_title') }}</p>
                        </div>
                    </div>
                    <p class="mt-4 fs-md-3"
                        @if ($agent->isMobile()) style="font-size: 20px; font-weight: 500 text-align: right;"@else style="font-size: 30px; text-align: center;" @endif>
                        {{ trans('frontend/home.home.business_section_subtitle') }}
                    </p>
                </div>
            </div>
            <div class="container row justify-content-cetner">
                @foreach ($businessExhibitions as $businessExhibition)
                    <div class="col-12 col-lg-4 mb-3 mb-sm-0 text-center">
                        <!-- Gradient Border Container -->
                        {{-- edit jo --}}
                        <div
                            style=" 
                        width: 100%; 
                        height: auto; 
                         border-radius: 15px;
                       background: linear-gradient(144deg, rgb(152 123 34 / 43%) 2%, rgb(255 255 255 / 20%) 34.46%, rgb(152 123 35 / 48%) 78.03%, rgb(255 255 255 / 23%) 100%);
                       padding: 1px;
                       box-shadow: 0 0 10px -5px #ffffff52;
                       border: none;
                       display: inline-block;
                       ">
                            <div class="card"
                                style="
                        width: 100%; 
                        height: 100%; 
                        border-radius: 12px; 
                        overflow: hidden; 
                        background: #212121; 
                        transition: height 0.3s ease;
                    "
                                onclick="toggleDescription(this)">
                                <img loading="lazy" src="{{ asset('storage/images/' . $businessExhibition->image) }}"
                                    class="card-img-h " alt="">
                                <div class="card-body text-end">
                                    <h5 class="card-title">{{ $businessExhibition->name }}</h5>
                                    <p class="card-text">
                                        <span class="short-text"
                                            style="display: inline;">{{ Str::limit($businessExhibition->desc, 15, '') }}</span>
                                        <span class="hidden-text"
                                            style="display: none;">{{ $businessExhibition->desc }}</span>
                                        <span class="toggle-more"
                                            style="color: #8d8d8d; cursor: pointer; text-decoration: underline; text-underline-offset: 4px;">...
                                            {{ trans('frontend/home.home.more') }}</span>
                                    </p>
                                </div>
                            </div>

                            <!-- JavaScript -->
                            <script>
                                function toggleDescription(card) {
                                    const hiddenText = card.querySelector(".hidden-text");
                                    const toggleMore = card.querySelector(".toggle-more");
                                    const shortText = card.querySelector(".short-text");

                                    if (hiddenText.style.display === "none") {
                                        hiddenText.style.display = "inline";
                                        toggleMore.textContent = " أقل";
                                        shortText.style.display = "none";
                                        card.style.height = "auto";
                                    } else {
                                        hiddenText.style.display = "none";
                                        toggleMore.textContent = "... المزيد";
                                        shortText.style.display = "inline";
                                        card.style.height = "auto";
                                    }
                                }
                            </script>

                            <!-- CSS -->
                            <style>
                                .card {
                                    cursor: pointer;
                                    transition: all 0.3s ease;
                                    height: 300px;
                                    width: 100%;
                                    /* تثبيت العرض */
                                    max-width: 100%;
                                    /* منع تجاوز العرض */
                                    overflow: hidden;
                                }

                                .toggle-more {
                                    font-weight: 500;
                                    text-decoration: underline;
                                }
                            </style>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end أعمالنا section -->

    <!--{{-- start باقاتنا --}}-->
    <section class="Packages" id="باقتنا"
        style="background-image: url({{ asset('storage/images/' . $section->business_show) }})">
        <div class="py-3">
            <div class="">
                <div class="gallary-header head-p">
                    <div style="background-color: #161616; padding: 3rem 0;">
                        <div class="container" style="padding-right: 10px; padding-left: 10px;">
                            <div class="head-p gallary-header gallary">
                                <div
                                    class="main-title d-flex justify-content-center align-items-center"style="flex-direction: column;">
                                    <div class="jo-box-cont d-flex justify-content-center align-items-center w-auto">
                                        <p style="margin:0;">{{ trans('frontend/home.home.package_section_title') }}</p
                                            </div>
                                    </div>
                                    <h5 class="head-t fw-bold mb-3 mt-4" style="color: #EEEEEE; text-align: center;">
                                        {{ trans('frontend/home.home.package_section_subtitle') }}
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
                                    <!-- أزرار التنقل -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
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
            <div class="modal-content modal-custom">
                <!-- Close Button -->
                <button type="button" class="btn-close btn-close-custom position-absolute top-0 end-0"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <!-- Image Display -->
                <div class="modal-body p-0 d-flex justify-content-center align-items-center">
                    <img loading="lazy" id="modalImage" src="" class="img-fluid" alt="Expanded Image"
                        style="box-shadow: 0 0 16px -2px #bcbbba40;">
                </div>
            </div>
        </div>
    </div>

    <!-- start احدث مدونتنا -->
    <section class="gallary" id="gallary"
        style="background-image: url({{ asset('storage/images/' . $section->business_show) }})">
        <div class="py-3">
            <div class="container">
                <div class="gallary-header head-p">
                    <div class="main-title d-flex justify-content-center align-items-center">
                        <div class="jo-box-cont d-flex justify-content-center align-items-center w-auto">
                            <p>{{ __('frontend/home.home.latest_blogs') }}</p>
                        </div>
                    </div>

                    <h5 class="head-t text-center fw-bold mb-3 mt-4 ">
                        {{ __('frontend/home.home.stay_updated') }}
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end احدث مدونتنا -->

    <!-- start شركاء section -->
    <section class="partners"id='شركاء_النجاح'
        style="background-image: url({{ asset('storage/images/' . $section->success_partners) }}); height: 400px">
        <div class=" forces d-flex py-5 flex-column justify-content-center align-items-center" style="margin-top: 3rem;">
            <div class="main-title">
                <p>{{ __('frontend/home.home.success_partners') }}</p>
            </div>
            <div class="owl-carousel owl-theme max-width_partners" dir="ltr">
                @foreach ($partners as $partner)
                    <div class="item"><img loading="lazy" src="{{ asset('storage/images/' . $partner->image) }}"
                            height="100" width="50" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end شركاء section -->

    <!-- Start بالتواصل page -->
    <div class="contact" id="هاتفنا">
        <div class="main-title d-flex justify-content-center align-items-center">
            <div class="jo-box-cont d-flex justify-content-center align-items-center w-auto">
                <p> {{ __('frontend/home.home.contact') }}</p>
            </div>
        </div>
        <h3 class=" pt-3 pb-3 m-0 text-white text-center fw-lighter">
            "{{ __('frontend/home.home.contact_us') }}"
        </h3>
        <div class="container">
            <center>
                <div class="m-auto d-flex form-size">
                    <div class="col-4 d-none d-md-block">
                        <img loading="lazy" style="height: 100%;" class="w-100 rounded"
                            src="{{ asset('front/assets/imgs/cont.png') }}" alt="">
                    </div>
                    <div class="col-12 col-md-8">

                        <form id="contactForm" style="height: 100%; border: 1px solid #5c5b5b;" name="contactForm"
                            class="p-3 align-content-around rounded" data-bs-theme="light">
                            <div class="row">

                                <div class="pb-3 pt-3 col-12 col-md-6 text-end">
                                    <label for="fullName" class="form-label text-light fw-bold">
                                        {{ __('frontend/home.home.full_name_label') }}
                                    </label>
                                    <input type="text"
                                        placeholder="{{ __('frontend/home.home.full_name_placeholder') }}"
                                        class="form-control" id="fullName" name="fullName" required />
                                    <div class="invalid-feedback">
                                        {{ __('frontend/home.home.full_name_error') }}
                                    </div>
                                </div>

                                <div class="pb-3 pt-3 col-12 col-md-6 text-end">
                                    <label for="phoneNumber" class="form-label text-light fw-bold">
                                        {{ __('frontend/home.home.phone_label') }}
                                    </label>
                                    <input type="tel" placeholder="{{ __('frontend/home.home.phone_placeholder') }}"
                                        class="form-control font-m" id="phoneNumber" name="phoneNumber" required />
                                    <div class="invalid-feedback">
                                        {{ __('frontend/home.home.phone_error') }}
                                    </div>
                                </div>

                            </div>

                            <div class="pb-3 pt-3 text-end">
                                <label for="email" class="form-label text-light fw-bold">
                                    {{ __('frontend/home.home.email_label') }}
                                </label>
                                <input type="email" autocomplete="email"
                                    placeholder="{{ __('frontend/home.home.email_placeholder') }}"
                                    class="form-control font-m" id="email" name="email" required />
                                <div class="invalid-feedback">
                                    {{ __('frontend/home.home.email_error') }}
                                </div>
                            </div>

                            <div class="pb-3 pt-3 text-end">
                                <label for="service" class="form-label text-light fw-bold">
                                    {{ __('frontend/home.home.service_label') }}
                                </label>
                                <select id="service" class="form-select text-light" name="service"
                                    aria-label="Default select example" required>
                                    <option value="تصميم" selected>{{ __('frontend/home.home.service_design') }}</option>
                                    <option value="تسويق">{{ __('frontend/home.home.service_marketing') }}</option>
                                    <option value="برمجة">{{ __('frontend/home.home.service_programming') }}</option>
                                    <option value="صوتي و مرئي">{{ __('frontend/home.home.service_audio_visual') }}
                                    </option>
                                    <option value="أخرى">{{ __('frontend/home.home.service_other') }}</option>
                                </select>
                            </div>

                            <div class="pb-3 pt-3 text-end">
                                <label for="msg" class="form-label text-light fw-bold">
                                    {{ __('frontend/home.home.details_label') }}
                                </label>
                                <textarea placeholder="{{ __('frontend/home.home.details_placeholder') }}" class="form-control" id="msg"
                                    rows="5" name="msg" required></textarea>
                                <div class="invalid-feedback">
                                    {{ __('frontend/home.home.details_error') }}
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark border-secondary text-white col-6"
                                style="height: 50px; transition: all 0.3s ease; width: {{ $agent->isMobile() ? '100%' : '40%' }};">
                                {{ __('frontend/home.home.submit_button') }}
                            </button>

                            <div id="formMessage" class="alert alert-success text-center mt-3 d-none" role="alert">
                                {{ __('frontend/home.home.success_message') }}
                            </div>

                            <div id="error-message" class="alert alert-danger text-center mt-3 d-none">
                                {{ __('frontend/home.home.error_message') }}
                            </div>

                        </form>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <!-- end بالتواصل page -->

    {{-- //end content --}}

    </div>
@endsection
