@extends('web.layout.main')

@section('title', 'shya - Archive')

@section('main')
    <section class="main-head bg-dark d-flex justify-content-center align-items-center">
        <div class="card-head m-auto text-center bg-black p-3">
            <h1>Archives</h1>
            <p>
                <a href="{{ route('home') }}" class="text-main">Home</a>
                - Archives
            </p>
        </div>
    </section>

    <div class="container">
        <!-- start Articels section -->
        <section class="articels my-5">
            <h2 class="text-center fw-bold">
                Unveiling Digital Excellence: Insights, Trends, and Strategies
                Unleashed!
            </h2>
            <div class="row justify-content-around pt-2">
                <div class="col-3 card my-3 border-0" style="width: 18rem">
                    <img src="{{ asset('front/assets/imgs/artic.jpg') }}" class="card-img-top" alt="flower" />
                    <div class="card-body p-0 pt-3">
                        <h5 class="card-title">
                            Elevate Your Online Presence: Digital Agency Insights
                        </h5>
                        <p class="card-text text-main">August 22 2023 - No Comments</p>
                        <p class="card-text text-secondary-emphasis">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="text-main fw-bold">Go somewhere</a>
                    </div>
                </div>
                <div class="col-3 card my-3 border-0" style="width: 18rem">
                    <img src="{{ asset('front/assets/imgs/artic.jpg') }}" class="card-img-top" alt="flower" />
                    <div class="card-body p-0 pt-3">
                        <h5 class="card-title">
                            Elevate Your Online Presence: Digital Agency Insights
                        </h5>
                        <p class="card-text text-main">August 22 2023 - No Comments</p>
                        <p class="card-text text-secondary-emphasis">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="text-main fw-bold">Go somewhere</a>
                    </div>
                </div>
                <div class="col-3 card my-3 border-0" style="width: 18rem">
                    <img src="{{ asset('front/assets/imgs/artic.jpg') }}" class="card-img-top" alt="flower" />
                    <div class="card-body p-0 pt-3">
                        <h5 class="card-title">
                            Elevate Your Online Presence: Digital Agency Insights
                        </h5>
                        <p class="card-text text-main">August 22 2023 - No Comments</p>
                        <p class="card-text text-secondary-emphasis">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="text-main fw-bold">Go somewhere</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Articels section -->
    </div>
@endsection
