@extends('web.layout.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6" style="margin-top: 150px;">
                <div class="card shadow-lg border-0 rounded-3 p-4">
                    <div class="card-body text-center">
                        <h2 class="display-4 mb-3">
                            @if($code == 200)
                                <i class="fas fa-check-circle text-success"></i>
                            @else
                                <i class="fas fa-times-circle text-danger"></i>
                            @endif
                        </h3>
                        <h3 class="mb-4">{{ $message }}</h3>
                        <div class="alert alert-info">
                            <strong>Transaction Reference:</strong> {{ $tranRef ?? 'N/A' }}
                        </div>
                        <div class="mt-4">
                            <a class="btn btn-primary btn-sm" href="{{ route('home') }}" >
                                العودة إلى الصفحة الرئيسية
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
<script>
    // Add a fade-in effect for the result page content
    document.addEventListener('DOMContentLoaded', function() {
        const resultCard = document.querySelector('.card');
        resultCard.classList.add('fade-in');
    });
</script>

@endpush

@push('css')
<style>
    /* Add fade-in animation */
    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Custom styling for the alert */
    .alert-info {
        background-color: #e9f7fd;
        border-color: #b3d8e6;
    }

    /* Button style */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    /* Icons */
    .fas {
        font-size: 3rem;
    }
</style>
@endpush
