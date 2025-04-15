@extends('web.layout.main')

@section('title', 'shya - FAQ')

@section('main')
    <section class="main-head bg-dark d-flex justify-content-center align-items-center">
        <div class="card-head m-auto text-center bg-black p-3">
            <h1>FAQ</h1>
            <p>
                <a href="{{ route('home') }}" class="text-main">Home</a>- FAQ
            </p>
        </div>
    </section>

    <div class="container">
        <!-- Start FAQ section -->
        <section class="faq my-5">
            <div class="row">

                <div class="col-12 col-md-4">
                    <h2 class="text-white fw-bold">Clearing the Digital Part</h2>
                    <p>Your FAQs Answered for Seamless Digital Success.</p>
                </div>

                <div class="col-12 col-md-8 ">
                    <div class="accordion" id="accordionExample">

                        @foreach ($faqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $loop->index + 1 }}" aria-expanded="true"
                                        aria-controls="collapse-{{ $loop->index + 1 }}">
                                        {{ $faq->question }} #{{ $loop->index + 1 }}
                                    </button>
                                </h2>
                                <div id="collapse-{{ $loop->index + 1 }}" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">{{ $faq->answer }}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- end FAQ section -->
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
