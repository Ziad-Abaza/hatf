@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y mb-5">
    <!-- عنوان الصفحة -->
    <h4 class="py-2 text-end">
        <span class="text-muted fw-light">لوحة التحكم /</span>
        عمولة المسوق: {{ $marketeer->name }}
    </h4>

    <!-- معلومات إجمالية -->
    <div class="row g-4 mb-4">
        <div class="col-md-6">
            <div class="card bg-label-primary text-primary shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-2 text-primary">إجمالي العمولة غير المسددة</h6>
                            <h4 class="mb-0 text-primary">{{ number_format($totalUnpaid, 2) }} ريال</h4>
                        </div>
                        <i class="fas fa-coins fa-2x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card bg-label-success text-success shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-2 text-success">إجمالي العمولة المسددة</h6>
                            <h4 class="mb-0 text-success">{{ number_format($totalPaid, 2) }} ريال</h4>
                        </div>
                        <i class="fas fa-check-circle fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>

    <!-- جدول العمولات (للديسكتوب) -->
    <div class="card d-none d-md-block shadow mb-5">
        <div class="table-responsive">
            <form action="{{ route('dashboard.marketeer.settle-commissions', $marketeer) }}" method="POST">
                @csrf
                <table class="table table-hover custom-rtl align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>رقم الفاتورة</th>
                            <th>مبلغ الفاتورة</th>
                            <th>العمولة</th>
                            <th>تاريخ الدفع</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($commissions as $commission)
                        <tr>
                            <td>
                                <input type="checkbox" name="commission_ids[]" value="{{ $commission->id }}">
                            </td>
                            <td>{{ $commission->payment->invoice_number }}</td>
                            <td>{{ number_format($commission->payment->amount, 2) }} ريال</td>
                            <td>{{ number_format($commission->amount, 2) }} ريال</td>
                            <td>{{ $commission->payment->created_at->format('Y-m-d') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">لا توجد عمولات غير مسددة</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                @if ($commissions->count() > 0)
                <div class="p-3">
                    <button type="submit"
                        class="btn btn-success w-100 d-flex align-items-center justify-content-center">
                        <i class="fas fa-handshake me-2"></i> سداد المستحقات المحددة
                    </button>
                </div>
                @endif
            </form>
        </div>
    </div>

    <!-- بطاقات العمولات (للهواتف) -->
    <div class="d-block d-md-none">
        <form action="{{ route('dashboard.marketeer.settle-commissions', $marketeer) }}" method="POST">
            @csrf
            <div class="d-flex justify-content-between align-items-center mb-3">
                <label class="form-check">
                    <input type="checkbox" id="select-all-mobile" class="form-check-input">
                    <span class="form-check-label">تحديد الكل</span>
                </label>
                @if ($commissions->count() > 0)
                <button type="submit" class="btn btn-success btn-sm d-flex align-items-center">
                    <i class="fas fa-handshake me-1"></i> سداد
                </button>
                @endif
            </div>

            <div class="row g-3" style="margin-bottom: 115px;">
                @forelse ($commissions as $commission)
                <div class="col-12">
                    <div class="card border rounded shadow-sm h-100">
                        <div class="card-body text-end">
                            <div class="d-flex justify-content-between mb-2">
                                <label class="form-check">
                                    <input type="checkbox" name="commission_ids[]" value="{{ $commission->id }}"
                                        class="form-check-input">
                                </label>
                                <span class="form-check-label">رقم الفاتورة: {{ $commission->payment->invoice_number
                                    }}</span>
                            </div>
                            <div class="text-muted small mb-1">مبلغ الفاتورة: {{
                                number_format($commission->payment->amount, 2) }} ريال</div>
                            <div class="text-muted small mb-1">العمولة: {{ number_format($commission->amount, 2) }} ريال
                            </div>
                            <div class="text-muted small">تاريخ الدفع: {{
                                $commission->payment->created_at->format('Y-m-d') }}</div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center text-muted">لا توجد عمولات غير مسددة</div>
                @endforelse
            </div>

            <!-- زر ثابت للسداد على الهاتف -->
            @if ($commissions->count() > 0)
            <div class="fixed-bottom d-block d-md-none bg-white py-3 px-4 shadow-sm border-top">
                <button type="submit" class="btn btn-success w-100 d-flex align-items-center justify-content-center">
                    <i class="fas fa-handshake me-2"></i> سداد المستحقات المحددة
                </button>
            </div>
            @endif
        </form>
    </div>

    <!-- العمولات المسددة -->
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">العمولات المسددة</h5>
                <span class="badge bg-label-success">{{ $paidCommissions->count() }}</span>
            </div>
            <div class="table-responsive d-none d-md-block">
                <table class="table table-hover custom-rtl align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <th>رقم الفاتورة</th>
                            <th>مبلغ الفاتورة</th>
                            <th>العمولة</th>
                            <th>تاريخ الدفع</th>
                            <th>تاريخ السداد</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse ($paidCommissions as $commission)
                        <tr class="table-success ">
                            <td>{{ $commission->payment->invoice_number }}</td>
                            <td>{{ number_format($commission->payment->amount, 2) }} ريال</td>
                            <td>{{ number_format($commission->amount, 2) }} ريال</td>
                            <td>{{ $commission->payment->created_at->format('Y-m-d') }}</td>
                            <td>{{ $commission->updated_at->format('Y-m-d') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">لا توجد عمولات مسددة</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        
            <!-- عرض على الهاتف -->
            <div class="d-block d-md-none p-3 mb-5">
                @forelse ($paidCommissions as $commission)
                <div class="card border rounded shadow-sm mb-3">
                    <div class="card-body text-end">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="fw-bold">فاتورة #{{ $commission->payment->invoice_number }}</span>
                            <span class="badge bg-success">مدفوع</span>
                        </div>
                        <div class="text-muted small mb-1">مبلغ الفاتورة: {{
                            number_format($commission->payment->amount, 2) }} ريال</div>
                        <div class="text-muted small mb-1">العمولة: {{ number_format($commission->amount, 2) }} ريال
                        </div>
                        <div class="text-muted small mb-1">تاريخ الدفع: {{
                            $commission->payment->created_at->format('Y-m-d') }}</div>
                        <div class="text-muted small">تاريخ السداد: {{
                            $commission->updated_at->format('Y-m-d') }}</div>
                    </div>
                </div>
                @empty
                <div class="text-center text-muted py-4">لا توجد عمولات مسددة</div>
                @endforelse
            </div>
            </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // ديسكتوب
        const selectAllDesktop = document.getElementById('select-all');
        if (selectAllDesktop) {
            selectAllDesktop.addEventListener('change', function () {
                const checkboxes = document.querySelectorAll('.card.d-none.d-md-block input[name="commission_ids[]"]');
                checkboxes.forEach(cb => cb.checked = this.checked);
            });
        }

        // موبايل
        const selectAllMobile = document.getElementById('select-all-mobile');
        if (selectAllMobile) {
            selectAllMobile.addEventListener('change', function () {
                const checkboxes = document.querySelectorAll('.d-block.d-md-none input[name="commission_ids[]"]');
                checkboxes.forEach(cb => cb.checked = this.checked);
            });
        }
    });
</script>