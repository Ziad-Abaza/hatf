@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-5" dir="rtl">

    <!-- Form Card -->
    <div class="card shadow border-0 col-lg-8 mx-auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-start">إضافة مقال جديد</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">

                    <!-- Title (Arabic) -->
                    <div class="col-md-6">
                        <label for="basic-default-title_ar" class="form-label">العنوان (عربي)</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-heading"></i></span>
                            <input type="text" name="title_ar" id="basic-default-title_ar"
                                class="custom-input form-control text-start @error('title_ar') is-invalid @enderror"
                                value="{{ old('title_ar') }}" placeholder="اكتب عنوان المقال بالعربي" />
                            @error('title_ar')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="col-md-6">
                        <label for="basic-default-image" class="form-label">الصورة</label>
                        <div class="input-group">
                            <input type="file" name="img" id="basic-default-img"
                                class="custom-input form-control text-start @error('img') is-invalid @enderror" />
                            @error('img')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Article Content (Arabic) -->
                <div class="col-md-12">
                    <label for="descraption_ar" class="form-label">المقال (عربي)</label>
                    <textarea name="descraption_ar" id="descraption_ar" rows="5"
                        class="custom-input form-control text-end @error('descraption_ar') is-invalid @enderror"
                        placeholder="اكتب محتوى المقال بالعربي">{{ old('descraption_ar') }}</textarea>
                    @error('descraption_ar')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Submit Button -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <span class="material-symbols-rounded fs-6 me-1">add</span> إضافة المقال
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
