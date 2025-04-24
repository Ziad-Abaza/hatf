@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row custom-rtl">
        <div class="col-xl">
            <div class="card my-7 mx-auto" style="max-width: 800px">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">تعديل ميزة</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.advantages.update', $advantage->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <!-- العنوان -->
                            <div class="col-12 mb-3">
                                <label class="form-label" for="title">العنوان</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-heading"></i></span>
                                    <input type="text" name="title" id="title"
                                        class="custom-input form-control text-start @error('title') is-invalid @enderror"
                                        value="{{ old('title', $advantage->title) }}" placeholder="أدخل العنوان"
                                        required />
                                </div>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- المحتوى -->
                            <div class="col-md-12 col-12 mb-3">
                                <label for="description" class="form-label">المحتوى</label>
                                <textarea name="description" id="description"
                                    class="custom-input form-control @error('description') is-invalid @enderror"
                                    rows="3" placeholder="أضف المحتوى"
                                    required>{{ old('description', $advantage->description) }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- اختيار الخدمة -->
                            <div class="col-md-6 col-12 mb-3">
                                <label class="form-label" for="service_id">الخدمة</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i
                                            class="fas fa-list-alt"></i></span>
                                    <select name="service_id" id="service_id"
                                        class="custom-input form-select text-start @error('service_id') is-invalid @enderror"
                                        required>
                                        <option value="" disabled>اختر خدمة</option>
                                        @foreach ($services as $service)
                                        <option value="{{ $service->id }}" @if ($advantage->service_id == $service->id)
                                            selected @endif>
                                            {{ $service->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('service_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- الحالة -->
                            <div class="col-md-6 col-12 mb-3">
                                <label class="form-label" for="status">الحالة</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i
                                            class="fas fa-toggle-on"></i></span>
                                    <select name="status" id="status"
                                        class="custom-input form-select text-start @error('status') is-invalid @enderror"
                                        required>
                                        <option value="">اختر الحالة</option>
                                        <option value="you" @if ($advantage->status == "you") selected @endif>
                                            ميزة للعميل
                                        </option>
                                        <option value="our" @if ($advantage->status == "our") selected @endif>
                                            ميزة لنا
                                        </option>
                                    </select>
                                </div>
                                @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- صورة الميزة (إذا كانت موجودة) -->
                            <div class="col-md-12 col-12 mb-3">
                                <label for="image" class="form-label">الصورة</label>
                                <div class="input-group gap-2">
                                    <input type="file" name="image" id="image"
                                        class="custom-input form-control @error('image') is-invalid @enderror"
                                        accept="image/*" onchange="previewImage(event)" />

                                    <!-- عرض الصورة الحالية -->
                                    @if ($advantage->getFirstMediaUrl('advantages'))
                                    <div class="m-0">
                                        <img src="{{ $advantage->getFirstMediaUrl('advantages') }}" alt="Current Image"
                                            class="rounded-circle avatar-lg cursor-pointer" data-bs-toggle="modal"
                                            data-bs-target="#imageModal"
                                            data-image="{{ $advantage->getFirstMediaUrl('advantages') }}" />
                                    </div>
                                    @endif
                                </div>
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <!-- معاينة الصورة الجديدة -->
                                <div class="mt-2">
                                    <img id="imagePreview" src="" alt="صورة المعاينة"
                                        class="rounded-circle avatar-lg cursor-pointer"
                                        style="display: none; max-width: 100px;" />
                                </div>
                            </div>

                        </div>

                        <!-- زر الحفظ -->
                        <button type="submit" class="btn btn-primary mt-4">
                            <span class="material-symbols-rounded fs-6 me-1">save</span> حفظ التعديلات
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
