@extends('web.layout.main')

@section('title', 'shya - Not found')

@section('content')

<div class="container" style="display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #f8f9fa;">
    <section class="main" style="text-align: center;">
        <div class="card" style="width: 100%; max-width: 450px; background-color: #ffffff; border-radius: 1.25rem; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); padding: 2.5rem; transition: transform 0.3s ease-in-out;">
            <h1 class="fs-1" style="color: #e74c3c; font-weight: 700;">Oops!</h1>
            <h2 class="fw-bold" style="color: #333;">Something Went Wrong</h2>
            <p style="color: #7f8c8d; font-size: 1.1rem;">We couldn’t find the page you’re looking for. Try going back to the home page.</p>
            <a href="{{route('home')}}" class="btn" style="background-color: #e74c3c; color: white; border: none; border-radius: 50px; padding: 0.75rem 2rem; font-size: 1.1rem; text-decoration: none; transition: background-color 0.3s ease;">
                Take Me Home
            </a>
        </div>
    </section>
</div>

<style>
    .card:hover {
        transform: translateY(-10px);
    }
    .btn:hover {
        background-color: #c0392b;
    }
</style>



@endsection
