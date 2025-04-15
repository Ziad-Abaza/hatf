
    
    
<!-- start header section -->
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
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" onclick="copyPathWithAppUrl('blogns/مدوّنتنا');" href="{{ route('blogns', 'مدوّنتنا') }}">مدوّنتنا</a>
                    </li>
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
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" onclick="copyPathWithAppUrl('blogns/مدوّنتنا');" href="{{ route('blogns', 'مدوّنتنا') }}">مدوّنتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(route('home') . '#هاتفنا') }}" onclick="copyPathWithAppUrl('#هاتفنا');">هاتفنا</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end header section -->


