@extends('web.layout.main')

@section('title', 'shya - Our team')

@section('main')

    <section class="main-head bg-dark d-flex justify-content-center align-items-center">
        <div class="card-head m-auto text-center bg-black p-3">
            <h1>Our Team</h1>
            <p>
                <a href="{{ route('home') }}" class="text-main">Home</a>
                - Our Team
            </p>
        </div>
    </section>

    <div class="container">
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
                            <img src="{{ asset('front/assets/imgs/IMG.jpg') }}" class="rounded-circle me-3" style="width: 60px; height: 60px" />
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
        <!-- start skils section -->
        <section class="skils my-5">
            <div class="row">
                <div class="col-12 col-md-6 ">
                    <h2 class="fw-bold">
                        Crafting Your Vision into Online Reality with Creative Brilliance.
                    </h2>
                    <p>
                        Our digital agency team, the ‘Digital Dreamweavers,’ possesses
                        unparalleled creative skills to transform your ideas into
                        captivating online realities, ensuring your brand’s digital
                        journey is truly extraordinary.
                    </p>
                    <p class="pt-3">contact us:</p>
                    <p>
                        <img src="../imgs/mail.svg" alt="mailIcon" />
                        <a href="mailto:admin@info.com" class="text-main">admin@info.com</a>
                    </p>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="skill my-2">
                        <h6>Design</h6>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-main" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill my-2">
                        <h6>Branding</h6>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-main" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill my-2">
                        <h6>Web Design</h6>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-main" style="width: 99%"></div>
                        </div>
                    </div>
                    <div class="skill my-2">
                        <h6>Marketing</h6>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-main" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end skils section -->
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
