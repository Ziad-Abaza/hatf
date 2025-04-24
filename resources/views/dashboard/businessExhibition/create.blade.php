@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-5" dir="rtl">

    <!-- Form Card -->
    <div class="card shadow border-0 col-lg-8 mx-auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-start">إضافة عمل جديد</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.business.exhibition.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="row g-3">

                    <!-- Work Name -->
                    <div class="col-md-6">
                        <label for="basic-default-name" class="form-label">إسم العمل</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-tag"></i></span>
                            <input type="text" name="name" id="basic-default-name"
                                class="custom-input form-control text-start @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" placeholder="اكتب اسم واضح للعمل" />
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Work Image -->
                    <div class="col-md-6">
                        <label for="formFile" class="form-label">إضافة صورة العمل</label>
                        <div class="input-group">
                            <input type="file" name="image" id="formFile"
                                class="custom-input form-control text-start @error('image') is-invalid @enderror" />
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Work Description -->
                    <div class="col-md-12">
                        <label for="desc" class="form-label">الوصف</label>
                        <textarea name="desc" id="desc" rows="3"
                            class="custom-input form-control text-end @error('desc') is-invalid @enderror"
                            placeholder="اكتب وصفًا واضحًا للعمل">{{ old('desc') }}</textarea>
                        @error('desc')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <span class="material-symbols-rounded fs-6 me-1">add</span> إضافة العمل
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
