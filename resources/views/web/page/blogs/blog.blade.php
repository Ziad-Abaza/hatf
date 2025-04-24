@extends('web.layout.main_home_new')

@section('title', 'أحدث مدوناتنا')

@section('content')
<section class="gallary py-5" id="gallary" 
    style="background: url('{{ asset('storage/images/' . $section->business_show) }}') no-repeat center center/cover;">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-4">
            <div class=" d-flex">
                <p class=" main-title-home">أحدث مدوناتنا</p>
                <!--<img src="{{ asset('front/assets/imgs/main-title-bg.svg') }}" height="8" width="160" alt="">-->
            </div>
            <!--<h5 class="text-white fw-semibold mt-3">ابق على اطلاع بأخر التوجيهات والرؤى</h5>-->
        </div>

        <!-- Blog Cards -->
        <div class="row g-4">
            @foreach ($blogs as $blog)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="p-1 h-100">
                        <div class="card text-white overflow-hidden">
                            <a class="p-2" href="{{ route('blogns.show', [$blog->id, preg_replace('/[^\p{Arabic}\d]+/u', '-', trim($blog->title_ar))]) }}">
                                <img src="{{ asset('storage/images/' . $blog->img) }}" class="card-img-top img-fluid" alt="{{ $blog->title_ar }}">
                            </a>
                            <div class="card-body text-center">
                                <a href="{{ route('blogns.show', [$blog->id, preg_replace('/[^\p{Arabic}\d]+/u', '-', trim($blog->title_ar))]) }}" 
                                    class="text-white text-decoration-none">
                                    <h5 class="card-title">{{ $blog->title_ar }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $blogs->links('web.pagination.custom') }}
        </div>
    </div>
</section>
@endsection

@section('css')

<style>

    body {
        background: #161616 !important;
        color: white !important;
        direction: rtl;
        text-align: right;
    }
    
    .content-wrapper {  
        background: #161616 !important;
        color: white !important;
    }
    
    img {
        max-width: 100%;
        height: auto;

    }

        .card {
            box-shadow: 0 0 9px -4px var(--primary);
            background-color: var(--black);
            color: var(--white);
            min-height: 250px;
            border-radius: 12px;
            transition: .5s;
            border: 3px solid transparent;
            height: 100%;
            
            img{
                border: 1px solid #d5a000;
            }

            h5 {
                font-size: 1.1rem;
            }

            .card-img-top {
                  border-radius: 12px;
            }

        }
        
        .card:hover{
            border: 3px solid #ffc410;
            transition: .5s;
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

    }
    footer{
            direction: ltr;
    }

/*
background: linear-gradient(135deg, rgba(231, 181, 30, 0.7), rgba(255, 255, 255, 0.3));
box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
*/
</style>
@endsection

