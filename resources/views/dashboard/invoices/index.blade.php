@extends('dashboard.layout.main')

@section('content')
<div class="container-fluid py-2">
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> الفواتير</span></h4>
    <div class="row">
        <!-- إحصائيات جانبية -->
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 custom-rtl">
                <div class="card-header pb-0">
                    <h6>نظرة عامة على الفواتير</h6>
                    <p class="text-sm">
                        <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                        <span class="font-weight-bold">{{ $successfulPayments }}%</span> نجاح هذا الشهر
                    </p>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group p-0">
                        <li class="list-group-item border-0 px-0">
                            <div class="d-flex justify-content-between">
                                <span>إجمالي الفواتير</span>
                                <span class="text-dark font-weight-bold">{{ $totalInvoices }}</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="d-flex justify-content-between">
                                <span>إجمالي المبالغ</span>
                                <span class="text-dark font-weight-bold">${{ number_format($totalAmount, 2) }}</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="d-flex justify-content-between">
                                <span>الفواتير الناجحة</span>
                                <span class="text-success font-weight-bold">{{ $successfulPayments }}</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="d-flex justify-content-between">
                                <span>الفواتير الفاشلة أو  المعلقة</span>
                                <span class="text-danger font-weight-bold">{{ $failedPayments }}</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0 px-0">
                            <div class="d-flex justify-content-between">
                                <span>إجمالي المدفوعات</span>
                                <span class="text-dark font-weight-bold">${{ number_format($totalPaidAmount, 2)
                                    }}</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- إحصائيات شاملة -->
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card custom-rtl">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>الفواتير</h6>
                            <p class="text-sm mb-0">
                                <i class="fa fa-check text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold ms-1">{{ $totalInvoices }} فاتورة</span> خلال الفترة
                                المحددة
                            </p>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-start">
                            <a href="{{ route('dashboard.invoices.create') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i> إضافة فاتورة جديدة
                            </a>
                            <form action="{{ route('dashboard.invoices.index') }}" method="GET"
                                class="d-flex justify-content-end">
                                <input type="date" name="start_date" class="form-control form-control-sm me-2"
                                    value="{{ $startDate->format('Y-m-d') }}">
                                <input type="date" name="end_date" class="form-control form-control-sm me-2"
                                    value="{{ $endDate->format('Y-m-d') }}">
                                <button type="submit" class="btn mb-0 overflow-visible btn-primary badge badge-primary d-flex align-items-center"><i class="material-symbols-rounded mr-1" style="font-size: 1.8rem;">sync</i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    {{-- Start paginate --}}
                    <div class="d-flex justify-content-center my-4">
                        <nav aria-label="Page navigation" class="pagination-container">
                            <ul class="pagination pagination-sm m-0 p-0">
                                <!-- Previous Button -->
                                <li class="page-item {{ $latestInvoices->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link rounded-start"
                                        href="{{ $latestInvoices->onFirstPage() ? '#' : $latestInvoices->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->previousPageUrl() }}"
                                        aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>

                                <!-- Page Numbers -->
                                @php
                                $currentPage = $latestInvoices->currentPage();
                                $lastPage = $latestInvoices->lastPage();
                                $start = max(1, $currentPage - 1);
                                $end = min($lastPage, $currentPage + 1);
                                @endphp

                                @if ($start > 1)
                                <li class="page-item d-none d-sm-block">
                                    <a class="page-link"
                                        href="{{ $latestInvoices->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->url(1) }}">1</a>
                                </li>
                                @if ($start > 5)
                                <li class="page-item disabled d-none d-sm-block">
                                    <span class="page-link">...</span>
                                </li>
                                @endif
                                @endif

                                @for ($i = $start; $i <= $end; $i++) <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                                    <a class="page-link {{ $i == $currentPage ? 'bg-light border-dark-subtle' : '' }}"
                                        href="{{ $latestInvoices->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->url($i) }}">{{
                                        $i }}</a>
                                    </li>
                                    @endfor

                                    @if ($end < $lastPage) @if ($end < $lastPage - 1) <li class="page-item disabled d-none d-sm-block">
                                        <span class="page-link">...</span>
                                        </li>
                                        @endif
                                        <li class="page-item d-none d-sm-block">
                                            <a class="page-link"
                                                href="{{ $latestInvoices->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->url($lastPage) }}">{{
                                                $lastPage }}</a>
                                        </li>
                                        @endif

                                        <!-- Next Button -->
                                        <li class="page-item {{ $latestInvoices->hasMorePages() ? '' : 'disabled' }}">
                                            <a class="page-link rounded-end"
                                                href="{{ $latestInvoices->hasMorePages() ? $latestInvoices->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->nextPageUrl() : '#' }}"
                                                aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                            </ul>
                        </nav>
                    </div>
                    {{-- End paginate --}}
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0 m-auto" style="width: 95%;">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">رقم
                                        الفاتورة</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        الإجمالي</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        الحالة</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        تاريخ الإنشاء</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestInvoices as $invoice)
                                <tr data-invoice-id="{{ $invoice->id }}" class="invoice-row clickable searchable-item">
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $invoice->invoice_number }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">${{ number_format($invoice->amount, 2)
                                            }}</p>
                                    </td>
                                    <td >
                                        <span
                                            class="badge badge-sm {{ $invoice->status == 1 ? 'bg-gradient-success' : ($invoice->status == 0 ? 'bg-gradient-warning' : 'bg-gradient-danger') }}">
                                            {{ $invoice->status == 1 ? 'مدفوعة' : ($invoice->status == 0 ? 'معلقة' :
                                            'فاشلة') }}
                                        </span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{
                                            $invoice->created_at->format('d M Y') }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="#" class="btn btn-link text-secondary mb-0 toggle-details">
                                            <i class="fa fa-chevron-down text-xs"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- تفاصيل الفاتورة -->
                                <tr class="invoice-details d-none" data-invoice-id="{{ $invoice->id }}">
                                    <td colspan="5">
                                        <div class="card border-0 shadow-none ">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <ul class="list-group p-0">
                                                            <li class="list-group-item"><strong>رقم الفاتورة:</strong>
                                                                {{ $invoice->invoice_number }}</li>
                                                            <li class="list-group-item text-wrap"><strong>اسم الخدمة:</strong> {{
                                                                $invoice->service }}</li>
                                                            <li class="list-group-item"><strong>المبلغ:</strong> ${{
                                                                number_format($invoice->amount, 2) }}</li>
                                                            <li class="list-group-item"><strong>الحالة:</strong>
                                                                <span
                                                                    class="badge {{ $invoice->status == 1 ? 'bg-gradient-success' : ($invoice->status == 0 ? 'bg-gradient-warning' : 'bg-gradient-danger') }}">
                                                                    {{ $invoice->status == 1 ? 'مدفوعة' :
                                                                    ($invoice->status == 0 ? 'معلقة' : 'فاشلة') }}
                                                                </span>
                                                            </li>
                                                            <li class="list-group-item"><strong>رقم العملية:</strong> {{
                                                                $invoice->transaction_number ?? 'غير متوفر' }}</li>
                                                            <li class="list-group-item text-wrap"><strong>اسم العميل:</strong> {{
                                                                $invoice->name }}</li>
                                                            <li class="list-group-item"><strong>رقم الهاتف:</strong>
                                                                +966 {{ substr($invoice->phone, 0, 2) }} {{
                                                                substr($invoice->phone, 2, 3) }} {{
                                                                substr($invoice->phone, 5, 4) }}</li>
                                                            <li class="list-group-item"><strong>البريد
                                                                    الإلكتروني:</strong> {{ $invoice->email }}</li>
                                                            <li class="list-group-item"><strong>المصاريف
                                                                    الإضافية:</strong> ${{
                                                                number_format($invoice->expenses, 2) }}</li>
                                                            <li class="list-group-item"><strong>العملة:</strong> {{
                                                                $invoice->currency ?? 'SAR' }}</li>
                                                            <li class="list-group-item"><strong>عدد المحاولات
                                                                    الفاشلة:</strong> {{ $invoice->failed_attempts }}
                                                            </li>
                                                            <li class="list-group-item"><strong>حالة الدفع:</strong>
                                                                    @if ($invoice->status == '1')
                                                                    <span class="badge bg-success">تم الدفع</span>
                                                                    @else
                                                                    <a href="{{ route('invoice.show', $invoice->id) }}" class="text-primary" target="_blank">التوجه الى
                                                                        الفاتورة</a>
                                                                    @endif
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6>العمليات المتاحة</h6>
                                                        <ul class="list-group flex-row flex-wrap justify-content-evenly p-0">
                                                            <li class="list-group-item border-0">
                                                                <a href="{{ route('dashboard.invoices.edit', $invoice->id) }}"
                                                                    class="btn btn-sm btn-primary d-flex align-items-center p-2">
                                                                    <i class="material-symbols-rounded opacity-5 mr-2" style="font-size: 1.2rem;">edit_square</i>
                                                                    تعديل
                                                                </a>
                                                            </li>
                                                            <li class="list-group-item border-0">
                                                                <form action="{{ route('dashboard.invoices.destroy', $invoice->id) }}" method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-danger d-flex align-items-center p-2"
                                                                        onclick="return confirm('هل أنت متأكد من حذف هذه الفاتورة؟')">
                                                                        <i class="material-symbols-rounded opacity-5 mr-2" style="font-size: 1.2rem;">delete_forever</i>
                                                                        حذف
                                                                    </button>
                                                                </form>
                                                            </li>
                                                            <li class="list-group-item border-0">
                                                                <a href="{{ route('dashboard.invoices.replicate', $invoice->id) }}"
                                                                    class="btn btn-sm btn-success d-flex align-items-center p-2">
                                                                    <i class="material-symbols-rounded opacity-5 mr-2" style="font-size: 1.2rem;">file_copy</i>
                                                                    نسخ
                                                                </a>
                                                            </li>
                                                            <li class="list-group-item border-0">
                                                                <a href="https://wa.me/{{ $invoice->phone }}?text={{ urlencode('يمكنك دفع هذه الفاتورة للحصول على خدماتنا: ' . route('invoice.show', ['invoice' => $invoice->id])) }}"
                                                                    class="btn btn-sm btn-success d-flex align-items-center p-2" target="_blank">
                                                                    <i class="material-symbols-rounded opacity-5 mr-2" style="font-size: 1.2rem;">send</i>
                                                                    إرسال
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const invoiceRows = document.querySelectorAll('.invoice-row');
        invoiceRows.forEach(row => {
            row.addEventListener('click', function () {
                const invoiceId = this.getAttribute('data-invoice-id');
                const detailsRow = document.querySelector(`.invoice-details[data-invoice-id="${invoiceId}"]`);
                if (detailsRow.classList.contains('d-none')) {
                    detailsRow.classList.remove('d-none');
                } else {
                    detailsRow.classList.add('d-none');
                }
            });
        });
    });


</script>
@endsection
