@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y min-height-600">
    <!-- Header -->
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم / الخدمات /</span> مراجعات</h4>

    <!-- Button for adding new review -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.reviews.create') }}" class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إنشاء مراجعة
        </a>
    </div>

    <!-- Desktop Table -->
    <div class="card d-none d-md-block">
        <div class="custom-scrollbar">
            <table class="table table-hover custom-rtl">
                <thead class="table-light sticky-header text-center">
                    <tr>
                        <th>الاسم</th>
                        <th>المسمى الوظيفي</th>
                        <th>المحتوى</th>
                        <th>التقييم</th>
                        <th>الخدمة</th>
                        <th>الصورة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($reviews as $review)
                    <tr class="searchable-item">
                        <!-- Name -->
                        <td>{{ Str::limit($review->name, 15, '...') }}</td>

                        <!-- Job Title -->
                        <td>{{ Str::limit($review->job_title, 15, '...') }}</td>

                        <!-- Content -->
                        <td>
                            <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                                data-bs-target="#descriptionModal" data-description="{{ $review->content }}">
                                {{ Str::limit($review->content, 30, '...') }}
                            </a>
                        </td>

                        <!-- Rating -->
                        <td>
                            <span class="badge bg-warning text-dark p-2 fs-6">
                                ⭐ {{ $review->rating }} / 5
                            </span>
                        </td>

                        <!-- Service -->
                        <td>
                            <span class="badge bg-info text-white p-2">
                                {{ $review->service->name ?? 'الكل' }}
                            </span>
                        </td>

                        <!-- Profile Image -->
                        <td>
                            <img src="{{ $review->getFirstMediaUrl('reviews') ?: asset('default-image.jpg') }}"
                                alt="Review Image" class="rounded-circle avatar-sm cursor-pointer"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-image="{{ $review->getFirstMediaUrl('reviews') ?: asset('default-image.jpg') }}" />
                        </td>

                        <!-- Actions -->
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                    <span class="material-symbols-rounded fs-6">more_vert</span>
                                </button>
                                <div class="dropdown-menu text-end">
                                    <a class="dropdown-item" href="{{ route('dashboard.reviews.edit', $review->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل
                                    </a>
                                    <form action="{{ route('dashboard.reviews.destroy', $review->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item"
                                            onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">
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
        @foreach ($reviews as $review)
        <div class="card mb-3 searchable-item">
            <div class="card-body custom-rtl">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h6 class="mb-1">{{ $review->name }}</h6>
                        <small class="text-secondary">{{ $review->job_title }}</small>
                        <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                            data-bs-target="#descriptionModal" data-description="{{ $review->content }}">
                            {{ Str::limit($review->content, 70, '...') }}
                        </a>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-6 text-center">
                        <span class="badge bg-warning text-dark p-2 fs-6">
                            ⭐ {{ $review->rating }} / 5
                        </span>
                    </div>
                    <div class="col-6 text-center">
                        <span class="badge bg-info text-white p-2">
                            {{ $review->service->name ?? 'الكل' }}
                        </span>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-12 text-center">
                        <img src="{{ $review->getFirstMediaUrl('reviews') ?: asset('default-image.jpg') }}"
                            alt="Review Image" class="w-100 h-75 mx-auto cursor-pointer" data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-image="{{ $review->getFirstMediaUrl('reviews') ?: asset('default-image.jpg') }}" />
                        <small class="d-block mt-1">صورة المراجعة</small>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-start pt-2">
                    <a href="{{ route('dashboard.reviews.edit', $review->id) }}"
                        class="btn btn-icon btn-sm btn-outline-primary">
                        <span class="material-symbols-rounded">edit</span>
                    </a>
                    <form action="{{ route('dashboard.reviews.destroy', $review->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon btn-sm btn-outline-danger"
                            onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">
                            <span class="material-symbols-rounded">delete</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $reviews->links() }}
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
