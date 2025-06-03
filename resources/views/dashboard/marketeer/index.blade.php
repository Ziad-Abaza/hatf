@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Header -->
        <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> المسوقين</span></h4>
    <!-- Button for Adding New Marketeer -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.marketeer.create') }}" class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إضافة مسوق جديد
        </a>
    </div>

    <!-- Desktop Table -->
    <div class="card d-none d-md-block">
        <div class="">
            <table class="table table-hover custom-rtl">
                <thead class="table-light sticky-header text-center">
                    <tr>
                        <th>ترتيب</th>
                        <th>اسم المسوّق</th>
                        <th>هاتف المسوّق</th>
                        <th>رمز المسوّق</th>
                        <th>عدد العملاء</th>
                        <th>رابط المسوّق</th>
                        <th>نسبة المسوق</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php $counter = 1; @endphp
                    @foreach ($marketeers as $marketeer)
                    <tr class="searchable-item">
                        <td>{{ $counter++ }}</td>
                        <td>{{ $marketeer->name }}</td>
                        <td>{{ $marketeer->phone }}</td>
                        <td><span class="fw-medium">{{ $marketeer->code }}</span></td>
                        <td><span class="fw-medium">{{ $marketeer->customers->count() }}</span></td>
                        <td>
                            <a href="{{ url('/') }}?marketeer={{ $marketeer->code }}" target="_blank"
                                class="text-primary">
                                رابط المسوّق
                            </a>
                        </td>
                        <td>
                            <span class="badge bg-label-primary text-primary">{{ $marketeer->commission_rate }}%</span>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                    <span class="material-symbols-rounded fs-6">more_vert</span>
                                </button>
                                <div class="dropdown-menu text-end">
                                    <a class="dropdown-item" href="{{ route('dashboard.customer.index') }}?marketeer={{ $marketeer->code }}">
                                        <span class="material-symbols-rounded fs-6 me-1">visibility</span> عرض العملاء
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.customer.create') }}">
                                        <span class="material-symbols-rounded fs-6 me-1">add</span> إضافة عميل
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.marketeer.commissions', $marketeer->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">visibility</span> العمولة المستحقة                                </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.marketeer.edit', $marketeer->id) }}">
                                        <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل
                                    </a>
                                    <a class="dropdown-item" href="{{ route('dashboard.marketeer.delete', $marketeer->id) }}"
                                        onclick="return confirm('هل أنت متأكد من حذف هذا المسوّق؟')">
                                        <span class="material-symbols-rounded fs-6 me-1">delete</span> حذف
                                    </a>
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
        @foreach ($marketeers as $marketeer)
        <div class="card mb-3 searchable-item">
            <div class="card-body custom-rtl">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h6 class="mb-1">#: {{ $counter++ }}</h6>
                        <h5 class="mb-1">{{ $marketeer->name }}</h5>
                        <p class="mb-1">هاتف المسوّق: {{ $marketeer->phone }}</p>
                        <p class="mb-1">رمز المسوّق: <strong>{{ $marketeer->code }}</strong></p>
                        <p class="mb-1">عدد العملاء: <strong>{{ $marketeer->customers->count() }}</strong></p>
                        <a href="{{ url('/') }}?marketeer={{ $marketeer->code }}" target="_blank" class="text-primary">
                            رابط المسوّق
                        </a>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-start pt-2">
                    <a href="{{ route('dashboard.customer.index') }}?marketeer={{ $marketeer->code }}"
                        class="btn btn-icon btn-sm btn-outline-primary">
                        <span class="material-symbols-rounded fs-6">visibility</span>
                    </a>
                    <a href="{{ route('dashboard.customer.create') }}" class="btn btn-icon btn-sm btn-outline-success">
                        <span class="material-symbols-rounded fs-6">add</span>
                    </a>
                    <a href="{{ route('dashboard.marketeer.edit', $marketeer->id) }}" class="btn btn-icon btn-sm btn-outline-warning">
                        <span class="material-symbols-rounded fs-6">edit</span>
                    </a>
                    <a href="{{ route('dashboard.marketeer.delete', $marketeer->id) }}" class="btn btn-icon btn-sm btn-outline-danger"
                        onclick="return confirm('هل أنت متأكد من حذف هذا المسوّق؟')">
                        <span class="material-symbols-rounded fs-6">delete</span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
