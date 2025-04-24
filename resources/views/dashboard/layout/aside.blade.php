<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-end ms-2 bg-white my-2 text-end"
    id="sidenav-main" style="direction:rtl;">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand px-4 py-3 m-0 d-flex align-items-center g-5" href="{{ route('home') }}" target="_blank">
            <div class="app-brand-logo demo">
                <img src="{{ asset('backend/assets/img/logo/logo.png') }}" class="navbar-brand-img " width="26" height="26"
                    alt="main_logo">
            </div>
            <span class="app-brand-text demo menu-text fw-bold">لوحة هتف</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto"  id="sidenav-collapse-main" style="height:85%;">
        <ul class="navbar-nav">

            <!-- الصفحة الرئيسية -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/headers*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.header.index') }}">
                    <i class="material-symbols-rounded opacity-5">home</i>
                    <span class="nav-link-text ms-1">الرئيسية</span>
                </a>
            </li>

            <!-- الفواتير -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/invoices*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.invoices.index') }}">
                    <i class="material-symbols-rounded opacity-5">receipt</i>
                    <span class="nav-link-text ms-1">الفواتير</span>
                </a>
            </li>

            <!-- المشرفون -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/admins*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.admin.index') }}">
                    <i class="material-symbols-rounded opacity-5">admin_panel_settings</i>
                    <span class="nav-link-text ms-1">المشرفون</span>
                </a>
            </li>

            <!-- الخدمات -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/services*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.service.index') }}">
                    <i class="material-symbols-rounded opacity-5">design_services</i>
                    <span class="nav-link-text ms-1">الخدمات</span>
                </a>
            </li>

            <!-- خلفيات الموقع -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/footers*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
                    href="{{ route('dashboard.footer.index') }}">
                    <i class="material-symbols-rounded opacity-5">box</i>
                    <span class="nav-link-text ms-1">الفوتر</span>
                </a>
            </li>

            <!-- خلفيات الموقع -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/sections*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
                    href="{{ route('dashboard.section.index') }}">
                    <i class="material-symbols-rounded opacity-5">wallpaper</i>
                    <span class="nav-link-text ms-1">خلفيات الموقع</span>
                </a>
            </li>

            <!-- شركاء النجاح -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/partners*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.partner.index') }}">
                    <i class="material-symbols-rounded opacity-5">people</i>
                    <span class="nav-link-text ms-1">شركاء النجاح</span>
                </a>
            </li>

            <!-- معرض الأعمال -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/business-exhibitions*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.business.exhibition.index') }}">
                    <i class="material-symbols-rounded opacity-5">folder_open</i>
                    <span class="nav-link-text ms-1">معرض الأعمال</span>
                </a>
            </li>

            <!-- مدوّنتنا -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/blogs*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.blogs.index') }}">
                    <i class="material-symbols-rounded opacity-5">edit</i>
                    <span class="nav-link-text ms-1">مدوّنتنا</span>
                </a>
            </li>

            <!-- باقتنا -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/packages*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.packages.index') }}">
                    <i class="material-symbols-rounded opacity-5">local_offer</i>
                    <span class="nav-link-text ms-1">باقتنا</span>
                </a>
            </li>

            <!-- المسوقون -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/marketeers*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.marketeer.index') }}">
                    <i class="material-symbols-rounded opacity-5">person_add</i>
                    <span class="nav-link-text ms-1">المسوقون</span>
                </a>
            </li>

            <!-- العملاء -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/customers*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.customer.index') }}">
                    <i class="material-symbols-rounded opacity-5">group</i>
                    <span class="nav-link-text ms-1">العملاء</span>
                </a>
            </li>

            <!-- خطة -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/plans*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.plan.index') }}">
                    <i class="material-symbols-rounded opacity-5">calendar_today</i>
                    <span class="nav-link-text ms-1">خطة</span>
                </a>
            </li>

            <!-- الاستوديو -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/gallery*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.gallery.index') }}">
                    <i class="material-symbols-rounded opacity-5">photo_camera</i>
                    <span class="nav-link-text ms-1">الاستوديو</span>
                </a>
            </li>

            <!-- الإعدادات -->
            <li class="nav-item">
                <a class="nav-link gap-1 {{ Request::is('dashboard/settings/meta*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}" href="{{ route('dashboard.settings.index') }}">
                    <i class="material-symbols-rounded opacity-5">settings</i>
                    <span class="nav-link-text ms-1">الإعدادات</span>
                </a>
            </li>

        </ul>
    </div>
</aside>

