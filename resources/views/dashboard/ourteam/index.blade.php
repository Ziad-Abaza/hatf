@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y min-height-600">
    <!-- Header -->
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> فريقنا</h4>

    <!-- Button for adding new team member -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.our-team.create') }}" class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إضافة عضو جديد
        </a>
    </div>

    <!-- Desktop Table -->
    <div class="card d-none d-md-block">
        <div class="custom-scrollbar">
            <table class="table table-hover custom-rtl">
                <thead class="table-light sticky-header text-center">
                    <tr>
                        <th>ID</th>
                        <th>الاسم</th>
                        <th>المسمى الوظيفي</th>
                        <th>الصورة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($ourTeams as $ourTeam)
                    <tr class="searchable-item">
                        <!-- ID -->
                        <td>{{ $ourTeam->id }}</td>

                        <!-- Name -->
                        <td>
                            <span class="fw-medium">{{ $ourTeam->name }}</span>
                        </td>

                        <!-- Job Title -->
                        <td>
                            <span class="fw-medium">{{ $ourTeam->job }}</span>
                        </td>

                        <!-- Image -->
                        <td>
                            <img src="{{ asset('storage/images/' . $ourTeam->image) }}" alt="Team Member Image"
                                class="rounded-circle avatar-sm cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                data-image="{{ asset('storage/images/' . $ourTeam->image) }}" />
                        </td>

                        <!-- Actions -->
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                    <span class="material-symbols-rounded fs-6">more_vert</span>
                                </button>
                                <div class="dropdown-menu text-end">
                                    <a class="dropdown-item"
                                        href="{{ route('dashboard.our-team.edit', $ourTeam->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل
                                    </a>
                                    <form action="{{ route('dashboard.our-team.delete', $ourTeam->id) }}" method="POST"
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
        @foreach ($ourTeams as $ourTeam)
        <div class="card mb-3 searchable-item">
            <div class="card-body custom-rtl">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h5 class="mb-1">ID: {{ $ourTeam->id }}</h5>
                        <h6 class="mb-1">الاسم: {{ $ourTeam->name }}</h6>
                        <p class="mb-1">المسمى الوظيفي: {{ $ourTeam->job }}</p>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-12 text-center">
                        <img src="{{ asset('storage/images/' . $ourTeam->image) }}" alt="Team Member Image"
                            class="w-100 h-75 mx-auto cursor-pointer" data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-image="{{ asset('storage/images/' . $ourTeam->image) }}" />
                        <small class="d-block mt-1">صورة العضو</small>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-start pt-2">
                    <a href="{{ route('dashboard.our-team.edit', $ourTeam->id) }}"
                        class="btn btn-icon btn-sm btn-outline-primary">
                        <span class="material-symbols-rounded">edit</span>
                    </a>
                    <form action="{{ route('dashboard.our-team.delete', $ourTeam->id) }}" method="POST"
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
