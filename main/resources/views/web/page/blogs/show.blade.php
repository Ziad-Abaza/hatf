@extends('web.layout.main')

@section('content')

<h1>هَتْفَ</h1>

<section class="gallary" id="gallary" style="background-image: url({{ asset('storage/images/' . $section->business_show) }})">
    <div class="  py-3">
        <div class="container">
            <div class="gallary-header head-p">
                <div class="main-title">
                    <p> أحدث مدوناتنا
                    </p>
                    <img src="{{ asset('front/assets/imgs/main-title-bg.svg') }}" height="8" width="160" alt="">
                </div>

                <h5 class="head-t text-center fw-bold mb-3 mt-4 "> ابق على اطلاع بأخر التوجيهات و الرؤى
                </h5>
            </div>
        </div>
        <div class="container row justify-content-start">
            <div class="row">
                <div class="col-12 col-lg-12 mb-3 mb-sm-0" style="margin-top: 100px;">
                    <div class="row">

                        <div class="col-12" style="display: flex; justify-content: center;">
                            <img src="{{ asset('storage/images/' . $blog->img) }}" class="card-img-h" alt="">
                        </div>

                        <div class="col-12" style="margin-bottom: 40px; margin-top: 40px;">
                            <h5 class="card-title" style="text-align: center;">{{ $blog->title_ar }}</h5>
                        </div>


                        <div class="col-12">
                            <p class="card-text">{!! $blog->descraption_ar !!}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection