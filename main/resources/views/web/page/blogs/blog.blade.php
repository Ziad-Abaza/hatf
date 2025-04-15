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
            @foreach ($blogs as $blog)
            <div class="col-12 col-lg-4 mb-3 mb-sm-0">
                <!-- Gradient Border Container -->
                <div  style=" 
                        border-radius: 15px; /* Applies rounding to all four sides */
                        background: linear-gradient(151.22deg, rgba(231, 181, 30, 0.6) 0%, rgba(255, 255, 255, 0.6) 12.46%, rgba(231, 181, 30, 0.6) 31.03%, rgba(255, 255, 255, 0.6) 54.71%);
                        padding: 1px; /* Space for the border effect */
                        box-shadow: 0px 1px 18px 0px #C7C7C733; /* Optional shadow */
                        ">
                    <!-- Inner Card -->
                    <div class="card" style="
                    width: 100%;
                    height: 100%;
                    border-radius: 12px; /* Matches the outer border for smooth corners */
                    overflow: hidden;
                    background: #212121;
                ">
                        <a href="{{ route('blogns.show', [$blog->id, preg_replace('/[^\p{Arabic}\d]+/u', '-', trim($blog->title_ar))]) }}">
                            <img src="{{ asset('storage/images/' . $blog->img) }}" class="card-img-h" alt="">
                        </a>
                        <div class="card-body">
                            
                        <a href="{{ route('blogns.show', [$blog->id, preg_replace('/[^\p{Arabic}\d]+/u', '-', trim($blog->title_ar))]) }}">
                        <h5 class="card-title">{{ $blog->title_ar }}</h5>
                        </a>
                        
                            
                            {{-- <p class="des" style="width: 264; height:14px;" class="card-text">{!! Str::limit($blog->descraption_ar, 15, '...') !!}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $blogs->links('web.pagination.custom') }}
        </div>
    </div>
</section>


@endsection