@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-2" dir="rtl">
<!-- Header -->
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> شركاء النجاح</span></h4>
    <!-- Button for Adding New Partner -->
    <div class="d-flex justify-content-start align-items-center mb-4">
        <a href="{{ route('dashboard.partner.create') }}" class="btn btn-primary rounded-pill">
            <i class="ti ti-plus me-1"></i> إضافة شريك نجاح
        </a>
    </div>

    <!-- Hoverable Table Rows -->
    <div class="card shadow-sm">
        <div class="custom-scrollbar">
            <table class="table table-hover align-middle text-nowrap">
                <thead class="table-light sticky-header">
                    <tr>
                        <th class="text-center">ترتيب</th>
                        <th class="text-center">صورة شريك النجاح</th>
                        <th class="text-center">العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @php $counter = 1; @endphp
                    @foreach ($partners as $partner)
                    <tr class="searchable-item">
                        <td class="text-center">{{ $counter++ }}</td>
                        <td class="text-center">
                            <img src="{{ asset('storage/images/' . $partner->image) }}" alt="Partner Image"
                                class="rounded-circle avatar-md cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $partner->image) }}" />
                        </td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                    <span class="material-symbols-rounded fs-6">more_vert</span>
                                </button>
                                <div class="dropdown-menu text-end">
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('dashboard.partner.edit', $partner->id) }}">
                                        <i class="fas fa-pencil-alt text-primary"></i> تعديل
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center gap-2"
                                        href="{{ route('dashboard.partner.delete', $partner->id) }}">
                                        <i class="fas fa-trash-alt text-danger"></i> حذف
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

<style>
    /* Responsive Design for Mobile */
    @media (max-width: 768px) {

        .table th,
        .table td {
            font-size: 14px;
            padding: 0.5rem;
        }
        .dropdown-menu {
            position: static;
            float: none;
        }
    }
</style>

