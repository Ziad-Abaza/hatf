@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-2" dir="rtl">
    <!-- Header -->
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> خلفيات الموقع</span></h4>
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">بيانات الأقسام</h5>
            <a href="{{ route('dashboard.section.edit', $section->id ?? 0) }}" class="btn btn-primary">
                <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل
            </a>
        </div>
    </div>

    <!-- Section Data -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($section)
                    <div class="row g-3 searchable-item">
                        <!-- Header Image -->
                        <div class="col-12 col-md-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset('storage/images/' . $section->header) }}" alt="Header Image"
                                    class="card-img-top rounded cursor-pointer" data-bs-toggle="modal"
                                    data-bs-target="#imageModal"
                                    data-image="{{ asset('storage/images/' . $section->header) }}" />
                                <div class="card-body text-center">
                                    <h6 class="text-muted fw-bold">صورة الهيدر</h6>
                                </div>
                            </div>
                        </div>

                        <!-- About Image -->
                        <div class="col-12 col-md-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset('storage/images/' . $section->about) }}" alt="About Image"
                                    class="card-img-top rounded cursor-pointer" data-bs-toggle="modal"
                                    data-bs-target="#imageModal"
                                    data-image="{{ asset('storage/images/' . $section->about) }}" />
                                <div class="card-body text-center">
                                    <h6 class="text-muted fw-bold">صورة عن الشركة</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Services Image -->
                        <div class="col-12 col-md-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset('storage/images/' . $section->services) }}" alt="Services Image"
                                    class="card-img-top rounded cursor-pointer" data-bs-toggle="modal"
                                    data-bs-target="#imageModal"
                                    data-image="{{ asset('storage/images/' . $section->services) }}" />
                                <div class="card-body text-center">
                                    <h6 class="text-muted fw-bold">صورة الخدمات</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Business Show Image -->
                        <div class="col-12 col-md-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset('storage/images/' . $section->business_show) }}"
                                    alt="Business Show Image" class="card-img-top rounded cursor-pointer"
                                    data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('storage/images/' . $section->business_show) }}" />
                                <div class="card-body text-center">
                                    <h6 class="text-muted fw-bold">صورة عرض الأعمال</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Success Partners Image -->
                        <div class="col-12 col-md-4">
                            <div class="card shadow-sm h-100">
                                <img src="{{ asset('storage/images/' . $section->success_partners) }}"
                                    alt="Success Partners Image" class="card-img-top rounded cursor-pointer"
                                    data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-image="{{ asset('storage/images/' . $section->success_partners) }}" />
                                <div class="card-body text-center">
                                    <h6 class="text-muted fw-bold">صورة الشركاء الناجحين</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="alert alert-warning text-center" role="alert">
                        لا توجد بيانات للأقسام. يمكنك إضافة البيانات الآن.
                    </div>
                    @endif
                </div>
            </div>
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
    .card-img-top {
        height: 260px;
        object-fit: cover;
        border-radius: 10px;
    }

    .alert-warning {
        border-radius: 10px;
        font-size: 1rem;
    }
</style>
