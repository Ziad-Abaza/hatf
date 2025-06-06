    <!-- link css style -->
    <link rel="stylesheet" href="{{asset('front/new_design/src/style/main.css')}}">
    <link rel="icon" href="{{ asset('front/assets/imgs/favicon-v2.svg') }}" type="image/svg+xml" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front/assets/imgs/favicon-v2.ico') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('front/assets/imgs/favicon-v2.ico?v=2') }}">
    <link rel="shortcut icon" href="front/assets/imgs/favicon-v2.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front/new_design/src/bootstrap/bootstrap.min.css')}}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        /* Make the button smaller on big screens */
        @media (min-width: 992px) {
            .whatsapp-button {
                font-size: 20px;
                padding: 0px 10px;
            }
        }
        #whatsapp-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            cursor: pointer;
        }

    </style>
