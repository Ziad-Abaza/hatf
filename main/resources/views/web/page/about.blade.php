@extends('web.layout.main')

@section('title', 'shya - about')

@section('main')

    <section class="main-head bg-dark d-flex justify-content-center align-items-center">
        <div class="card-head m-auto text-center bg-black p-3">
            <h1>About Us</h1>
            <p>
                <a href="{{ route('home') }}" class="text-main">Home</a> - About Us
            </p>
        </div>
    </section>

    <div class="container">

        <!-- start about section -->
        <section class="about my-5 min-vh-100  d-flex align-items-center position-relative">
            <div class="bg-dark m-auto position-absolute z-n1 top-50 start-50 translate-middle"
                style="width: 600px; height: 300px; max-width: 100vw;"></div>
            <div class="about-body row align-items-center">
                <div class="col-12 col-xl-6">
                    <h2 class="fw-bold">Empowering Your Digital Success.</h2>
                    <hr class="w-25 border-3 border-white" />
                    <div class="d-flex flex-wrap justify-content-between">
                        <p>
                            Founded in 2012, our digital agency has been a trailblazer in
                            the ever-evolving digital landscape. With unwavering dedication
                            and creative prowess, we have catered to over 2000 clients
                            globally, spanning
                        </p>
                        <p>
                            Founded in 2012, our digital agency has been a trailblazer in
                            the ever-evolving digital landscape. With unwavering dedication
                            and creative prowess, we have catered to over 2000 clients
                            globally, spanning
                        </p>
                    </div>
                    <a class="text-main" href="">+ more about us</a>
                </div>
                <div class="col-12 col-xl-6">
                    <h5>name in Numbers</h5>
                    <div class="row">
                        <div class="border border-light col-5 col-sm-3 m-1">
                            <h2 class="text-main fw-bold">'11</h2>
                            <p>Years Experience since 2012</p>
                        </div>
                        <div class="border border-light col-5 col-sm-3 m-1">
                            <h2 class="text-main fw-bold">'11</h2>
                            <p>Years Experience since 2012</p>
                        </div>
                        <div class="border border-light col-5 col-sm-3 m-1">
                            <h2 class="text-main fw-bold">'11</h2>
                            <p>Years Experience since 2012</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->

        <!-- start offers section -->
        <section class="offers my-5 min-vh-100  d-flex flex-column justify-content-center  ">
            <div class="offers-head col-12 col-md-7 ">
                <h2 class="fw-bold">We offer our customers our best effort.</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse vero
                    consequuntur libero ipsa perspiciatis cupiditate facere ratione
                    ullam, aliquid ipsum eaque fuga voluptatibus inventore velit dicta
                    ad enim magni. Animi.
                </p>
            </div>

            <div class="offers-body col-12">
                <div class="row justify-content-end">
                    <div class="col-12 col-md-4 col-xl-3 mb-3 my-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Crafting</h5>
                            </div>
                            <hr />
                            <div class="card-body">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Assumenda, rem?
                                </p>
                                <div class="w-100 text-end">
                                    <img class="" loading="lazy" src="{{ asset('front/assets/imgs/cardIcon1.svg') }}"
                                        alt="" srcset="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-xl-3 mb-3 my-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Crafting</h5>
                            </div>
                            <hr />
                            <div class="card-body">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Assumenda, rem?
                                </p>
                                <div class="w-100 text-end">
                                    <img loading="lazy" src="{{ asset('front/assets/imgs/cardIcon1.svg') }}" alt=""
                                        srcset="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-xl-3 mb-3 my-3 mb-sm-0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Crafting</h5>
                            </div>
                            <hr />
                            <div class="card-body">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Assumenda, rem?
                                </p>
                                <div class="w-100 text-end">
                                    <img loading="lazy" src="{{ asset('front/assets/imgs/cardIcon1.svg') }}" alt=""
                                        srcset="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end offers section -->

        <!-- start our team section -->
        <div class="team  min-vh-100  d-flex flex-column justify-content-center my-5">
            <div class="team-body">
                <h2 class=" col-12 col-md-6 mb-3 fw-bold">
                    Unleashing Digital Magic with Our Expert Team.
                </h2>
                @foreach ($ourTeams as $ourTeam)
                    <div class="row py-3">
                        <div class="card col-6 col-md-3 border-0">
                            <img src="{{ asset('storage/images/' . $ourTeam->image) }}" class="card-img-top" alt="..." />
                            <div class="card-body p-0 pt-3 text-start">
                                <h5>{{ $ourTeam->name }}</h5>
                                <p class="text-main">{{ $ourTeam->job }}.</p>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="row py-3">
                    <div class="col-8 col-md-4">
                        <h3 class="text-main">In-depth Client Success Stories :</h3>
                    </div>
                    <div class="col-12 col-md-8 ">
                        <p class="fw-bold">
                            From day one, Name impressed us with their innovative
                            strategies. Their dedication to our success and personalized
                            approach resulted in exceptional growth and tangible ROI. They
                            are more than just an agency; they are a trusted partner who
                            continually exceeds our expectations. We highly recommend their
                            services to anyone seeking unparalleled digital solutions.
                        </p>
                        <div class="d-flex justify-content-start">
                            <img src="{{ asset('front/assets/imgs/IMG.jpg') }}" class="rounded-circle me-3"
                                style="width: 60px; height: 60px" />
                            <div class="info">
                                <h6 class="text-main">john Doe</h6>
                                <h6>CEO</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end our team section -->

        <!-- start forces section -->
        <section class="forces my-5 min-vh-100 d-flex flex-column justify-content-center">
            <h3 class="text-center my-5 fw-bold">Joining Forces for Success.</h3>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3 ">
                    <img class="w-100" src="{{ asset('front/assets/imgs/forces.png') }}">
                </div>
                <div class="col-6 col-md-4 col-lg-3 ">
                    <img class="w-100" src="{{ asset('front/assets/imgs/forces.png') }}">
                </div>
                <div class="col-6 col-md-4 col-lg-3 ">
                    <img class="w-100" src="{{ asset('front/assets/imgs/forces.png') }}">
                </div>
                <div class="col-6 col-md-4 col-lg-3 ">
                    <img class="w-100" src="{{ asset('front/assets/imgs/forces.png') }}">
                </div>
                <div class="col-6 col-md-4 col-lg-3 ">
                    <img class="w-100" src="{{ asset('front/assets/imgs/forces.png') }}">
                </div>
                <div class="col-6 col-md-4 col-lg-3 ">
                    <img class="w-100" src="{{ asset('front/assets/imgs/forces.png') }}">
                </div>
                <div class="col-6 col-md-4 col-lg-3 ">
                    <img class="w-100" src="{{ asset('front/assets/imgs/forces.png') }}">
                </div>
                <div class="col-6 col-md-4 col-lg-3 ">
                    <img class="w-100" src="{{ asset('front/assets/imgs/forces.png') }}">
                </div>
            </div>
        </section>
        <!-- end forces section -->

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
