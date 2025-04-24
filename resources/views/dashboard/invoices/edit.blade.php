@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center my-5">
        <div class="col-lg-8 col-md-10">
            <!-- نموذج تعديل الفاتورة -->
            <form action="{{ route('dashboard.invoices.update', $invoice->id) }}" method="post"
                class="card shadow border-0 custom-rtl">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <!-- رقم الفاتورة وتاريخ الطلب -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="invoice_number" class="form-label">رقم الفاتورة</label>
                            <div class="input-group">
                                <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-hashtag"></i></span>
                                <input type="text" id="invoice_number" readonly class="custom-input form-control text-start"
                                    value="{{ $invoice->invoice_number }}">
                                <input type="hidden" id="invoice_number" name="invoice_number" class="custom-input form-control text-start"
                                    value="{{ $invoice->invoice_number }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="created_at" class="form-label">تاريخ الطلب</label>
                            <div class="input-group">
                                <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-calendar"></i></span>
                                <input type="text" id="created_at" class="custom-input form-control text-start"
                                    value="{{ \Carbon\Carbon::parse($invoice->created_at)->format('d/m/Y') }}" readonly>
                            </div>
                        </div>
                    </div>

                    <!-- معلومات العميل -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label">الاسم الكامل</label>
                            <div class="input-group">
                                <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-user"></i></span>
                                <input type="text" id="name" name="name"
                                    class="custom-input form-control text-start @error('name') is-invalid @enderror"
                                    placeholder="أدخل الاسم الكامل" value="{{ old('name', $invoice->name) }}" required>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <div class="input-group">
                                <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-envelope"></i></span>
                                <input type="email" id="email" name="email"
                                    class="custom-input form-control text-start @error('email') is-invalid @enderror"
                                    placeholder="أدخل البريد الإلكتروني" value="{{ old('email', $invoice->email) }}"
                                    required>
                                @error('email')

                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- رقم الهاتف ووصف الخدمة -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="phone" class="form-label">رقم الهاتف</label>
                            <div class="input-group">
                                <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-phone"></i></span>
                                <input type="text" id="phone" name="phone"
                                    class="custom-input form-control text-start @error('phone') is-invalid @enderror"
                                    placeholder="أدخل رقم الهاتف" value="{{ old('phone', $invoice->phone) }}" required>
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="service" class="form-label">وصف الخدمة</label>
                            <div class="input-group">
                                <textarea id="service" name="service"
                                    class="custom-input form-control @error('service') is-invalid @enderror"
                                    placeholder="أدخل وصف الخدمة"
                                    required>{{ old('service', $invoice->service) }}</textarea>
                                @error('service')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- المصاريف والمبلغ الإجمالي -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="expenses" class="form-label">إجمالي المصاريف</label>
                            <div class="input-group">
                                <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-dollar-sign"></i></span>
                                <input type="number" step="0.01" id="expenses" name="expenses"
                                    class="custom-input form-control text-start @error('expenses') is-invalid @enderror"
                                    placeholder="أدخل المصاريف الإضافية"
                                    value="{{ old('expenses', $invoice->expenses) }}" required>
                                @error('expenses')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="amount" class="form-label">المبلغ الإجمالي</label>
                            <div class="input-group">
                                <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-dollar-sign"></i></span>
                                <input type="number" step="0.01" id="amount" name="amount"
                                    class="custom-input form-control text-start @error('amount') is-invalid @enderror"
                                    placeholder="أدخل المبلغ الإجمالي" value="{{ old('amount', $invoice->amount) }}"
                                    required>
                                @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- زر الإرسال -->
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill">حفظ التعديلات</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
