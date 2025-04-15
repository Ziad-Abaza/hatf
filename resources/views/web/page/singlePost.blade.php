@extends('web.layout.main')

@section('title', 'shya - post')

@section('main')
    <section class="main-head bg-dark d-flex justify-content-center align-items-end ">
        <div class="card-head m-auto text-center bg-black p-3">
            <h1 class="position-absolute">
                Elevate Your Online Presence: Digital Agency Insights
            </h1>
        </div>
    </section>
    
    <section class="container">
        <div class="post py-5">
            <div class="row">
                <div class="col-12 col-md-8 ">
                    <img class="w-100" src="../imgs/post.jpg" alt="" srcset="" />
                    <article class="mt-5">
                        <p class="py-2">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio
                            fugit adipisci cum natus deserunt architecto quasi maiores
                            minus, voluptatem possimus suscipit quas magnam fuga eius amet
                            esse sed expedita dolor. Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Odio fugit adipisci cum natus deserunt
                            architecto quasi maiores minus, voluptatem possimus suscipit
                            quas magnam fuga eius amet esse sed expedita dolor Lorem ipsum
                            dolor sit, amet consectetur adipisicing elit. Odio fugit
                            adipisci cum natus deserunt architecto quasi maiores minus,
                            voluptatem possimus suscipit quas magnam fuga eius amet esse sed
                            expedita dolor. Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Odio fugit adipisci cum natus deserunt
                            architecto quasi maiores minus, voluptatem possimus suscipit
                            quas magnam fuga eius amet esse sed expedita dolor
                        </p>
                        <p class="py-2">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio
                            fugit adipisci cum natus deserunt architecto quasi maiores
                            minus, voluptatem possimus suscipit quas magnam fuga eius amet
                            esse sed expedita dolor. Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Odio fugit adipisci cum natus deserunt
                            architecto quasi maiores minus, voluptatem possimus suscipit
                            quas magnam fuga eius amet esse sed expedita dolor Lorem ipsum
                            dolor sit, amet consectetur adipisicing elit. Odio fugit
                            adipisci cum natus deserunt architecto quasi maiores minus,
                            voluptatem possimus suscipit quas magnam fuga eius amet esse sed
                            expedita dolor. Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Odio fugit adipisci cum natus deserunt
                            architecto quasi maiores minus, voluptatem possimus suscipit
                            quas magnam fuga eius amet esse sed expedita dolor
                        </p>
                        <p class="py-2">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio
                            fugit Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Odio fugit Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit. Odio fugit Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Odio fugit.
                        </p>
                    </article>
                </div>
                <div class="col-4 d-none d-md-block ">
                    <form class="d-flex border" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="bg-main border-0" type="submit">
                            <img src="../imgs/search.svg" alt="" srcset="" />
                        </button>
                    </form>
                    <h3 class="fw-bold mt-2">Lastest Post</h3>
                    <div class="cards mt-3">
                        <div class="card my-2 bg-dark p-3">
                            <h5 class="text-main">
                                Code and Creativity: Crafting Digital Excellence Together
                            </h5>
                            <p>August 22, 2023 - No Comments</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                eaque quis, architecto facilis deleniti provident.
                            </p>
                            <a class="text-main" href="">Read More</a>
                        </div>
                        <div class="card my-2 bg-dark p-3">
                            <h5 class="text-main">
                                Code and Creativity: Crafting Digital Excellence Together
                            </h5>
                            <p>August 22, 2023 - No Comments</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                eaque quis, architecto facilis deleniti provident.
                            </p>
                            <a class="text-main" href="">Read More</a>
                        </div>
                        <div class="card my-2 bg-dark p-3">
                            <h5 class="text-main">
                                Code and Creativity: Crafting Digital Excellence Together
                            </h5>
                            <p>August 22, 2023 - No Comments</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                eaque quis, architecto facilis deleniti provident.
                            </p>
                            <a class="text-main" href="">Read More</a>
                        </div>
                        <div class="about-us my-3">
                            <h3>About Us</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Veniam magnam enim suscipit a, nesciunt voluptates ipsa vero
                                minima, accusamus aut ut id adipisci quasi praesentium eveniet
                                sapiente, tempore porro blanditiis!
                            </p>
                            <h5>Follow Us</h5>
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <img class="bg-light" src="../imgs/facebook.svg" alt="" />
                            </a>
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <img class="bg-light" src="../imgs/twitter.svg" alt="" />
                            </a>
                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                <img class="bg-light" src="../imgs/youtube.svg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="replay my-5">
            <h2 class="fw-bold">Leave a Reply</h2>
            <p>
                Your email address will not be published. Required fields are marked *
            </p>
            <form>
                <div class="mb-3">
                    <textarea class="form-control rounded-0 border-bottom border-main" placeholder="Leave a comment here" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Name" class="form-control rounded-0 border-bottom border-main" />
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Email" class="form-control rounded-0 border-bottom border-main"
                        id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="mb-3">
                    <input type="url" placeholder="Website" class="form-control rounded-0 border-bottom border-main" />
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                    <label class="form-check-label" for="exampleCheck1">Save my name, email, and website in this browser for
                        the next
                        time I comment.</label>
                </div>
                <button type="submit" class="btn bg-dark rounded-pill">
                    Post comment
                </button>
            </form>
        </div>
    </section>
@endsection
