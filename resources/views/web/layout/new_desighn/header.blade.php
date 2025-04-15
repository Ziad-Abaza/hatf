{{-- <header>
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand me-lg-auto" href="#">
                <img src="{{asset('front/new_design/src/img/logo.svg')}}" alt="Logo" class="logo">
            </a>

            <a class="main-link d-block d-lg-none" href="#">احجز استشارتك المجانية الآن! </a>

            <div class="center">
                <a class="main-link center gap-1 d-block d-lg-none" href="#">
                    <span>EN</span>
                    <img class="img-lang" src="{{asset('front/new_design/src/img/lang.svg')}}" alt="img">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{asset('front/new_design/src/img/icon-bergr.svg')}}" width="19px" alt="img" />
                </button>
            </div>


            <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="" aria-current="page" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#services">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#">أعمالنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#">المدونة</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#">الباقات</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#">اتصل بنا</a>
                    </li>

                    <li class="nav-item d-none d-lg-block">
                        <a class="main-link" href="#">احجز استشارتك المجانية الآن! </a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="main-link center gap-1" href="#">
                            <sapn style="font-weight: 500;font-size: 1rem;">EN</sapn>
                            <img width="20px" height="20px" src="{{asset('front/new_design/src/img/lang.svg')}}" alt="img">
                        </a>
                    </li>
                </ul>

            </div>


        </div>
    </nav>
</header> --}}

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand me-lg-auto" href="{{ route('home') }}">
                <img src="{{ asset('front/new_design/src/img/logo.svg') }}" alt="Logo" class="logo">
            </a>

            <a class="main-link d-block d-lg-none" href="#هاتفنا" onclick="copyPathWithAppUrl('#هاتفنا');">احجز استشارتك المجانية الآن! </a>

            <div class="center">
                {{-- <a class="main-link center gap-1 d-block d-lg-none" href="#">
                    <span>EN</span>
                    <img class="img-lang" src="{{ asset('front/new_design/src/img/lang.svg') }}" alt="img">
                </a> --}}

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{ asset('front/new_design/src/img/icon-bergr.svg') }}" width="19px" alt="img" />
                </button>
            </div>

            <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('home') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url(route('home') . '#نعرف_علينا') }}" onclick="copyPathWithAppUrl('#نعرف_علينا');">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url(route('home') . '#خدماتنا') }}" onclick="copyPathWithAppUrl('#خدماتنا');">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url(route('home') . '#أعمالنا') }}" onclick="copyPathWithAppUrl('#أعمالنا');">أعمالنا</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blogns', 'مدوّنتنا') }}" onclick="copyPathWithAppUrl('blogns/مدوّنتنا');">المدونة</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url(route('home') . '#باقتنا') }}" onclick="copyPathWithAppUrl('#باقتنا');">الباقات</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url(route('home') . '#هاتفنا') }}" onclick="copyPathWithAppUrl('#هاتفنا');">اتصل بنا</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url(route('test') . '#مراجعات') }}" onclick="copyPathWithAppUrl('#مراجعات');">مراجعات</a>
                    </li>


                    
                    <li class="nav-item d-none d-lg-block">
                        <a class="main-link" href="#هاتفنا" onclick="copyPathWithAppUrl('#هاتفنا');">احجز استشارتك المجانية الآن! </a>
                    </li>
                    {{-- <li class="nav-item d-none d-lg-block">
                        <a class="main-link center gap-1" href="#">
                            <span style="font-weight: 500;font-size: 1rem;">EN</span>
                            <img width="20px" height="20px" src="{{ asset('front/new_design/src/img/lang.svg') }}" alt="img">
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>

