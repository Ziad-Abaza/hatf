@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Header -->
        <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> العملاء</span></h4>
    <!-- Button for Adding New Customer -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.customer.create') }}" class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إضافة عميل جديد
        </a>
    </div>

    <!-- Desktop Table -->
    <div class="card d-none d-md-block">
        <div class="custom-scrollbar">
            <table class="table table-hover custom-rtl">
                <thead class="table-light sticky-header text-center">
                    <tr>
                        <th>ترتيب</th>
                        <th>اسم العميل</th>
                        <th>هاتف العميل</th>
                        <th>بريد العميل</th>
                        <th>الخدمة</th>
                        <th>تفاصيل الخدمة</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php $counter = 1; @endphp
                    @foreach ($customers as $customer)
                    <tr class="searchable-item">
                        <td>{{ $counter++ }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->service }}</td>
                        <td>
                            <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                                data-bs-target="#descriptionModal" data-description="{{ $customer->desc }}">
                                {{ Str::limit($customer->desc, 20, '...') }}
                            </a>
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
        @foreach ($customers as $customer)
        <div class="card mb-3 searchable-item">
            <div class="card-body custom-rtl ">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h6 class="mb-1">#: {{ $counter++ }}</h6>
                        <h5 class="mb-1">{{ $customer->name }}</h5>
                        <p class="mb-1">هاتف العميل: {{ $customer->phone }}</p>
                        <p class="mb-1">بريد العميل: {{ $customer->email }}</p>
                        <p class="mb-1">الخدمة: <strong>{{ $customer->service }}</strong></p>
                        <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                            data-bs-target="#descriptionModal" data-description="{{ $customer->desc }}">
                            {{ Str::limit($customer->desc, 70, '...') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Description Modal -->
    <div class="modal fade custom-rtl" id="descriptionModal" tabindex="-1" aria-labelledby="descriptionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h5 class="modal-title" id="descriptionModalLabel">تفاصيل الخدمة</h5>
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
