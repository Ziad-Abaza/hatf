@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> الخدمات</h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.service.create') }}" class="btn btn-primary" style="color: #fff">
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
                            <th>إسم الخدمة</th>
                            <th>الوصف</th>
                            <th>صورة الخدمة</th>
                            <th>صورة رقم الخدمة</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @foreach ($services as $service)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ $service->id }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ $service->name }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ Str::limit($service->desc, 15, '...') }}</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                            <img src="{{ asset('storage/images/' . $service->image) }}" alt="Avatar"
                                                class="rounded-circle" />
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                            <img src="{{ asset('storage/images/' . $service->icon_number) }}" alt="Avatar"
                                                class="rounded-circle" />
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

                                            <a class="dropdown-item"
                                            href="{{ route('dashboard.service_banners.index', $service->id) }}"><i
                                                class="ti ti-pencil me-1"></i>تعديل بانر</a>

                                            <a class="dropdown-item"
                                            href="{{ route('dashboard.reviews.index', $service->id) }}"><i
                                                class="ti ti-pencil me-1"></i>اضافة مراجعة</a>
                                           

                                            <a class="dropdown-item"
                                            href="{{ route('dashboard.questions.index', $service->id) }}"><i
                                                class="ti ti-pencil me-1"></i>اضافة سؤال</a>
                                           
                                                <a class="dropdown-item"
                                            href="{{ route('dashboard.sub_services.index', $service->id) }}"><i
                                                class="ti ti-pencil me-1"></i> اضافة خدمة فرعية</a>

                                                
                                                <a class="dropdown-item"
                                            href="{{ route('dashboard.advantages.index', $service->id) }}"><i
                                                class="ti ti-pencil me-1"></i> اضافة ميزة</a>


                                                <a class="dropdown-item"
                                                href="{{ route('dashboard.features.index', $service->id) }}"><i
                                                    class="ti ti-pencil me-1"></i> اضافة سمة</a>

                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.service.edit', $service->id) }}"><i
                                                    class="ti ti-pencil me-1"></i> تعديل</a>

                                                    <a class="dropdown-item"
                                                    href="{{ route('dashboard.service.sectshion.index', $service->id) }}"><i
                                                        class="ti ti-pencil me-1"></i> سكشن</a>


                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.service.delete', $service->id) }}"><i
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
