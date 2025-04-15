@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y" dir="rtl">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> العملاء</h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.customer.create') }}" class="btn btn-primary" style="color: #fff">
                    إضافة عميل
                </a>
            </div>
        </div>

        <!-- Hoverable Table rows -->
        <div class="card">
            {{-- <h5 class="card-header">Hoverable rows</h5> --}}
            <div class="table-responsive text-nowrap">
                <table class="table table-hover text-center">

                    <thead>
                        <tr>
                            <th>ترتيب</th>
                            <th>اسم العميل</th>
                            <th>هاتف العميل</th>
                            <th>بريد العميل</th>
                            <th>الخدمة</th>
                            <th>تفاصيل الخدمة</th>
                            {{-- <th>العمليات</th> --}}
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @foreach ($customers as $customer)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ $customer->id }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ $customer->name }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ $customer->phone }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ $customer->email }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ $customer->service }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ Str::limit($customer->desc, 15, '...') }}</span>
                                </td>
                                {{-- <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.customer.edit', $customer->id) }}"><i
                                                    class="ti ti-pencil me-1"></i> تعديل</a>
                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.customer.delete', $customer->id) }}"><i
                                                    class="ti ti-trash me-1"></i>
                                                حذف</a>
                                        </div>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Hoverable Table rows -->
    </div>
@endsection
