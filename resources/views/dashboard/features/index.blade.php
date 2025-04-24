@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<!-- Header -->
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> السمات</span></h4>
    <!-- Button for adding new feature -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.features.create') }}" class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إنشاء سمة
        </a>
    </div>

    <!-- Desktop Table -->
    <div class="card d-none d-md-block">
        <div class="custom-scrollbar">
            <table class="table table-hover custom-rtl">
                <thead class="table-light sticky-header text-center">
                    <tr>
                        <th>العنوان</th>
                        <th>المحتوى</th>
                        <th>الصورة</th>
                        <th>الخدمة</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($features as $feature)
                    <tr class="searchable-item">
                        <td>
                            <a href="#" class="title-preview show-full-description" data-bs-toggle="modal"
                                data-bs-target="#descriptionModal" data-description="{{ $feature->title }}">
                                {{ Str::limit($feature->title, 12, '...') }}
                            </a>
                        </td>
                        <td>
                            <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                                data-bs-target="#descriptionModal" data-description="{{ $feature->description }}">
                                {{ Str::limit($feature->description, 12, '...') }}
                            </a>
                        </td>
                        <td>
                            <img src="{{ $feature->getFirstMediaUrl('features') ?: asset('default-image.jpg') }}"
                                alt="Feature Image" class="rounded-circle avatar-sm cursor-pointer"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ $feature->getFirstMediaUrl('features') ?: asset('default-image.jpg') }}" />
                        </td>
                        <td>
                            <span class="badge bg-info text-white p-2">
                                {{ $feature->service->name ?? 'الكل' }}
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                    <span class="material-symbols-rounded fs-6">more_vert</span>
                                </button>
                                <div class="dropdown-menu text-end">
                                    <a class="dropdown-item"
                                        href="{{ route('dashboard.features.edit', $feature->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل
                                    </a>
                                    <form action="{{ route('dashboard.features.destroy', $feature->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item"
                                            onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه السمة؟');">
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
        @foreach ($features as $feature)
        <div class="card mb-3 searchable-item">
            <div class="card-body custom-rtl">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h6 class="mb-1">العنوان:</h6>
                        <a href="#" class="title-preview show-full-description" data-bs-toggle="modal"
                            data-bs-target="#descriptionModal" data-description="{{ $feature->title }}">
                            {{ Str::limit($feature->title, 20, '...') }}
                        </a>
                    </div>
                    <div class="col-12">
                        <h6 class="mb-1">المحتوى:</h6>
                        <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                            data-bs-target="#descriptionModal" data-description="{{ $feature->description }}">
                            {{ Str::limit($feature->description, 50, '...') }}
                        </a>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-6 text-center">
                        <img src="{{ $feature->getFirstMediaUrl('features') ?: asset('default-image.jpg') }}"
                            alt="Feature Image" class="w-100 h-75 mx-auto cursor-pointer" data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-image="{{ $feature->getFirstMediaUrl('features') ?: asset('default-image.jpg') }}" />
                        <small class="d-block mt-1">الصورة</small>
                    </div>
                    <div class="col-6 text-center">
                        <span class="badge bg-info text-white p-2 w-100">
                            {{ $feature->service->name ?? 'الكل' }}
                        </span>
                        <small class="d-block mt-1">الخدمة</small>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-start pt-2">
                    <a href="{{ route('dashboard.features.edit', $feature->id) }}"
                        class="btn btn-icon btn-sm btn-outline-primary">
                        <span class="material-symbols-rounded">edit</span>
                    </a>
                    <form action="{{ route('dashboard.features.destroy', $feature->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon btn-sm btn-outline-danger"
                            onclick="return confirm('هل أنت متأكد أنك تريد حذف هذه السمة؟');">
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
                    <h5 class="modal-title" id="descriptionModalLabel">الوصف الكامل</h5>
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
