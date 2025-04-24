@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Header -->
        <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> الباقات</span></h4>
    <!-- Button for Adding New Package -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.packages.create') }}" class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إضافة باقة جديدة
        </a>
    </div>

    <!-- Desktop Table -->
    <div class="card d-none d-md-block">
        <div class="custom-scrollbar">
            <table class="table table-hover custom-rtl">
                <thead class="table-light sticky-header text-center">
                    <tr>
                        <th>#</th>
                        <th>صورة الباقة</th>
                        <th>رقم الهاتف</th>
                        <th>الترتيب</th>
                        <th>حالة الباقة</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php $counter = 1; @endphp
                    @foreach ($packages as $package)
                    <tr class="searchable-item">
                        <td>{{ $counter++ }}</td>
                        <td>
                            <img src="{{ asset('storage/images/' . $package->image) }}" alt="Package Image"
                                class="rounded-circle avatar-sm cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $package->image) }}" />
                        </td>
                        <td>{{ $package->number }}</td>
                        <td>{{ $package->order }}</td>
                        <td>
                            @if ($package->availability === 'available')
                            <span class="badge bg-success">متاحة</span>
                            @elseif ($package->availability === 'soon')
                            <span class="badge bg-warning">قريبًا</span>
                            @else
                            <span class="badge bg-danger">غير متاحة</span>
                            @endif
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                    <span class="material-symbols-rounded fs-6">more_vert</span>
                                </button>
                                <div class="dropdown-menu text-end">
                                    <a class="dropdown-item"
                                        href="{{ route('dashboard.packages.edit', $package->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل
                                    </a>
                                    <form action="{{ route('dashboard.packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">
                                            <span class="material-symbols-rounded fs-6 me-1">delete</span> Delete
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
        @php $counter = 1; @endphp
        @foreach ($packages as $package)
        <div class="card mb-3 searchable-item">
            <div class="card-body custom-rtl">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h6 class="mb-1">#: {{ $counter++ }}</h6>
                        <h5 class="mb-1">رقم الهاتف: {{ $package->number }}</h5>
                        <h5 class="mb-1">الترتيب: {{ $package->order }}</h5>
                        <p class="mb-1">
                            حالة الباقة:
                            @if ($package->availability === 'available')
                            <span class="badge bg-success">متاحة</span>
                            @elseif ($package->availability === 'soon')
                            <span class="badge bg-warning">قريبًا</span>
                            @else
                            <span class="badge bg-danger">غير متاحة</span>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="row g-2 m-0">
                    <div class="col-12 text-center h-25 w-50 m-auto ">
                        <img src="{{ asset('storage/images/' . $package->image) }}" alt="Package Image"
                            class="w-100 h-100 mx-auto cursor-pointer rounded-5" data-bs-toggle="modal" data-bs-target="#imageModal"
                            data-image="{{ asset('storage/images/' . $package->image) }}" />
                        <small class="d-block mt-1">صورة الباقة</small>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-start pt-2">
                    <a href="{{ route('dashboard.packages.edit', $package->id) }}"
                        class="btn btn-icon btn-sm btn-outline-primary">
                        <span class="material-symbols-rounded">edit</span>
                    </a>
                    <form action="{{ route('dashboard.packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon btn-sm btn-outline-danger" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">
                            <span class="material-symbols-rounded">delete</span>
                        </button>
                    </form>
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
