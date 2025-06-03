@extends('dashboard.layout.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <!-- عنوان الصفحة -->
            <div class="text-center mb-5">
                <h3 class="font-weight-bold">إضافة فاتورة جديدة</h3>
                <p class="text-muted">املأ النموذج أدناه لإضافة فاتورة جديدة إلى النظام.</p>
            </div>

            <!-- نموذج إضافة الفاتورة -->
            <form action="{{ route('dashboard.invoices.store') }}" method="POST"
                class="card shadow border-0 custom-rtl">
                @csrf

                <div class="card-body">
                    <!-- رقم الفاتورة وتاريخ الطلب -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="invoice_number" class="form-label">رقم الفاتورة</label>
                            <div class="input-group">
                                <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-hashtag"></i></span>
                                <input type="text" id="invoice_number" readonly class="custom-input form-control text-start"
                                    value="{{ $invoiceNumber }}">
                                <input type="hidden" id="invoice_number" name="invoice_number" class="custom-input form-control text-start"
                                    value="{{ $invoiceNumber }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="created_at" class="form-label">تاريخ الطلب</label>
                            <div class="input-group">
                                <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-calendar"></i></span>
                                <input type="text" id="created_at" class="custom-input form-control text-start"
                                    value="{{ \Carbon\Carbon::now()->format('d/m/Y') }}" readonly>
                            </div>
                        </div>
                    </div>

                    <!-- معلومات العميل -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label">اختر العميل</label>
                            <div class="input-group">
                                {{-- <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-user"></i></span> --}}
                                <select name="customer_id" required class="custom-input form-control text-end @error('customer_id') is-invalid @enderror">
                                    @foreach($customers as $customer)
                                    <option  value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <div class="input-group">
                                <span class="input-group-text  h-100 fs-6 px-3 "><i class="fas fa-envelope"></i></span>
                                <input type="email" id="email" name="email"
                                    class="custom-input form-control text-start @error('email') is-invalid @enderror"
                                    placeholder="أدخل البريد الإلكتروني" value="{{ old('email') }}" required>
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
                                <input type="tel" name="phone" class="custom-input form-control text-start @error('phone') is-invalid @enderror"
                                    id="basic-default-phone" placeholder="+966 5XXXXXXXX" maxlength="16" inputmode="numeric" required />
                                    @error('phone')
                                <div class="form-text">يجب أن يبدأ بـ 966</div>
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="service" class="form-label">وصف الخدمة</label>
                            <div class="input-group">
                                <textarea id="service" name="service"
                                    class="custom-input form-control @error('service') is-invalid @enderror"
                                    placeholder="أدخل وصف الخدمة" required>{{ old('service') }}</textarea>
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
                                    placeholder="أدخل المصاريف الإضافية" value="{{ old('expenses') }}" required>
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
                                    placeholder="أدخل المبلغ الإجمالي" value="{{ old('amount') }}" required>
                                @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- زر الإرسال -->
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill">أضف الفاتورة</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
