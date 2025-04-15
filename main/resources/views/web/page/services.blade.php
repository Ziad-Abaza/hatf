@extends('web.layout.main')

@section('title', 'shya - Services')

@section('main')

    <section class="main-head bg-dark d-flex justify-content-center align-items-center">
        <div class="card-head m-auto text-center bg-black p-3">
            <h1>Services</h1>
            <p>
                <a href="{{ route('home') }}" class="text-main">Home</a> - Services
            </p>
        </div>
    </section>

    <div class="container">
        <!-- start services section -->
        <section class="services min-vh-100  d-flex align-items-center my-5">
            <div class="row flex-wrap">
                <div class="col-12 col-xl-6 mb-3 mb-sm-0">
                    <h2 class="fw-bold">
                        Unlocking Digital Excellence: Data-Driven Solutions
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero
                        error officiis accusantium voluptatem ducimus, nisi aperiam
                        reprehenderit.
                    </p>
                    <button class="btn btn-light text-dark fw-bolder rounded-pill">
                        + More Services?
                    </button>
                </div>

                @foreach ($services as $service)
                    <div class="col-12 col-sm-6 col-xl-3 mb-3 my-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h5 class="card-title">{{ $service->name }}</h5>
                                <img loading="lazy" width="100px" height="100px"
                                    src="{{ asset('storage/images/' . $service->image) }}" alt="" srcset="" />
                            </div>
                            <div class="card-body">
                                <hr />
                                <p>{{ $service->desc }} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <!-- end services section -->
        <!-- start brands section -->
        <section class="brands my-5">
            <h2 class="text-center fw-bold w-100 w-md-50 m-auto">Brands Get Enhanced by Visionary Digital Excellence.</h2>
            <div class="row">
                <div class="col-12 col-md-6 ">
                    <div class="brand mb-2 text-left">
                        <p class="">(1)</p>
                        <h5 class="bg-light text-dark w-50 my-4">Abstraction Journey</h5>
                        <img src="{{ asset('front/assets/imgs/brandSmall.jpg') }}" class="w-100" height="500">
                    </div>
                    <div class="brand mb-2 text-left">
                        <p class="">(2)</p>
                        <h5 class="bg-light text-dark w-50 my-4">Abstraction Journey</h5>
                        <img src="{{ asset('front/assets/imgs/bigBrand.jpg') }}" class="w-100" height="950">
                    </div>
                </div>
                <div class="col-12 col-md-6  mt-5">
                    <div class="brand mb-2 text-left">
                        <p class="">(2)</p>
                        <h5 class="bg-light text-dark w-50 my-4">Abstraction Journey</h5>
                        <img src="{{ asset('front/assets/imgs/bigBrand.jpg') }}" class="w-100" height="950">
                    </div>
                    <div class="brand mb-2 text-left">
                        <p class="">(1)</p>
                        <h5 class="bg-light text-dark w-50 my-4">Abstraction Journey</h5>
                        <img src="{{ asset('front/assets/imgs/brandSmall.jpg') }}" class="w-100" height="500">
                    </div>
                </div>
            </div>
        </section>
        <!-- end brands section -->
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
