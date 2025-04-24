@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y mt-5">
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> المشرفين</span></h4>
    <div class="d-flex justify-content-end align-items-center flex-wrap mb-4">
        <a href="{{ route('dashboard.admin.create') }}" class="btn btn-primary btn-sm mb-2">
            <i class="ti ti-plus me-1"></i> إضافة مشرف
        </a>
    </div>

    <!-- Desktop Table -->
    <div class="card d-none d-md-block">
        <div class="table-responsive">
            <table class="table table-hover custom-rtl">
                <thead class="table-light">
                    <tr>
                        <th width="25%">الإسم</th>
                        <th width="25%">الإيميل</th>
                        <th width="20%">الهاتف</th>
                        <th width="15%">الحالة</th>
                        <th width="15%">العمليات</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($admins as $admin)
                    <tr class="searchable-item">
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar avatar-sm me-2">
                                    <img src="{{ asset('backend/assets/img/avatars/5.png') }}" alt="Avatar"
                                        class="rounded-circle">
                                </div>
                                <span class="fw-medium">{{ $admin->name }}</span>
                            </div>
                        </td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->phone }}</td>
                        <td>
                            <span class="badge bg-label-success text-success fs-4">نشط</span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('dashboard.admin.edit', $admin->id) }}"
                                    class="btn btn-sm btn-outline-primary">
                                    <i class="material-symbols-rounded fs-4">edit</i>
                                </a>
                                <a href="{{ route('dashboard.admin.delete', $admin->id) }}"
                                    class="btn btn-sm btn-outline-danger">
                                    <i class="material-symbols-rounded fs-4">delete</i>
                                </a>
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
        @foreach ($admins as $admin)
        <div class="card mb-3">
            <div class="card-body searchable-item">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm me-2">
                            <img src="{{ asset('backend/assets/img/avatars/5.png') }}" alt="Avatar"
                                class="rounded-circle">
                        </div>
                        <div>
                            <h6 class="mb-0">{{ $admin->name }}</h6>
                            <small class="text-muted">{{ $admin->email }}</small>
                        </div>
                    </div>
                    <span class="badge bg-label-success m-0 text-success fs-5">نشط</span>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-6">
                        <div class="text-muted small">الهاتف</div>
                        <div>{{ $admin->phone }}</div>
                    </div>
                </div>

                <div class="d-flex gap-2 justify-content-end">
                    <a href="{{ route('dashboard.admin.edit', $admin->id) }}"
                        class="btn btn-sm btn-outline-primary">
                        <i class="material-symbols-rounded fs-4">edit</i>
                    </a>
                    <a href="{{ route('dashboard.admin.delete', $admin->id) }}"
                        class="btn btn-sm btn-outline-danger">
                        <i class="material-symbols-rounded fs-4">delete</i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
