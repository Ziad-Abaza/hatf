@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row custom-rtl">
        <div class="col-xl">
            <div class="card my-7 mx-auto" style="max-width: 800px">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">إضافة مراجعة جديدة</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.reviews.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <!-- Name -->
                            <div class="col-md-6 col-12 mb-3">
                                <label class="form-label" for="name">الاسم</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-user"></i></span>
                                    <input type="text" name="name" id="name"
                                        class="custom-input form-control text-start @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" placeholder="أدخل اسم الشخص" />
                                </div>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Job Title -->
                            <div class="col-md-6 col-12 mb-3">
                                <label class="form-label" for="job_title">المسمى الوظيفي</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i
                                            class="fas fa-briefcase"></i></span>
                                    <input type="text" name="job_title" id="job_title"
                                        class="custom-input form-control text-start @error('job_title') is-invalid @enderror"
                                        value="{{ old('job_title') }}" placeholder="أدخل المسمى الوظيفي" />
                                </div>
                                @error('job_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Content -->
                            <div class="col-md-12 col-12 mb-3">
                                <label for="content" class="form-label">المحتوى</label>
                                <textarea name="content" id="content"
                                    class="custom-input form-control @error('content') is-invalid @enderror" rows="3"
                                    placeholder="أضف محتوى المراجعة">{{ old('content') }}</textarea>
                                @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Service -->
                            <div class="col-md-6 col-12 mb-3">
                                <label class="form-label" for="service_id">الخدمة</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i
                                            class="fas fa-list-alt"></i></span>
                                    <select name="service_id" id="service_id"
                                        class="custom-input form-select text-start @error('service_id') is-invalid @enderror">
                                        <option value="" selected disabled>اختر خدمة</option>
                                        @foreach ($services as $service)
                                        <option value="{{ $service->id }}" {{ old('service_id')==$service->id ?
                                            'selected' : '' }}>
                                            {{ $service->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('service_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Rating -->
                            <div class="col-md-6 col-12 mb-3">
                                <label class="form-label" for="rating">التقييم</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-star"></i></span>
                                    <select name="rating" id="rating"
                                        class="custom-input form-select text-start @error('rating') is-invalid @enderror"
                                        required>
                                        <option value="" selected disabled>اختر التقييم</option>
                                        @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}" {{ old('rating')==$i
                                            ? 'selected' : '' }}>
                                            ⭐ {{ $i }} / 5
                                            </option>
                                            @endfor
                                    </select>
                                </div>
                                @error('rating')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image Upload with Preview -->
                            <div class="col-md-12 col-12 mb-3">
                                <label for="image" class="form-label">الصورة</label>
                                <input type="file" name="image" id="image"
                                    class="custom-input form-control @error('image') is-invalid @enderror"
                                    accept="image/*" onchange="previewImage(event)" />
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="mt-2">
                                    <img id="imagePreview" src="" alt="صورة المعاينة"
                                        class="rounded-circle avatar-lg cursor-pointer"
                                        style="display: none; max-width: 100px;" />
                                </div>
                            </div>

                        </div>

                        <!-- زر الإضافة -->
                        <button type="submit" class="btn btn-primary mt-4">
                            <span class="material-symbols-rounded fs-6 me-1">add</span> إضافة
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
