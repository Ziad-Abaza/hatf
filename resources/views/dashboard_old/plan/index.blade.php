@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> الخدمات</h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.plan.create') }}" class="btn btn-primary" style="color: #fff">
                    إضافة خدمة
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
                            <th>ترتيب</th>
                            <th>صورة الخطة</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @foreach ($plans as $plan)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ $plan->id }}</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"
                                        style="height: 100px; width: 100px">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        style="height: 100px; width: 100px" class="avatar avatar-xs pull-up"
                                            title="Lilian Fuller">
                                            <img src="{{ asset('storage/images/' . $plan->image) }}" alt="Avatar"
                                                class="rounded-circle" width="100%" height="100%" />
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('dashboard.plan.edit', $plan->id) }}"><i
                                                    class="ti ti-pencil me-1"></i> تعديل</a>
                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.plan.delete', $plan->id) }}"><i
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
