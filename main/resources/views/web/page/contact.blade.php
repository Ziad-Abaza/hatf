@extends('web.layout.main')

@section('title', 'shya - contact')

@section('main')
<section class="main-head bg-dark d-flex justify-content-center align-items-center">
    <div class="card-head m-auto text-center bg-black p-3">
        <h1>Contact</h1>
        <p>
            <a href="../../index.html" class="text-main">Home</a>
            - Contact
        </p>
    </div>
</section>

<div class="container">
    <div class="contact my-5">
        <div class="row">
            <div class="col-12 col-md-6 ">
                <h2 class="fw-bold">Have Any Question? Get in Touch!</h2>
                <p class=" py-3">
                    Let’s embark on a journey to redefine your digital landscape.
                    Contact us today to take the first step towards digital
                    excellence.
                </p>
                <div class="items my-3">
                    <a class="nav-link fw-bold" href="mailto:admin@info.com">admin@info.com</a>
                </div>
                <div class="items my-3">
                    <a class="nav-link fw-bold" href="tel:+123-456-789">+123-456-789</a>
                </div>
                <p class="nav-link m-0 fw-light">saudi arabia -</p>
                <p class="nav-link m-0 fw-light">99 almalek St.</p>
                <p class="nav-link m-0 fw-light">Riyadh</p>
                <p class="text-main fw-bold mt-3">Your Success is Our Mission."</p>
            </div>
            <div class="col-12 col-md-6 ">
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Explicabo reprehenderit ipsa soluta veniam quia necessitatibus
                    nisi in eaque inventore enim sint labore velit debitis doloribus
                    natus vero, doloremque nostrum id?
                </p>
                <h3>Contact Us</h3>
                <form>
                    <div class="mb-3">
                        <input type="text" placeholder="Name"
                            class="form-control rounded-0 border-bottom border-main">
                    </div>
                    <div class="mb-3">
                        <input type="email" placeholder="Email"
                            class="form-control rounded-0 border-bottom border-main" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control rounded-0 border-bottom border-main" placeholder="Leave a comment here" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn bg-main col-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="empty" style="min-height: 200px;"></div>
</div>

@endsection