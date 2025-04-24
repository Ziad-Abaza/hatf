@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y" dir="rtl">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> المسوق</h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.marketeer.create') }}" class="btn btn-primary" style="color: #fff">
                    إضافة مسوق
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
                            <th>اسم المسوق</th>
                            <th>هاتف المسوق</th>
                            <th>رمز المسوق</th>
                            <th>عدد العملاء</th>
                            <th>رابط المسوق</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @foreach ($marketeers as $marketeer)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ $marketeer->id }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ $marketeer->name }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ $marketeer->phone }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ $marketeer->code }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ $marketeer->customers->count() }}</span>
                                </td>
                                <td>
                                    {{-- <span class="fw-medium">{{ $marketeer->code }}</span> --}}
                                    <a href="{{ url('/') }}?marketeer={{ $marketeer->code }}" target="_blank"> رابط
                                        المسوق</a>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.customer.index') }}?marketeer={{ $marketeer->code }}">
                                                <i class="fa-solid fa-eye"></i>
                                                {{-- <i class="ti ti-pencil me-1"></i> --}}
                                                عرض العملاء</a>
                                            <a class="dropdown-item" href="{{ route('dashboard.customer.create') }}">
                                                {{-- <i class="ti ti-pencil me-1"></i> --}}
                                                <i class="fa-solid fa-plus"></i>
                                                اضافة عميل</a>
                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.marketeer.edit', $marketeer->id) }}"><i
                                                    class="ti ti-pencil me-1"></i> تعديل</a>
                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.marketeer.delete', $marketeer->id) }}"><i
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
