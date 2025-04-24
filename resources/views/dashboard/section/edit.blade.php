@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y" dir="rtl">
    <!-- Form Card -->
    <div class="card shadow border-0 my-5">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">تعديل خلفيات الموقع</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.section.update', $section->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <!-- Header Image -->
                    <div class="col-md-6">
                        <label for="formFile-header" class="form-label">الرئيسية</label>
                        <div class="input-group gap-2">
                            <input type="file" name="header" id="formFile-header"
                                class="custom-input form-control @error('header') is-invalid @enderror" />
                            @if ($section->header)
                            <img src="{{ asset('storage/images/' . $section->header) }}" alt="Header Image"
                                class="rounded-circle avatar-md ms-3 cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $section->header) }}" />
                            @endif
                            @error('header')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- About Image -->
                    <div class="col-md-6">
                        <label for="formFileabout" class="form-label">تعرف علينا</label>
                        <div class="input-group gap-2">
                            <input type="file" name="about" id="formFileabout"
                                class="custom-input form-control @error('about') is-invalid @enderror" />
                            @if ($section->about)
                            <img src="{{ asset('storage/images/' . $section->about) }}" alt="About Image"
                                class="rounded-circle avatar-md ms-3 cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $section->about) }}" />
                            @endif
                            @error('about')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Services Image -->
                    <div class="col-md-6">
                        <label for="formFileservices" class="form-label">خدمتنا</label>
                        <div class="input-group gap-2">
                            <input type="file" name="services" id="formFileservices"
                                class="custom-input form-control @error('services') is-invalid @enderror" />
                            @if ($section->services)
                            <img src="{{ asset('storage/images/' . $section->services) }}" alt="Services Image"
                                class="rounded-circle avatar-md ms-3 cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $section->services) }}" />
                            @endif
                            @error('services')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Business Show Image -->
                    <div class="col-md-6">
                        <label for="formFilebusiness_show" class="form-label">أعمالنا</label>
                        <div class="input-group gap-2">
                            <input type="file" name="business_show" id="formFilebusiness_show"
                                class="custom-input form-control @error('business_show') is-invalid @enderror" />
                            @if ($section->business_show)
                            <img src="{{ asset('storage/images/' . $section->business_show) }}"
                                alt="Business Show Image" class="rounded-circle avatar-md ms-3 cursor-pointer"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $section->business_show) }}" />
                            @endif
                            @error('business_show')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Success Partners Image -->
                    <div class="col-md-6">
                        <label for="formFilesuccess_partners" class="form-label">شركاء النجاح</label>
                        <div class="input-group gap-2">
                            <input type="file" name="success_partners" id="formFilesuccess_partners"
                                class="custom-input form-control @error('success_partners') is-invalid @enderror" />
                            @if ($section->success_partners)
                            <img src="{{ asset('storage/images/' . $section->success_partners) }}"
                                alt="Success Partners Image" class="rounded-circle avatar-md ms-3 cursor-pointer"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $section->success_partners) }}" />
                            @endif
                            @error('success_partners')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
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
@endsection

<style>
    .avatar-md {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
    }
</style>
