@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-5" dir="rtl">
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> الإستوديو</h4>
    <!-- Image Upload Form -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
            <form action="{{ route('dashboard.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3 align-items-end">
                    <!-- Image Input -->
                    <div class="col-md-9">
                        <label for="image" class="form-label">اختر صورة</label>
                        <div class="input-group">
                            <input type="file" class="custom-input form-control text-start" id="image" name="image"
                                accept="image/*" onchange="previewImage(event)" />
                        </div>
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary rounded-pill w-100 m-0 mb-2">
                            <span class="material-symbols-rounded fs-6 me-1">upload</span> رفع الصورة
                        </button>
                    </div>
                </div>

                <!-- Image Preview -->
                <div class="mt-3">
                    <img id="imagePreview" src="#" alt="Image Preview"
                        style="display: none; max-width: 100%; height: auto; border-radius: 12px;" />
                </div>
            </form>
        </div>
    </div>

    <!-- Fetch All Images -->
    <div class="card p-2">
    <h5 class="mb-3 text-center">معرض الصور</h5>
    <div class="d-flex gap-3 flex-wrap justify-content-evenly align-items-center">
        @foreach ($images as $image)
        <div class="card-body" style="max-width:340px">
            <div class="card shadow-sm transition-hover relative" style="height: 300px; width: 100%;">
                <img src="{{ asset('storage/images/' . $image->path) }}" class="card-img-top rounded-top"
                    alt="{{ $image->path }}" style="height: 75%; object-fit: cover;" />
                <div class="card-body text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <!-- Copy Link Button -->
                        <button class="btn btn-outline-secondary rounded-pill m-0 " style="height: fit-content;"
                            onclick="copyToClipboard('{{ asset('storage/images/' . $image->path) }}', 'تم نسخ رابط الصورة بنجاح!');">
                            <span class="material-symbols-rounded fs-6">content_copy</span> نسخ الرابط
                        </button>
                        <!-- Delete Button -->
                        <form action="{{ route('dashboard.gallery.destroy', $image->id) }}" method="POST"
                            onsubmit="return confirm('هل أنت متأكد من حذف هذه الصورة؟')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger rounded-pill m-0">
                                <span class="material-symbols-rounded fs-6">delete</span> حذف
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
