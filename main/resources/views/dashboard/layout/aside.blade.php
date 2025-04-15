<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme"
    style="max-height: 100vh; overflow-y: auto; overflow-x: hidden;">
    <div class="app-brand demo">
        <a href="{{ route('dashboard.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('backend/assets/img/logo/logo.png') }}" alt="auth-login-cover" width="20"
                    height="24" />
            </span>
            <span class="app-brand-text demo menu-text fw-bold">لوحة هتف</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1" style="padding-bottom: 20px;">
        <!-- Dashboards -->

        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="الصفحات"> الصفحات</span>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.header.index')) active @endif">
            <a href="{{ route('dashboard.header.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-home"></i>
                <div data-i18n="الرئيسية"> الرئيسية</div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.invoices.index')) active @endif" >
            <a href="{{ route('dashboard.invoices.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-file-invoice"></i>
                <div data-i18n="الفواتير">الفواتير</div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.admin.index')) active @endif">
            <a href="{{ route('dashboard.admin.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-id"></i>
                <div data-i18n="المشرفون"> المشرفون</div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.service.index')) active @endif">
            <a href="{{ route('dashboard.service.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-truck"></i>
                <div data-i18n="الخدمات"> الخدمات</div>
            </a>
        </li>


        <li class="menu-item @if (request()->routeIs('dashboard.footer.index')) active @endif">
            <a href="{{ route('dashboard.footer.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-box-align-bottom"></i>
                <div data-i18n="الفوتر">الفوتر</div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.section.index')) active @endif">
            <a href="{{ route('dashboard.section.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-photo"></i>
                <div data-i18n="خلفيات الموقع"> خلفيات الموقع</div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.partner.index')) active @endif">
            <a href="{{ route('dashboard.partner.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-heart-handshake"></i>
                <div data-i18n="شركاء النجاح"> شركاء النجاح</div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.business.exhibition.index')) active @endif">
            <a href="{{ route('dashboard.business.exhibition.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-brand-bumble"></i>
                <div data-i18n="معرض الأعمال"> معرض الأعمال</div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.blogs.index')) active @endif">
            <a href="{{ route('dashboard.blogs.index') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-book"></i>
                <div data-i18n="مدوّنتنا">مدوّنتنا </div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.packages.index')) active @endif">
            <a href="{{ route('dashboard.packages.index') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-box"></i>
                <div data-i18n="باقتنا">باقتنا </div>
            </a>
        </li>


        <li class="menu-item @if (request()->routeIs('dashboard.marketeer.index')) active @endif">
            <a href="{{ route('dashboard.marketeer.index') }}" class="menu-link">
                {{-- <i class="menu-icon tf-icons ti ti-brand-bumble"></i> --}}
                <i class="menu-icon tf-icons fa-solid fa-ranking-star"></i>
                <div data-i18n="المسوقون"> المسوقون </div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.customer.index')) active @endif">
            <a href="{{ route('dashboard.customer.index') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-users"></i>
                <div data-i18n="العملاء"> العملاء </div>
            </a>
        </li>


        <li class="menu-item @if (request()->routeIs('dashboard.plan.index')) active @endif">
            <a href="{{ route('dashboard.plan.index') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-eye"></i>
                <div data-i18n="خطة"> خطة </div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.gallery.index')) active @endif">
            <a href="{{ route('dashboard.gallery.index') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-camera"></i>
                <div data-i18n="الاستوديو"> الاستوديو </div>
            </a>
        </li>

        <li class="menu-item @if (request()->routeIs('dashboard.settings.index')) active @endif">
            <a href="{{ route('dashboard.settings.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-box-align-bottom"></i>
                <div data-i18n="الاعدادات">الاعدادات</div>
            </a>
        </li>

        <!-- languages -->
        <li class="menu-item" style="margin-bottom: 55px;">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons ti ti-world"></i>
                <div data-i18n="اللغات">اللغات</div>
            </a>
            @foreach ($translationFiles as $translationFile)
            <li class="menu-item @if (request()->routeIs('dashboard.languages.index', ['slug' => $translationFile])) active @endif">
                <a href="{{ route('dashboard.languages.index', ['slug' => $translationFile]) }}" class="menu-link">
                    <div data-i18n="{{ $translationFile }}">
                        {{ $translationFile }}
                    </div>
                </a>
            </li>
        @endforeach
        </li>

        <!-- languages -->





    </ul>
</aside>
