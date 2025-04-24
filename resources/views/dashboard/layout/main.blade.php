<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('front/assets/imgs/favicon.svg') }}" type="image/svg+xml" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front/assets/imgs/favicon.svg') }}">
    <link rel="icon" type="image/png" href="{{ asset('front/assets/imgs/favicon.ico') }}">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link id="pagestyle" href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
</head>

<body class="g-sidenav-show bg-gray-100 rtl">
    @include('dashboard.layout.aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        @include('dashboard.layout.navbar')
        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div id="toast-container" class="toast-container position-fixed bottom-0 end-0 p-3"></div>
        </div>
        @yield('content')

        <div class="position-fixed bottom-0 start-0 p-3 custom-rtl" style="z-index: 9999">
            <div id="copyToast" class="toast align-items-center text-white bg-success border-0" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex justify-content-between">
                    <div id="toastMessage" class="toast-body">
                    </div>
                    <button type="button" class="btn-close btn-close-white my-3 m-0" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    </main>
    <!-- Core JS Files -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.2.0') }}"></script>
    <script src="{{ asset('assets/js/besic-dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
