@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-5" dir="rtl">

    <!-- Form Card -->
    <div class="card shadow border-0 col-lg-8 mx-auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-start">تعديل العمل</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.business.exhibition.update', $businessExhibition->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <!-- Work Name -->
                    <div class="col-md-6">
                        <label for="basic-default-name" class="form-label">إسم العمل</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-tag"></i></span>
                            <input type="text" name="name" id="basic-default-name"
                                class="custom-input form-control text-start @error('name') is-invalid @enderror"
                                value="{{ old('name', $businessExhibition->name) }}"
                                placeholder="اكتب اسم واضح للعمل" />
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Work Image -->
                    <div class="col-md-6">
                        <label for="formFile" class="form-label">إضافة صورة العمل</label>
                        <div class="input-group gap-2">
                            <input type="file" name="image" id="formFile"
                                class="custom-input form-control text-start @error('image') is-invalid @enderror" />
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <!-- Display Current Image -->
                            @if ($businessExhibition->image)
                            <div class="m-0">
                                <img src="{{ asset('storage/images/' . $businessExhibition->image) }}"
                                    alt="Current Image" class="rounded-circle avatar-md cursor-pointer"
                                    data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('storage/images/' . $businessExhibition->image) }}" />
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Work Description -->
                    <div class="col-md-12">
                        <label for="desc" class="form-label">الوصف</label>
                        <textarea name="desc" id="desc" rows="3"
                            class="custom-input form-control text-end @error('desc') is-invalid @enderror"
                            placeholder="اكتب وصفًا واضحًا للعمل">{{ old('desc', $businessExhibition->desc) }}</textarea>
                        @error('desc')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <span class="material-symbols-rounded fs-6 me-1">save</span> تحديث العمل
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade custom-rtl" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h5 class="modal-title" id="imageModalLabel">عرض الصورة</h5>
                    <button type="button" class="btn btn-close m-0" data-bs-dismiss="modal" aria-label="Close">
                        <i class="material-symbols-rounded fs-4 text-dark ms-2">close</i>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="" alt="Large Image" class="img-fluid" id="modalImage" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
