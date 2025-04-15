@extends('web.layout.main_home_test')

@section('content')


    <div class="main-title" style="margin-top: 50px;">
        <h1>
            <img class="py-1" style="height: 50px; width: 130px;" src="{{ asset('front/assets/imgs/hatf.svg') }}"
                alt="" srcset="">
        </h1>
    </div>

    {{-- //start content --}}
    <!-- start نعرفك section -->
    <section class="about d-flex justify-content-center" id="نعرف_علينا"
        style="background-image: url({{ asset('storage/images/' . $section->about) }});">
        <div class="py-3">
            <div class="container">
                <div class="about-body">
                    <div class="main-title d-flex justify-content-center align-items-center">
                        <div class="jo-box-cont d-flex justify-content-center align-items-center w-auto">
                            <p class="m-0">نعرفك علينا</p>
                        </div>
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
    <section class="services section-p pt-5 pb-5" id="خدماتنا"
        style="background-image: url({{ asset('storage/images/' . $section->services) }}">
        <div class="container">
            <div class="main-title d-flex justify-content-center align-items-center">
                <div class="jo-box-cont d-flex justify-content-center align-items-center w-auto">
                    <p class="m-0">خدماتنا</p>
                </div>
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
                                <img class="m-auto" height="70" width="70"
                                    src="{{ asset('storage/images/' . $service->icon_number) }}" alt="{{ $service->name }}">

                                <div class="card-overlay"></div>

                                <div class="card-body-img d-flex justify-content-center align-items-center pt-3 pb-3 "
                                    style="box-shadow: 0 6px 5px -7px wheat;         
                            height: 125px;
                            width: 200px;
                            margin: auto;">
                                    <img class="img-fluid" height="100" width="100" loading="lazy"
                                        src="{{ asset('storage/images/' . $service->image) }}" alt="{{ $service->name }}" />
                                </div>
                                <!--<hr style="border: 1px solid #e0e0e0;" />-->
                                <h3 class="card-title fw-bold text-center pt-3 pb-3 m-0" style="font-size: 30px;">
                                    {{ $service->name }}
                                </h3>

                                <p class="jo-edit-card-content card-text fs-5 text-justify m-auto">
                                    {{ $service->desc }}
                                </p>


                                <a href="https://wa.me/+9660530333218?text={{ urlencode('احصل على استشارة مجانية الآن: ' . $service->name) }}"
                                    class="text-white" target="_blank">
                                    <i class="fab fa-whatsapp icon-top-right"></i>
                                    احصل على استشارة مجانية الآن
                                </a>



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
    <section class="gallary" id="أعمالنا"
        style="background-image: url({{ asset('storage/images/' . $section->business_show) }})">
        <div class="py-3">
            {{-- edit jo --}}
            <div class="container">
                <div class="gallary-header head-p">
                    <div class="main-title d-flex justify-content-center align-items-center">
                        <div class="jo-box-cont d-flex justify-content-center align-items-center w-auto">
                            <p style="margin: 0;">أعمالنا</p>
                        </div>
                    </div>
                    <h5 class="head-t text-center fw-bold mb-3 mt-4 ">جزء من إبداعنا أمام ناظريك</h5>
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
                            <!-- Inner Card -->

                            <!-- <div class="card" style="-->
                       <!--    width: 100%;-->
                       <!--    height: 100%;-->
                       <!--    border-radius: 12px; /* Matches the outer border for smooth corners */-->
                       <!--    overflow: hidden;-->
                       <!--    background: #212121;-->
                       <!--">-->
                            <!--     <img src="{{ asset('storage/images/' . $businessExhibition->image) }}" class="card-img-h"-->
                            <!--         alt="">-->
                            <!--     <div class="card-body text-end">-->
                            <!--         <h5 class="card-title">{{ $businessExhibition->name }}</h5>-->
                            <!--         <p class="card-text">{{ Str::limit($businessExhibition->desc, 15, '...') }}</p>-->
                            <!--     </div>-->
                            <!-- </div>-->
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
                                <img src="{{ asset('storage/images/' . $businessExhibition->image) }}" class="card-img-h "
                                    alt="">
                                <div class="card-body text-end">
                                    <h5 class="card-title">{{ $businessExhibition->name }}</h5>
                                    <p class="card-text">
                                        <span class="short-text"
                                            style="display: inline;">{{ Str::limit($businessExhibition->desc, 15, '') }}</span>
                                        <span class="hidden-text"
                                            style="display: none;">{{ $businessExhibition->desc }}</span>
                                        <span class="toggle-more"
                                            style="color: #8d8d8d; cursor: pointer; text-decoration: underline; text-underline-offset: 4px;">...
                                            المزيد</span>
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
                                        toggleMore.textContent = "عرض أقل";
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
                                        <p style="margin:0;">باقاتنا</p </div>
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
                    <img id="modalImage" src="" class="img-fluid" alt="Expanded Image"
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
                            <p> أحدث مدوناتنا</p>
                        </div>
                    </div>

                    <h5 class="head-t text-center fw-bold mb-3 mt-4 "> ابق على اطلاع بأخر التوجيهات و الرؤى
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end احدث مدونتنا -->


    {{-- <!-- start شركاء section -->
    <section class="partners"id='شركاء_النجاح'
        style="background-image: url({{ asset('storage/images/' . $section->success_partners) }}); height: 400px">
        <div class=" forces d-flex py-5 flex-column justify-content-center align-items-center" style="margin-top: 3rem;">
            <div class="main-title">
                <p>شركاء النجاح</p>
            </div>
            <div class="owl-carousel owl-theme max-width_partners" dir="ltr">
                @foreach ($partners as $partner)
                    <div class="item"><img src="{{ asset('storage/images/' . $partner->image) }}" height="100"
                            width="50" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end شركاء section --> --}}

    <!-- Start بالتواصل page -->

    <div class="contact" id="هاتفنا">
        <div class="main-title d-flex justify-content-center align-items-center">
            <div class="jo-box-cont d-flex justify-content-center align-items-center w-auto">
                <p>هاتفنا</p>
            </div>
        </div>

        <h3 class=" pt-3 pb-3 m-0 text-white text-center fw-lighter">
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

                        <form id="contactForm" style="height: 100%; border: 1px solid #5c5b5b;" name="contactForm"
                            class="p-3 align-content-around rounded" data-bs-theme="light">
                            <div class="row">

                                <div class="pb-3 pt-3 col-12 col-md-6 text-end">
                                    <label for="fullName" class="form-label text-light fw-bold">اسمك الكريم</label>
                                    <input type="text" placeholder="الاسم الثلاثي" class="form-control"
                                        id="fullName" name="fullName" required />
                                    <div class="invalid-feedback">يجب ان يكون الاسم ثلاثيا باللغة العربية</div>
                                </div>

                                <div class="pb-3 pt-3 col-12 col-md-6 text-end">
                                    <label for="phoneNumber" class="form-label text-light fw-bold">هاتف التواصل</label>
                                    <input type="tel" placeholder="0530333218" class="form-control font-m"
                                        id="phoneNumber" name="phoneNumber" required />
                                    <div class="invalid-feedback">يجب ان يكون رقما صالحا مكونا من 10 أرقام</div>
                                </div>

                            </div>

                            <div class="pb-3 pt-3 text-end">
                                <label for="email" class="form-label text-light fw-bold">البريد الالكتروني</label>
                                <input type="email" autocomplete="email" placeholder="info@hatf.sa"
                                    class="form-control font-m" id="email" name="email" required />
                                <div class="invalid-feedback">يجب ان يكون بريدا الكترونيا صالحا</div>
                            </div>

                            <div class="pb-3 pt-3 text-end">
                                <label for="service" class="form-label text-light fw-bold">الخدمة</label>
                                <select id="service" class="form-select text-light" name="service"
                                    aria-label="Default select example" required>
                                    <option value="تصميم" selected>تصميم</option>
                                    <option value="تسويق">تسويق</option>
                                    <option value="برمجة">برمجة</option>
                                    <option value="صوتي و مرئي">صوتي و مرئي</option>
                                    <option value="أخرى">أخرى</option>
                                </select>
                            </div>

                            <div class="pb-3 pt-3 text-end">
                                <label for="msg" class="form-label text-light fw-bold">تفاصيل الخدمة</label>
                                <textarea placeholder="اكتب تفاصيل الخدمة المطلوب بالتفصيل" class="form-control" id="msg" rows="5"
                                    name="msg" required></textarea>
                                <div class="invalid-feedback">يجب ان تكون الرسالة تشمل بحد ادني 3 حروف</div>
                            </div>

                            <button type="submit"
                                style="
                                       font-size: 0px;
                                        font-weight: 200;
                                        background-color: transparent;
                                        border: 1px solid #5c5b5b;
                                        
                                        padding: 0px 0px;
                                        color: white;
                                        transition: all 0.3s ease;
                                        height: 50px;
                                        width: {{ $agent->isMobile() ? '100%' : '40%' }};
                               "
                                class="col-6 btn btn-dark">
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
@endsection
