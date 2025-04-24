@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y min-height-600">
    <!-- Header -->
        <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> الخدمات</span></h4>
    <!-- Button for adding new service -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.service.create') }}" class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إضافة خدمة
        </a>
    </div>

    <!-- Desktop Table -->
    <div class="card d-none d-md-block">
        <div class="custom-scrollbar">
            <table class="table table-hover custom-rtl">
                <thead class="table-light sticky-header text-center">
                    <tr>
                        <th>ترتيب</th>
                        <th>إسم الخدمة</th>
                        <th>الوصف</th>
                        <th>صورة الخدمة</th>
                        <th>صورة رقم الخدمة</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php $counter = 1; @endphp
                    @foreach ($services as $service)
                    <tr class="searchable-item">
                        <td>{{ $counter++ }}</td>
                        <td>{{ $service->name }}</td>
                        <td>
                            {{-- <span class="description-preview">{{ Str::limit($service->desc, 30, '...') }}</span> --}}
                            <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                                data-bs-target="#descriptionModal" data-description="{{ $service->desc }}">
                                {{ Str::limit($service->desc, 30, '...') }}
                            </a>
                        </td>
                        <td>
                            <img src="{{ asset('storage/images/' . $service->image) }}" alt="Service Image"
                                class="rounded-circle avatar-sm cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $service->image) }}" />
                        </td>
                        <td>
                            <img src="{{ asset('storage/images/' . $service->icon_number) }}" alt="Icon Number"
                                class="rounded-circle avatar-sm cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $service->icon_number) }}" />
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                    <span class="material-symbols-rounded fs-6">more_vert</span>
                                </button>
                                <div class="dropdown-menu text-end">
                                    <a class="dropdown-item" href="{{ route('dashboard.service_banners.index', $service->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل بانر
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.reviews.index', $service->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">rate_review</span> إضافة مراجعة
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.questions.index', $service->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">quiz</span> إضافة سؤال
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.sub_services.index', $service->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">add_box</span> إضافة خدمة فرعية
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.advantages.index', $service->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">star</span> إضافة ميزة
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.features.index', $service->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">list_alt</span> إضافة سمة
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.service.edit', $service->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.service.sectshion.index', $service->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">view_list</span> سكشن
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.service.delete', $service->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">delete</span> حذف
                                    </a>
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
        @php $counter = 1; @endphp
        @foreach ($services as $service)
        <div class="card mb-3 searchable-item">
            <div class="card-body custom-rtl">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h6 class="mb-1">#: {{ $counter++ }}</h6>
                        <h5 class="mb-1">{{ $service->name }}</h5>
                        <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                            data-bs-target="#descriptionModal" data-description="{{ $service->desc }}">
                            {{ Str::limit($service->desc, 70, '...') }}
                        </a>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-6 text-center">
                        <img src="{{ asset('storage/images/' . $service->image) }}" alt="Service Image"
                            class=" w-100 h-75 mx-auto cursor-pointer" data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-image="{{ asset('storage/images/' . $service->image) }}" />
                        <small class="d-block mt-1">صورة الخدمة</small>
                    </div>
                    <div class="col-6 text-center">
                        <img src="{{ asset('storage/images/' . $service->icon_number) }}" alt="Icon Number"
                            class="w-100 h-75 mx-auto cursor-pointer" data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-image="{{ asset('storage/images/' . $service->icon_number) }}" />
                        <small class="d-block mt-1">صورة رقم الخدمة</small>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-start pt-2">
                    <a href="{{ route('dashboard.service.edit', $service->id) }}"
                        class="btn btn-icon btn-sm btn-outline-primary">
                        <span class="material-symbols-rounded">edit</span>
                    </a>
                    <a href="{{ route('dashboard.service.delete', $service->id) }}"
                        class="btn btn-icon btn-sm btn-outline-danger">
                        <span class="material-symbols-rounded">delete</span>
                    </a>
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
