@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم / الخدمات /</span> سكاشن فرعية</h4>

    <!-- Button for adding new sub-section -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.service.sectshion.create', $service->id) }}"
            class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إنشاء سكشن فرعي
        </a>
    </div>

    <!-- Desktop Table -->
    <div class="card d-none d-md-block">
        <div class="custom-scrollbar">
            <table class="table table-hover custom-rtl">
                <thead class="table-light sticky-header text-center">
                    <tr>
                        <th>العنوان</th>
                        <th>الصورة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($subServices as $subService)
                    <tr class="searchable-item">
                        <td>
                            <a href="#" class="title-preview show-full-description" data-bs-toggle="modal"
                                data-bs-target="#descriptionModal" data-description="{{ $subService->title }}">
                                {{ Str::limit($subService->title, 35, '...') }}
                            </a>
                        </td>
                        <td>
                            <img src="{{ $subService->getFirstMediaUrl('services_sectshions') ?: asset('default-image.jpg') }}"
                                alt="Sub-Section Image" class="rounded-circle avatar-sm cursor-pointer"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ $subService->getFirstMediaUrl('services_sectshions') ?: asset('default-image.jpg') }}" />
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                    <span class="material-symbols-rounded fs-6">more_vert</span>
                                </button>
                                <div class="dropdown-menu text-end">
                                    <a class="dropdown-item"
                                        href="{{ route('dashboard.service.sectshion.edit', $subService->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل
                                    </a>
                                    <form action="{{ route('dashboard.service.sectshion.destroy', $subService->id) }}"
                                        method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item"
                                            onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه السكشن الفرعية؟');">
                                            <span class="material-symbols-rounded fs-6 me-1">delete</span> حذف
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Mobile Cards -->
    <div class="d-block d-md-none">
        @foreach ($subServices as $subService)
        <div class="card mb-3 searchable-item">
            <div class="card-body custom-rtl">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h6 class="mb-1">العنوان:</h6>
                        <a href="#" class="title-preview show-full-description" data-bs-toggle="modal"
                            data-bs-target="#descriptionModal" data-description="{{ $subService->title }}">
                            {{ Str::limit($subService->title, 20, '...') }}
                        </a>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-6 text-center m-auto">
                        <img src="{{ $subService->getFirstMediaUrl('services_sectshions') ?: asset('default-image.jpg') }}"
                            alt="Sub-Section Image" class="w-100 h-75 mx-auto cursor-pointer" data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-image="{{ $subService->getFirstMediaUrl('services_sectshions') ?: asset('default-image.jpg') }}" />
                        <small class="d-block mt-1">الصورة</small>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-start pt-2">
                    <a href="{{ route('dashboard.service.sectshion.edit', $subService->id) }}"
                        class="btn btn-icon btn-sm btn-outline-primary">
                        <span class="material-symbols-rounded">edit</span>
                    </a>
                    <form action="{{ route('dashboard.service.sectshion.destroy', $subService->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon btn-sm btn-outline-danger"
                            onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه السكشن الفرعية؟');">
                            <span class="material-symbols-rounded">delete</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Description Modal -->
    <div class="modal fade custom-rtl" id="descriptionModal" tabindex="-1" aria-labelledby="descriptionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h5 class="modal-title" id="descriptionModalLabel">العنوان الكامل</h5>
                    <button type="button" class="btn btn-close m-0" data-bs-dismiss="modal" aria-label="Close">
                        <i class="material-symbols-rounded fs-4 text-dark ms-2">close</i>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="fullDescription"></p>
                </div>
            </div>
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
