@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y min-height-600">
    <!-- Header -->
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم / الخدمات /</span> المزايا</h4>

    <!-- Button for adding new advantage -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.advantages.create') }}" class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إنشاء ميزة
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
                        <th>الحالة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($advantages as $advantage)
                    <tr class="searchable-item">
                        <!-- Title -->
                        <td>
                            <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                                data-bs-target="#descriptionModal" data-description="{{ $advantage->title }}">
                                {{ Str::limit($advantage->title, 30, '...') }}
                            </a>
                        </td>

                        <!-- Description -->
                        <td>
                            <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                                data-bs-target="#descriptionModal" data-description="{{ $advantage->description }}">
                                {{ Str::limit($advantage->description, 30, '...') }}
                            </a>
                        </td>

                        <!-- Status -->
                        <td>
                            <span
                                class="badge bg-{{ $advantage->status == 'active' ? 'success' : 'danger' }} text-white p-2">
                                {{ $advantage->status == 'active' ? 'نشط' : 'غير نشط' }}
                            </span>
                        </td>

                        <!-- Actions -->
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                    <span class="material-symbols-rounded fs-6">more_vert</span>
                                </button>
                                <div class="dropdown-menu text-end">
                                    <a class="dropdown-item"
                                        href="{{ route('dashboard.advantages.edit', $advantage->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل
                                    </a>
                                    <form action="{{ route('dashboard.advantages.destroy', $advantage->id) }}"
                                        method="POST" style="display:inline;">
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
        @foreach ($advantages as $advantage)
        <div class="card mb-3 searchable-item">
            <div class="card-body custom-rtl">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h5 class="mb-1">العنوان:</h5>
                        <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                            data-bs-target="#descriptionModal" data-description="{{ $advantage->title }}">
                            {{ Str::limit($advantage->title, 70, '...') }}
                        </a>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h6 class="mb-1">المحتوى:</h6>
                        <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                            data-bs-target="#descriptionModal" data-description="{{ $advantage->description }}">
                            {{ Str::limit($advantage->description, 70, '...') }}
                        </a>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h6 class="mb-1">الحالة:</h6>
                        <span
                            class="badge bg-{{ $advantage->status == 'active' ? 'success' : 'danger' }} text-white p-2">
                            {{ $advantage->status == 'active' ? 'نشط' : 'غير نشط' }}
                        </span>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-start pt-2">
                    <a href="{{ route('dashboard.advantages.edit', $advantage->id) }}"
                        class="btn btn-icon btn-sm btn-outline-primary">
                        <span class="material-symbols-rounded">edit</span>
                    </a>
                    <form action="{{ route('dashboard.advantages.destroy', $advantage->id) }}" method="POST"
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
        {{ $advantages->links() }}
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
</div>
@endsection
