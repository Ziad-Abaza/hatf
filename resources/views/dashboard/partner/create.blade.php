@extends('dashboard.layout.main')

@section('content')
<div class="container-fluid flex-grow-1 py-5" dir="rtl">
    <!-- Form Card -->
    <div class="card shadow border-0 col-lg-8 mx-auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">إضافة شريك النجاح</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.partner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">

                    <!-- Partner Image -->
                    <div class="col-md-6">
                        <label for="formFile" class="form-label">إضافة صورة شريك النجاح</label>
                        <div class="input-group">
                            <input type="file" name="image" id="formFile"
                                class="custom-input form-control @error('image') is-invalid @enderror" />
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
                            <span class="material-symbols-rounded fs-6 me-1">add</span> إضافة
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
