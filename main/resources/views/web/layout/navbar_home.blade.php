
        
        
        
        
<!-- start header section -->
<section style="background-image: url({{ asset('storage/images/' . $section->header) }})">
    <!-- start navbar section -->
    <nav id="navbar" class="position-fixed w-100 z-3 navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand m-auto" href="{{ route('home') }}">
                <img loading="lazy" style="height: 50px; width: 130px; @if ($agent->isMobile()) position: relative; left: 80px; @endif"
                     src="{{ asset('front/assets/imgs/hatf.svg') }}" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-icon toggler-sidebar"></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#نعرف_علينا" onclick="copyPathWithAppUrl('#نعرف_علينا');">نعرفك علينا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#خدماتنا" onclick="copyPathWithAppUrl('#خدماتنا');">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#أعمالنا" onclick="copyPathWithAppUrl('#أعمالنا');">أعمالنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#باقتنا" onclick="copyPathWithAppUrl('#باقتنا');">باقتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#شركاء_النجاح" onclick="copyPathWithAppUrl('#شركاء_النجاح');">شركاء النجاح</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('blogns', 'مدوّنتنا') }}">مدوّنتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#هاتفنا" onclick="copyPathWithAppUrl('#هاتفنا');">هاتفنا</a>
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
                    <a class="nav-link" aria-current="page" href="#نعرف_علينا" onclick="copyPathWithAppUrl('#نعرف_علينا');">نعرفك علينا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#خدماتنا" onclick="copyPathWithAppUrl('#خدماتنا');">خدماتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#أعمالنا" onclick="copyPathWithAppUrl('#أعمالنا');">أعمالنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#باقتنا" onclick="copyPathWithAppUrl('#باقتنا');">باقتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#شركاء_النجاح" onclick="copyPathWithAppUrl('#شركاء_النجاح');">شركاء النجاح</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('blogns', 'مدوّنتنا') }}">مدوّنتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#هاتفنا" onclick="copyPathWithAppUrl('#هاتفنا');">هاتفنا</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- End navbar section -->
    <div class="background p-0">
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
                <a href="#نعرف_علينا" class="fs-4 rounded-circle p-3">
                    <i class="fas fa-angle-down"></i>
                </a>
            </div> 
        </div>
    </div>
</section>
<!-- end header section -->


