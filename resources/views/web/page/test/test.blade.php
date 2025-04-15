@extends('web.layout.master')

@section('content')

    <!-- start services -->
    <div id="services" class="services py-1 py-md-3 py-lg-5">
        <div class="container py-3">
            <div class="text-end py-5">
                <h4 class="card-title">
                    خدمات هتف لخدمات الصوتي والمرئي
                    <img src="{{asset('front/new_design/src/img/icon-title-services.svg')}}" width="5px" height="5px" alt="">
                </h4>
            </div>
            <div class="row">
                <div class="col-md-6 py-3 card-item">
                    <div class="bg center">
                        <div class="card py-3" style="width: 19rem;">
                            <img src="{{asset('front/new_design/src/img/cart-1.svg')}}" class="card-img-top" alt="img">
                            <div class="card-body text-end">
                                <h5 class="card-title">التصوير الاحترافي</h5>
                                <p class="card-text">تصوير المنتجات، المناسبات، والأماكن بأحدث التقنيات.</p>
                            </div>
                            <div class="w-100 d-flex justify-content-center align-items-center">
                                <a href="#" class="center main-link">
                                    <span class="center me-2">
                                        <img src="{{asset('front/new_design/src/img/icon-btn-hero.svg')}}" alt="">
                                    </span>
                                    احجز الان
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-3 card-item">
                    <div class="bg center">
                        <div class="card py-3" style="width: 19rem;">
                            <img src="{{asset('front/new_design/src/img/cart-2.svg')}}" class="card-img-top" alt="img">
                            <div class="card-body text-end">
                                <h5 class="card-title">التسجيلات الإنشادية</h5>
                                <p class="card-text">إنتاج بجودة استوديو تناسب المناسبات.</p>
                            </div>
                            <div class="w-100 d-flex justify-content-center align-items-center">
                                <a href="#" class="center main-link">
                                    <span class="center me-2">
                                        <img src="{{asset('front/new_design/src/img/icon-btn-hero.svg')}}" alt="">
                                    </span>
                                    احجز الان
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-3 card-item hidden">
                    <div class="bg center">
                        <div class="card py-3" style="width: 19rem;">
                            <img src="{{asset('front/new_design/src/img/cart-3.svg')}}" class="card-img-top" alt="img">
                            <div class="card-body text-end">
                                <h5 class="card-title">التعليق الصوتي الاحترافي</h5>
                                <p class="card-text">أصوات متنوعة تناسب جميع المجالات.</p>
                            </div>
                            <div class="w-100 d-flex justify-content-center align-items-center">
                                <a href="#" class="center main-link">
                                    <span class="center me-2">
                                        <img src="{{asset('front/new_design/src/img/icon-btn-hero.svg')}}" alt="">
                                    </span>
                                    احجز الان
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-3 card-item hidden">
                    <div class="bg center">
                        <div class="card py-3" style="width: 19rem;">
                            <img src="{{asset('front/new_design/src/img/cart-4.svg')}}" class="card-img-top" alt="img">
                            <div class="card-body text-end">
                                <h5 class="card-title">تصوير الفيديوهات الترويجية</h5>
                                <p class="card-text">إنتاج مقاطع احترافية لتعزيز التسويق.</p>
                            </div>
                            <div class="w-100 d-flex justify-content-center align-items-center">
                                <a href="#" class="center main-link">
                                    <span class="center me-2">
                                        <img src="{{asset('front/new_design/src/img/icon-btn-hero.svg')}}" alt="">
                                    </span>
                                    احجز الان
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-3 card-item hidden">
                    <div class="bg center">
                        <div class="card py-3" style="width: 19rem;">
                            <img src="{{asset('front/new_design/src/img/cart-5.svg')}}" class="card-img-top" alt="img">
                            <div class="card-body text-end">
                                <h5 class="card-title">إنتاج التقارير الوثائقية</h5>
                                <p class="card-text">قصص مصورة بأسلوب جذاب.</p>
                            </div>
                            <div class="w-100 d-flex justify-content-center align-items-center">
                                <a href="#" class="center main-link">
                                    <span class="center me-2">
                                        <img src="{{asset('front/new_design/src/img/icon-btn-hero.svg')}}" alt="">
                                    </span>
                                    احجز الان
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-3 card-item hidden">
                    <div class="bg center">
                        <div class="card py-3" style="width: 19rem;">
                            <img src="{{asset('front/new_design/src/img/cart-6.svg')}}" class="card-img-top" alt="img">
                            <div class="card-body text-end">
                                <h5 class="card-title">مونتاج الأفلام</h5>
                                <p class="card-text">تحرير فيديوهات بإبداع.</p>
                            </div>
                            <div class="w-100 d-flex justify-content-center align-items-center">
                                <a href="#" class="center main-link">
                                    <span class="center me-2">
                                        <img src="{{asset('front/new_design/src/img/icon-btn-hero.svg')}}" alt="">
                                    </span>
                                    احجز الان
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <h4 class="card-title">
                            فوائد خدمات الصوتي والمرئي لتوسيع عملك
                            <img src="{{asset('front/new_design/src/img/icon-title-services.svg')}}" alt="">
                        </h4>
                    </div>

                    <ul class="text-end">
                        <li>
                            <h5 class="card-title pb-2">
                                التأثير العاطفي
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    المحتوى المرئي والمسموع يخلق تواصلاً أعمق مع العملاء، ويعزز مشاعر الثقة والانتماء.

                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <h5 class="card-title pb-2">
                                زيادة التفاعل والمشاركة
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    الفيديوهات والصوتيات هي أكثر أنواع المحتوى جذبًا للمشاهدات والمشاركات على المنصات
                                    الرقمية.
                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <h5 class="card-title pb-2">
                                تعزيز المصداقية
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    استخدام خدمات ذات جودة عالية يعكس احترافية العلامة التجارية.
                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <h5 class="card-title pb-2">
                                الوصول لجمهور عالمي
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    من خلال محتوى متميز، يمكنك بسهولة اختراق الأسواق العالمية وتوسيع نطاق علامتك.
                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <h5 class="card-title pb-2">
                                بناء هوية متماسكة
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    من خلال الجمع بين العناصر الصوتية والمرئية، نصنع هوية بصرية وسمعية متكاملة تقوي
                                    علامتك التجارية.
                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <h5 class="card-title pb-2">
                                تحفيز القرارات الشرائية
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    مواد الفيديو والصوت ذات الجودة العالية تساعد في توجيه العملاء لاتخاذ قرارات شراء
                                    أسرع وأكثر وعيًا.
                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                    </ul>

                    <div class="d-flex justify-content-end align-items-center">
                        <a href="#" class="center main-btn">
                            <span class="center me-2">
                                <img width="75%" height="100%" src="{{asset('front/new_design/src/img/icon-btn-hero.svg')}}" alt="img">
                            </span>
                            تواصل معنا
                        </a>
                    </div>

                </div>
                <div class="col-lg-6 col-12 py-5 order-1 order-lg-2 center">
                    <img width="75%" height="100%" src="{{asset('front/new_design/src/img/about-1.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end about-1 -->
    <!-- start about-2 -->
    <div class="about-2 py-1 py-md-3 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 py-3">
                    <img width="100%" height="100%" src="{{asset('front/new_design/src/img/about-2.svg')}}" alt="">
                </div>
                <div class="col-lg-6 col-12 py-3">

                    <div class="text-end py-3">
                        <h4 class="card-title">
                            فوائد خدمات الصوتي والمرئي لتوسيع عملك
                            <img src="{{asset('front/new_design/src/img/icon-title-services.svg')}}" alt="">
                        </h4>
                    </div>

                    <ul class="text-end">
                        <li>
                            <h5 class="card-title pb-2">
                                التأثير العاطفي
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    المحتوى المرئي والمسموع يخلق تواصلاً أعمق مع العملاء، ويعزز مشاعر الثقة والانتماء.

                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <h5 class="card-title pb-2">
                                زيادة التفاعل والمشاركة
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    الفيديوهات والصوتيات هي أكثر أنواع المحتوى جذبًا للمشاهدات والمشاركات على المنصات
                                    الرقمية.
                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <h5 class="card-title pb-2">
                                تعزيز المصداقية
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    استخدام خدمات ذات جودة عالية يعكس احترافية العلامة التجارية.
                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <h5 class="card-title pb-2">
                                الوصول لجمهور عالمي
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    من خلال محتوى متميز، يمكنك بسهولة اختراق الأسواق العالمية وتوسيع نطاق علامتك.
                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <h5 class="card-title pb-2">
                                بناء هوية متماسكة
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    من خلال الجمع بين العناصر الصوتية والمرئية، نصنع هوية بصرية وسمعية متكاملة تقوي
                                    علامتك التجارية.
                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                        <li>
                            <h5 class="card-title pb-2">
                                تحفيز القرارات الشرائية
                                <img src="{{asset('front/new_design/src/img/icon-h-list.svg')}}" alt="">
                            </h5>
                            <div class="">
                                <p>
                                    مواد الفيديو والصوت ذات الجودة العالية تساعد في توجيه العملاء لاتخاذ قرارات شراء
                                    أسرع وأكثر وعيًا.
                                </p>
                                <img src="{{asset('front/new_design/src/img/dot.svg')}}" alt="">
                            </div>
                        </li>
                    </ul>

                    <div class="w-100 d-flex justify-content-end align-items-center">
                        <a href="#" class="center main-btn">
                            <span class="center me-2">
                                <img src="{{asset('front/new_design/src/img/icon-btn-hero.svg')}}" alt="">
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
                    لماذا <span>هتف</span> أفضل شركة في خدمات الصوتي والمرئي؟
                    <img src="{{asset('front/new_design/src/img/icon-like.svg')}}" width="5px" height="5px" alt="img">
                </h4>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12 py-3 card-item">
                    <div class="bg center">
                        <div class="card py-3">
                            <div class="dev w-100">
                                <div class="d-flex justify-content-center w-100 align-items-center">
                                    <img src="{{asset('front/new_design/src/img/icon-mcq-1.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">سنوات من الخبرة المتراكمة</h5>
                                    <p class="card-text text-center">
                                        نمتلك سجلًا حافلًا بالنجاحات في إدارة الحملات الإعلانية وتحقيق أفضل النتائج
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-3 card-item">
                    <div class="bg center">
                        <div class="card py-3">
                            <div class="dev w-100">
                                <div class="d-flex justify-content-center w-100 align-items-center">
                                    <img src="{{asset('front/new_design/src/img/icon-mcq-2.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">أدوات تقنية متطورة</h5>
                                    <p class="card-text text-center">
                                        نستخدم أحدث التقنيات لتحليل وتحسين الأداء بفعالية وسرعة
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-3 card-item card-hiden">
                    <div class="bg center">
                        <div class="card py-3">
                            <div class="dev w-100">
                                <div class="d-flex justify-content-center w-100 align-items-center">
                                    <img src="{{asset('front/new_design/src/img/icon-mcq-3.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">فريق عمل متخصص ومحترف</h5>
                                    <p class="card-text text-center">
                                        فريقنا مكون من خبراء مبدعين في جميع جوانب التسويق الإلكتروني والحملات الإعلانية
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-3 card-item card-hiden">
                    <div class="bg center">
                        <div class="card py-3">
                            <div class="dev w-100">
                                <div class="d-flex justify-content-center w-100 align-items-center">
                                    <img src="{{asset('front/new_design/src/img/icon-mcq-4.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">رضا العملاء</h5>
                                    <p class="card-text text-center">
                                        شهادات عملائنا المميزين تؤكد جودة خدماتنا وقدرتنا على تحقيق أهدافهم بأعلى
                                        مستويات الدقة
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-3 card-item card-hiden">
                    <div class="bg center">
                        <div class="card py-3">
                            <div class="dev w-100">
                                <div class="d-flex justify-content-center w-100 align-items-center">
                                    <img src="{{asset('front/new_design/src/img/icon-mcq-5.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">خدمات شاملة ومتكاملة</h5>
                                    <p class="card-text text-center">
                                        نقدم كل ما تحتاجه لإنجاح حملاتك الإعلانية من البداية حتى النهاية، بما يشمل
                                        التخطيط والتنفيذ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 py-3 card-item card-hiden">
                    <div class="bg center">
                        <div class="card py-3">
                            <div class="dev w-100">
                                <div class="d-flex justify-content-center w-100 align-items-center">
                                    <img src="{{asset('front/new_design/src/img/icon-mcq-6.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">التركيز على الابتكار</h5>
                                    <p class="card-text text-center">
                                        نحرص على تصميم حملات مبتكرة تضيف قيمة حقيقية لعملك وتميزك عن المنافسين
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="w-100 d-flex justify-content-center align-items-center py-4">
                <button id="btn-hiden" class="center main-link">عرض المزيد</button>
            </div>
        </div>
    </div>
    <!-- end mcq -->
    <!-- start comment -->
    <div class="comment py-1 py-md-3 py-lg-5" id="مراجعات">
        <div class="container pb-3">
            <div class="text-end">
                <h4 class="card-title">
                    تقييمات العملاء
                    <img src="{{asset('front/new_design/src/img/icon-title-comment.svg')}}" width="15" height="15" alt="">
                </h4>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper py-4">

                    <div class="swiper-slide">
                        <div class="center bg">
                            <div class="card py-3">
                                <div class="center w-100 py-2">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-end">
                                    <p class="card-text text-center">
                                        بفضل خدمات تحسين محركات البحث من هتف حقق موقعنا الإلكتروني نقلة نوعية في الترتيب
                                        علي جوجل خلال فترة وجيزة
                                    </p>
                                    <div class="center py-3">
                                        <div class="d-flex flex-column pe-3">
                                            <h6 class="card-title">
                                                تغريد عصام
                                                </h5>
                                                <span>
                                                    مالكه لشركه كن
                                                </span>
                                        </div>
                                        <div class="dev">
                                            <img src="{{asset('front/new_design/src/img/pepol.svg')}}" width="100%" height="100%"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="" style="margin-top: -33px;">
                                        <img src="{{asset('front/new_design/src/img/comment.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="center bg">
                            <div class="card py-3">
                                <div class="center w-100 py-2">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-end">
                                    <p class="card-text text-center">
                                        بفضل خدمات تحسين محركات البحث من هتف حقق موقعنا الإلكتروني نقلة نوعية في الترتيب
                                        علي جوجل خلال فترة وجيزة
                                    </p>
                                    <div class="center py-3">
                                        <div class="d-flex flex-column pe-3">
                                            <h6 class="card-title">
                                                تغريد عصام
                                                </h5>
                                                <span>
                                                    مالكه لشركه كن
                                                </span>
                                        </div>
                                        <div class="dev">
                                            <img src="{{asset('front/new_design/src/img/pepol.svg')}}" width="100%" height="100%"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="" style="margin-top: -33px;">
                                        <img src="{{asset('front/new_design/src/img/comment.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="center bg">
                            <div class="card py-3">
                                <div class="center w-100 py-2">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-end">
                                    <p class="card-text text-center">
                                        بفضل خدمات تحسين محركات البحث من هتف حقق موقعنا الإلكتروني نقلة نوعية في الترتيب
                                        علي جوجل خلال فترة وجيزة
                                    </p>
                                    <div class="center py-3">
                                        <div class="d-flex flex-column pe-3">
                                            <h6 class="card-title">
                                                تغريد عصام
                                                </h5>
                                                <span>
                                                    مالكه لشركه كن
                                                </span>
                                        </div>
                                        <div class="dev">
                                            <img src="{{asset('front/new_design/src/img/pepol.svg')}}" width="100%" height="100%"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="" style="margin-top: -33px;">
                                        <img src="{{asset('front/new_design/src/img/comment.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="center bg">
                            <div class="card py-3">
                                <div class="center w-100 py-2">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-end">
                                    <p class="card-text text-center">
                                        بفضل خدمات تحسين محركات البحث من هتف حقق موقعنا الإلكتروني نقلة نوعية في الترتيب
                                        علي جوجل خلال فترة وجيزة
                                    </p>
                                    <div class="center py-3">
                                        <div class="d-flex flex-column pe-3">
                                            <h6 class="card-title">
                                                تغريد عصام
                                                </h5>
                                                <span>
                                                    مالكه لشركه كن
                                                </span>
                                        </div>
                                        <div class="dev">
                                            <img src="{{asset('front/new_design/src/img/pepol.svg')}}" width="100%" height="100%"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="" style="margin-top: -33px;">
                                        <img src="{{asset('front/new_design/src/img/comment.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="center bg">
                            <div class="card py-3">
                                <div class="center w-100 py-2">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-end">
                                    <p class="card-text text-center">
                                        بفضل خدمات تحسين محركات البحث من هتف حقق موقعنا الإلكتروني نقلة نوعية في الترتيب
                                        علي جوجل خلال فترة وجيزة
                                    </p>
                                    <div class="center py-3">
                                        <div class="d-flex flex-column pe-3">
                                            <h6 class="card-title">
                                                تغريد عصام
                                                </h5>
                                                <span>
                                                    مالكه لشركه كن
                                                </span>
                                        </div>
                                        <div class="dev">
                                            <img src="{{asset('front/new_design/src/img/pepol.svg')}}" width="100%" height="100%"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="" style="margin-top: -33px;">
                                        <img src="{{asset('front/new_design/src/img/comment.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="center bg">
                            <div class="card py-3">
                                <div class="center w-100 py-2">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                    <img src="{{asset('front/new_design/src/img/star-comment.svg')}}" class="card-img-top" alt="img">
                                </div>
                                <div class="card-body text-end">
                                    <p class="card-text text-center">
                                        بفضل خدمات تحسين محركات البحث من هتف حقق موقعنا الإلكتروني نقلة نوعية في الترتيب
                                        علي جوجل خلال فترة وجيزة
                                    </p>
                                    <div class="center py-3">
                                        <div class="d-flex flex-column pe-3">
                                            <h6 class="card-title">
                                                تغريد عصام
                                                </h5>
                                                <span>
                                                    مالكه لشركه كن
                                                </span>
                                        </div>
                                        <div class="dev">
                                            <img src="{{asset('front/new_design/src/img/pepol.svg')}}" width="100%" height="100%"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="" style="margin-top: -33px;">
                                        <img src="{{asset('front/new_design/src/img/comment.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- end comment -->
    <!-- start about-3 -->
    <div class="about-3 py-1 py-md-3 py-lg-5 text-end">
        <div class="container py-3  ">
            <div class="text-end py-3">
                <h4 class="card-title">
                    أهم الأسئلة حول خدمات الصوتي والمرئي
                    <img src="{{asset('front/new_design/src/img/icon-title-cmq.svg')}}" width="20px" height="20px" alt="img">
                </h4>
            </div>
            <div class="py-3 text-end">
                <ul class="text-end">
                    <li>
                        <p class="pe-2">
                            ما تكلفة خدمات الصوتي والمرئي؟
                            <img src="{{asset('front/new_design/src/img/dot-2.svg')}}" alt="img">
                        </p>
                    </li>
                    <li>
                        <p class="pe-2">
                            كم يستغرق تنفيذ مشروع مونتاج فيديو؟
                            <img src="{{asset('front/new_design/src/img/dot-2.svg')}}" alt="img">
                        </p>
                    </li>
                    <li>
                        <p class="pe-2">
                            هل تقدمون خدمات تصوير خارجي؟
                            <img src="{{asset('front/new_design/src/img/dot-2.svg')}}" alt="img">
                        </p>
                    </li>
                    <li>
                        <p class="pe-2">
                            هل يمكنني طلب تعليق صوتي بلغات متعددة؟
                            <img src="{{asset('front/new_design/src/img/dot-2.svg')}}" alt="img">
                        </p>
                    </li>
                    <li>
                        <p class="pe-2">
                            هل يمكنني مراجعة المنتج النهائي وإجراء التعديلات؟
                            <img src="{{asset('front/new_design/src/img/dot-2.svg')}}" alt="img">
                        </p>
                    </li>
                    <li>
                        <p class="pe-2">
                            هل تقدمون استشارات قبل بدء المشروع؟
                            <img src="{{asset('front/new_design/src/img/dot-2.svg')}}" alt="img">
                        </p>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- end about-3 -->
    <!-- start contact -->
    <div class="contact py-1 py-md-3 py-lg-5 text-center">
        <div class="container py-3">
            <div class="pb-3">
                <img src="{{asset('front/new_design/src/img/contact.svg')}}" width="75%" height="350px" alt="img">
            </div>
            <div class="py-3">
                <h5 class="pb-5">
                    تواصل معنا الآن
                    <img src="{{asset('front/new_design/src/img/icon-title-contact.svg')}}" width="20px" height="20px" alt="img" />
                </h5>
                <p class="m-0">
                    لا تتردد في الانضمام إلى قائمة عملائنا المميزين. احجز استشارتك المجانية الآن ودعنا نساعدك في تحقيق
                    أهدافك الرقمية.
                </p>
                <span class="">
                    !احجز استشارتك المجانية الآن
                </span>
            </div>
            <div class="w-100 d-flex justify-content-center align-items-center py-4">
                <a href="#" class="center main-btn">
                    <span class="center me-2">
                        <img src="{{asset('front/new_design/src/img/icon-btn-hero.svg')}}" alt="">
                    </span>
                    تواصل معنا
                </a>
            </div>
        </div>
    </div>
    <!-- end contact -->

@endsection
