@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> المشرفون</h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.admin.create') }}" class="btn btn-primary" style="color: #fff">
                    إضافة مشرف
                </a>
            </div>
        </div>

        <!-- Hoverable Table rows -->
        <div class="card">
            {{-- <h5 class="card-header">Hoverable rows</h5> --}}
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>الإسم</th>
                            <th>الإيميل</th>
                            <th>الهاتف</th>
                            {{-- <th>image</th> --}}
                            <th>الحالة</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @foreach ($admins as $admin)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ $admin->name }}</span>
                                </td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->phone }}</td>
                                {{-- <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                            <img src="{{ asset('backend/assets/img/avatars/5.png') }}" alt="Avatar"
                                                class="rounded-circle" />
                                        </li>
                                    </ul>
                                </td> --}}
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('dashboard.admin.edit', $admin->id) }}"><i
                                                    class="ti ti-pencil me-1"></i> تعديل</a>
                                            <a class="dropdown-item" href="{{ route('dashboard.admin.delete', $admin->id) }}"><i
                                                    class="ti ti-trash me-1"></i>
                                                حذف</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Hoverable Table rows -->

    </div>
@endsection
