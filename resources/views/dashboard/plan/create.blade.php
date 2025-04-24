@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-5" dir="rtl">
    <!-- Form Card -->
    <div class="card shadow border-0 col-lg-8 mx-auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-start">إضافة خطة جديدة</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.plan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Display validation errors -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="row g-3">

                    <!-- Image -->
                    <div class="col-md-6">
                        <label for="image" class="form-label">صورة الخدمة</label>
                        <div class="input-group">
                            <input type="file" name="image" id="image"
                                class="custom-input form-control text-start @error('image') is-invalid @enderror"
                                accept="image/*" />
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

                <!-- Submit Button -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <span class="material-symbols-rounded fs-6 me-1">add</span> إضافة الخطة
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
