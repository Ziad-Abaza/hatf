@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y py-5" dir="rtl">
    <!-- Form Card -->
    <div class="card shadow border-0 col-lg-8 mx-auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">تعديل شريك النجاح</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.partner.update', $partner->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

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

                    <!-- Display Existing Image -->
                    <div class="col-md-6">
                        @if ($partner->image)
                        <label class="form-label">الصورة الحالية</label>
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('storage/images/' . $partner->image) }}" alt="Current Image"
                                class="rounded-circle avatar-lg cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $partner->image) }}" />
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <span class="material-symbols-rounded fs-6 me-1">save</span> تحديث
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade custom-rtl" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
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
