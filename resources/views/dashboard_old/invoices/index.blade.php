@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> الفواتير</h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.invoices.create') }}" class="btn btn-primary" style="color: #fff">
                    إضافة فاتورة
                </a>
            </div>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>اسم الخدمة</th>
                            <th>رابط الدفع</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($invoiceNumber as $invoice)
                            <tr>
                                <td
                                    style=" width: 100%; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;">
                                    <div>
                                        {!! $invoice->service !!}
                                    </div>
                                    <div class="badge bg-light text-dark">
                                        SR {{ $invoice->amount }}
                                    </div>
                                </td>

                                <td id="copy" style="width: 100%; word-wrap: break-word;">
                                    @if ($invoice->status == '1')
                                        <span class="badge bg-success">
                                            {{ $invoice->updated_at->diffForHumans() }}
                                        </span>
                                    @else
                                        <span class="badge bg-dark">
                                            <a href="{{ route('invoice.show', $invoice->id) }}" class="text-white">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                        </span>

                                        <span class="badge bg-dark">
                                            <a href="https://wa.me/{{ $invoice->phone }}?text={{ urlencode('يمكنك دفع هذه الفاتورة للحصول على خدماتنا: ' . route('invoice.show', ['invoice' => $invoice->id])) }}"
                                                class="text-white" target="_blank">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                        </span>
                                    @endif
                                </td>

                                <td style=" width: 100%; text-align: right;">

                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.invoices.edit', $invoice->id) }}">
                                                <i class="ti ti-pencil me-1"></i> تعديل
                                            </a>
                                            <form
                                                action="{{ route('dashboard.invoices.destroy', ['invoice' => $invoice->id]) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"
                                                    onclick="return confirm('Are you sure you want to delete this?')">
                                                    <i class="ti ti-trash me-1"></i> حذف
                                                </button>
                                            </form>

                                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#myModal{{ $invoice->id }}">
                                                <i class="ti ti-details"></i> تفاصيل
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- The Modal -->
                            <div class="modal" id="myModal{{ $invoice->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">تفاصيل الفاتورة</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <dl class="row">
                                                <dt class="col-sm-4">رقم الفاتورة:</dt>
                                                <dd class="col-sm-8">{{ $invoice->invoice_number }}</dd>

                                                <dt class="col-sm-4">معرف العملية:</dt>
                                                <dd class="col-sm-8">{{ $invoice->uniqid }}</dd>

                                                <dt class="col-sm-4">رقم العملية:</dt>
                                                <dd class="col-sm-8">{{ $invoice->transaction_number }}</dd>

                                                <dt class="col-sm-4">الحالة:</dt>
                                                <dd class="col-sm-8">
                                                    <span
                                                        class="badge 
                                                    @if ($invoice->status == '1') bg-success 
                                                    @elseif($invoice->status == '0') bg-warning 
                                                    @elseif($invoice->status == '2') bg-danger 
                                                    @else bg-secondary @endif">
                                                        @if ($invoice->status == '1')
                                                            عملية ناجحة
                                                        @elseif($invoice->status == '0')
                                                            عملية معلقة
                                                        @elseif($invoice->status == '2')
                                                            عملية فاشلة
                                                        @else
                                                            حالة غير معروفة
                                                        @endif
                                                    </span>
                                                </dd>

                                                <dt class="col-sm-4">المصاريف:</dt>
                                                <dd class="col-sm-8">{{ number_format($invoice->expenses, 2) }}
                                                    {{ $invoice->currency ?? 'SAR' }}</dd>

                                                <dt class="col-sm-4">المبلغ:</dt>
                                                <dd class="col-sm-8">{{ number_format($invoice->amount, 2) }}
                                                    {{ $invoice->currency ?? 'SAR' }}</dd>

                                                <dt class="col-sm-4">اسم الخدمة:</dt>
                                                <dd class="col-sm-8"
                                                    style="word-wrap: break-word; overflow-wrap: break-word; white-space: normal;">
                                                    {{ $invoice->service }}</dd>

                                                <dt class="col-sm-4">الاسم:</dt>
                                                <dd class="col-sm-8">{{ $invoice->name }}</dd>

                                                <dt class="col-sm-4">البريد الإلكتروني:</dt>
                                                <dd class="col-sm-8">{{ $invoice->email }}</dd>

                                                <dt class="col-sm-4">الهاتف:</dt>
                                                <dd class="col-sm-8">{{ $invoice->phone }}</dd>

                                                <dt class="col-sm-4">رابط الدفع:</dt>
                                                <dd class="col-sm-8">
                                                    @if ($invoice->status == '1')
                                                        <span class="badge bg-success">تم الدفع</span>
                                                    @else
                                                        <a href="{{ route('invoice.show', $invoice->id) }}"
                                                            class="text-primary" target="_blank">عرض الرابط</a>
                                                    @endif
                                                </dd>

                                                <dt class="col-sm-4">محاولات فاشلة:</dt>
                                                <dd class="col-sm-8">{{ $invoice->failed_attempts }}</dd>



                                                <dt class="col-sm-4">تاريخ الانشاء:</dt>
                                                <dd class="col-sm-8">{{ $invoice->created_at }}</dd>



                                                <dt class="col-sm-4">تاريخ الدفع:</dt>
                                                <dd class="col-sm-8">{{ $invoice->updated_at }}</dd>

                                            </dl>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $invoiceNumber->links() }} <!-- Pagination links -->
            </div>
        </div>
    </div>
@endsection
