@extends('web.layout.main')

@section('title', 'shya - Portfolio 2')

@section('main')
    <section class="main-head bg-dark d-flex justify-content-center align-items-center">
        <div class="card-head m-auto text-center bg-black p-3">
            <h1>Portfolio 2</h1>
            <p>
                <a href="../../index.html" class="text-main">Home</a> - Portfolio 2
            </p>
        </div>
    </section>
    <div class="container">
        <!-- Start gallary section -->
        <div class="gallary my-5">
            <p class="text-center">All Gallary</p>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="project" style=" height: 400px;">
                        <img class="w-100 h-100 object-fit-fill py-3" src="{{ asset('front/assets/imgs/bigBrand.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="project" style=" height: 400px;">
                        <img class="w-100 h-100 object-fit-fill py-3" src="{{ asset('front/assets/imgs/bigBrand.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="project" style=" height: 400px;">
                        <img class="w-100 h-100 object-fit-fill py-3" src="{{ asset('front/assets/imgs/brandSmall.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="project" style=" height: 400px;">
                        <img class="w-100 h-100 object-fit-fill py-3" src="{{ asset('front/assets/imgs/bigBrand.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="project" style=" height: 400px;">
                        <img class="w-100 h-100 object-fit-fill py-3" src="{{ asset('front/assets/imgs/bigBrand.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="project" style=" height: 400px;">
                        <img class="w-100 h-100 object-fit-fill py-3" src="{{ asset('front/assets/imgs/bigBrand.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Start gallary section -->
        <!-- Start enter-mail section -->
        <section class="mail-form my-5 min-vh-50 d-flex align-items-center">
            <div class="mail-body w-100 ">
                <div class="mail-form-poster">
                    <h1 class="fs-4 fw-bolder text-center text-secondary">Newsletter</h1>
                </div>
                <div class="main-mail-form">
                    <form class="row">
                        <div class="col-6 col-md-8 col-xl-10 p-0 pt-1">
                            <input type="email" placeholder="Your email" class="form-control" />
                        </div>
                        <div class="col-6 col-md-4 col-xl-2 p-0 pt-1 text-end">
                            <button type="submit" class="btn ">
                                <img loading="lazy" src="{{ asset('front/assets/imgs/mail.svg') }}" alt="mailIcon" />
                                subscribe
                            </button>
                        </div>
                    </form>
                    <hr />
                </div>
            </div>
        </section>
        <!-- end enter-mail section -->
    </div>
@endsection
