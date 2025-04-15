    <!-- start nav -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container d-flex justify-content-between align-items-center">

                <a class="navbar-brand me-lg-auto" href="{{ route('home') }}">
                    <img src="{{ asset('front/new_design/src/img/logo.svg') }}" alt="Logo" class="logo">
                </a>

                <div class="justify-content-center align-items-center d-flex d-lg-none">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <img src="{{ asset('front/new_design/src/img/icon-bergr.svg') }}" width="19px"
                            alt="img" />
                    </button>
                </div>

                <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto my-4 my-lg-0">
                        <li class="nav-item"><a class="" href="{{ route('home') }}">الرئيسية</a></li>

                        <li class="nav-item"><a class="" href="{{ url(route('home') . '#تعرف_علينا') }}"
                                onclick="copyPathWithAppUrl('#تعرف_علينا');">نعرفك علينا</a></li>
                        <li class="nav-item"><a class="" href="{{ url(route('home') . '#خدماتنا') }}"
                                onclick="copyPathWithAppUrl('#خدماتنا');">خدماتنا</a></li>
                        <li class="nav-item"><a class="" href="{{ url(route('home') . '#باقاتنا') }}"
                                onclick="copyPathWithAppUrl('#باقاتنا');">باقاتنا</a></li>
                        <li class="nav-item"><a class="" href="{{ url(route('home') . '#شركائنا') }}"
                                onclick="copyPathWithAppUrl('#شركائنا');">شركائنا</a></li>
                        <li class="nav-item"><a class="" href="{{ route('blogns', 'مدوّنتنا') }}"
                                onclick="copyPathWithAppUrl({{ route('blogns', 'مدوّنتنا') }});">مدوّنتنا</a></li>
                        <li class="nav-item"><a class="" href="{{ url(route('home') . '#هاتفنا') }}"
                                onclick="copyPathWithAppUrl('#هاتفنا');">هاتفنا</a></li>

                        {{-- <li class="nav-item"><a class="" href="#home-mcq">أعمالنا</a></li> --}}
                        {{-- <li class="nav-item"><a class="" href="#home-blog">المدونة</a></li> --}}

                        <li class="nav-item">
                            <a class="main-link"
                                href="https://wa.me/+9660530333218?text=هل يمكنني الحصول على استشارة مجانية">احجز
                                استشارتك المجانية الآن!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end nav -->
