@extends('web.layout.main_home_new')

@section('title', $blog->title_ar)

@section('content')
    <!--style="background: url('{{ asset('storage/images/' . $section->business_show) }}') no-repeat center center/cover; min-height: 300px; direction: rtl;">-->
<section class="gallary pt-5 text-center" id="gallary">
    <div class="container">
        <div class="mb-4 d-flex">
            <div class="main-title">
                <p class="text-white main-title-home">أحدث مدوناتنا</p>
                <!--<img src="{{ asset('front/assets/imgs/main-title-bg.svg') }}" height="8" width="160" alt="">-->
            </div>
            <!--<h5 class="text-white fw-semibold mt-3">ابق على اطلاع بأخر التوجيهات والرؤى</h5>-->
        </div>
    </div>
</section>

<!-- Blog Content -->
<div class="container py-3" dir="rtl">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <!-- Blog Image -->
            <div class="text-center mb-4">
                <img src="{{ asset('storage/images/' . $blog->img) }}" alt="{{ $blog->title_ar }}" 
                    style="max-width: 70%; height: auto; border-radius: 12px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
            </div>

            <!-- Blog Title -->
            <h2 class="text-center mb-5" id="blog_title" style="color: #212121; font-weight: bold;">{{ $blog->title_ar }}</h2>

            <!-- Blog Content -->
            <div class="blog-content" id="blog-content" style="line-height: 2; font-size: 1.1rem; color: #333; text-align: right;">
                {!! $blog->descraption_ar !!}
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<style>

  #blog-content,
  #blog_title,
  body {
        background: #161616 !important;
        color: white !important;
        direction: rtl;
        text-align: right;
    }
    
    img {
        
        max-width: 100%;
        height: auto;
            
        
    }
            
            .main-title-home {
            
                position: relative;
                border-radius: 10px;
                width: auto;
                box-shadow: 0 0 10px -2px black;
                padding: 16px;
                text-align: end;
                overflow: hidden;
                font-size: 1.4rem;
                font-weight: bold;
        }

        .main-title-home::before {
            content: "";
            width: 2px;
            height: 100%;
            background-color: var(--primary);
            position: absolute;
            top: 0;
            right: 0;
        }

        h2,h1{
            font-size: 1.2rem;
        }
        p{
            font-size: 1rem;
        }

</style>
@endsection
