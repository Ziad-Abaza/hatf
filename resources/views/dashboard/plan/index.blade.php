@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Header -->
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> الخطة</span></h4>
    <!-- Button for Adding New Plan -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.plan.create') }}" class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إضافة خطة جديدة
        </a>
    </div>

    <!-- Grid Layout for Plans -->
    <div class="row g-4">
        @foreach ($plans as $plan)
        <div class="col-md-6 col-lg-4 searchable-item">
            <div class="card h-100 shadow-sm transition-hover">
                <!-- Plan Image -->
                <img src="{{ asset('storage/images/' . $plan->image) }}" alt="Plan Image"
                    class="card-img-top img-fluid plan-image rounded-top" data-bs-toggle="modal"
                    data-bs-target="#imageModal" data-image="{{ asset('storage/images/' . $plan->image) }}"
                    style="height: 200px; object-fit: cover;" />

                <!-- Card Body -->
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-primary">خطة #{{ $plan->id }}</h5>
                        </div>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                <span class="material-symbols-rounded fs-6 text-secondary">more_vert</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end text-end">
                                <a class="dropdown-item d-flex align-items-center gap-2"
                                    href="{{ route('dashboard.plan.edit', $plan->id) }}">
                                    <span class="material-symbols-rounded fs-6">edit</span> تعديل
                                </a>
                                <a class="dropdown-item d-flex align-items-center gap-2"
                                    href="{{ route('dashboard.plan.delete', $plan->id) }}"
                                    onclick="return confirm('هل أنت متأكد من حذف هذه الخطة؟')">
                                    <span class="material-symbols-rounded fs-6">delete</span> حذف
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
