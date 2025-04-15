
    
    
<section style="background-image: url({{ asset('storage/images/' . $section->header) }})">
    <!-- start navbar section -->
    <nav id="navbar" class="position-fixed w-100 z-3 navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand m-auto" href="{{ route('home') }}">
                <img style="height: 50px; width: 130px; @if ($agent->isMobile()) position: relative; left: 80px; @endif"
                     src="{{ asset('front/assets/imgs/hatf.svg') }}" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-icon toggler-sidebar"></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url(route('home') . '#نعرف_علينا') }}" onclick="copyPathWithAppUrl('#نعرف_علينا');">نعرفك علينا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url(route('home') . '#خدماتنا') }}" onclick="copyPathWithAppUrl('#خدماتنا');">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url(route('home') . '#أعمالنا') }}" onclick="copyPathWithAppUrl('#أعمالنا');">أعمالنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url(route('home') . '#باقتنا') }}" onclick="copyPathWithAppUrl('#باقتنا');">باقتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url(route('home') . '#شركاء_النجاح') }}" onclick="copyPathWithAppUrl('#شركاء_النجاح');">شركاء النجاح</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--<a class="nav-link" aria-current="page" onclick="copyPathWithAppUrl('blogns/مدوّنتنا');" href="{{ route('blogns', 'مدوّنتنا') }}">مدوّنتنا</a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url(route('home') . '#هاتفنا') }}" onclick="copyPathWithAppUrl('#هاتفنا');">هاتفنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="navbar-mobile">
        <button class="btn close-sidebar fa-solid fa-times"></button>
        <!-- Start Sidebar -->
        <div class="links">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url(route('home') . '#نعرف_علينا') }}" onclick="copyPathWithAppUrl('#نعرف_علينا');">نعرفك علينا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url(route('home') . '#خدماتنا') }}" onclick="copyPathWithAppUrl('#خدماتنا');">خدماتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url(route('home') . '#أعمالنا') }}" onclick="copyPathWithAppUrl('#أعمالنا');">أعمالنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url(route('home') . '#باقتنا') }}" onclick="copyPathWithAppUrl('#باقتنا');">باقتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url(route('home') . '#شركاء_النجاح') }}" onclick="copyPathWithAppUrl('#شركاء_النجاح');">شركاء النجاح</a>
                </li>
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link" aria-current="page" onclick="copyPathWithAppUrl('blogns/مدوّنتنا');" href="{{ route('blogns', 'مدوّنتنا') }}">مدوّنتنا</a>-->
                <!--</li>-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(route('home') . '#هاتفنا') }}" onclick="copyPathWithAppUrl('#هاتفنا');">هاتفنا</a>
                </li>
            </ul>
        </div>
    </div>
</section>


<!--<header>-->
<!--    <nav class="navbar navbar-expand-lg">-->
<!--        <div class="container d-flex justify-content-between align-items-center">-->
<!--            <a class="navbar-brand me-lg-auto" href="{{ route('home') }}">-->
<!--                <img src="{{ asset('front/new_design/src/img/logo.svg') }}" alt="Logo" class="logo">-->
<!--            </a>-->

<!--            <a class="main-link d-block d-lg-none" href="#هاتفنا" onclick="copyPathWithAppUrl('#هاتفنا');">احجز استشارتك المجانية الآن! </a>-->

<!--            <div class="center">-->
<!--                {{-- <a class="main-link center gap-1 d-block d-lg-none" href="#">-->
<!--                    <span>EN</span>-->
<!--                    <img class="img-lang" src="{{ asset('front/new_design/src/img/lang.svg') }}" alt="img">-->
<!--                </a> --}}-->

<!--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"-->
<!--                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"-->
<!--                    aria-expanded="false" aria-label="Toggle navigation">-->
<!--                    <img src="{{ asset('front/new_design/src/img/icon-bergr.svg') }}" width="19px" alt="img" />-->
<!--                </button>-->
<!--            </div>-->

<!--            <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">-->
<!--                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">-->
<!--                    <li class="nav-item">-->
<!--                        <a href="{{ route('home') }}">الرئيسية</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="{{ url(route('home') . '#نعرف_علينا') }}" onclick="copyPathWithAppUrl('#نعرف_علينا');">من نحن</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="{{ url(route('home') . '#خدماتنا') }}" onclick="copyPathWithAppUrl('#خدماتنا');">خدماتنا</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="{{ url(route('home') . '#أعمالنا') }}" onclick="copyPathWithAppUrl('#أعمالنا');">أعمالنا</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="{{ route('blogns', 'مدوّنتنا') }}" onclick="copyPathWithAppUrl('blogns/مدوّنتنا');">المدونة</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="{{ url(route('home') . '#باقتنا') }}" onclick="copyPathWithAppUrl('#باقتنا');">الباقات</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="{{ url(route('home') . '#هاتفنا') }}" onclick="copyPathWithAppUrl('#هاتفنا');">اتصل بنا</a>-->
<!--                    </li>-->

<!--                    <li class="nav-item">-->
<!--                        <a href="{{ url(route('test') . '#مراجعات') }}" onclick="copyPathWithAppUrl('#مراجعات');">مراجعات</a>-->
<!--                    </li>-->
                    
<!--                    <li class="nav-item d-none d-lg-block">-->
<!--                        <a class="main-link" href="#هاتفنا" onclick="copyPathWithAppUrl('#هاتفنا');">احجز استشارتك المجانية الآن! </a>-->
<!--                    </li>-->
<!--                    {{-- <li class="nav-item d-none d-lg-block">-->
<!--                        <a class="main-link center gap-1" href="#">-->
<!--                            <span style="font-weight: 500;font-size: 1rem;">EN</span>-->
<!--                            <img width="20px" height="20px" src="{{ asset('front/new_design/src/img/lang.svg') }}" alt="img">-->
<!--                        </a>-->
<!--                    </li> --}}-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->
<!--</header>-->


