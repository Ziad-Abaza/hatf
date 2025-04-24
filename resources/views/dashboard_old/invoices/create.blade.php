@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4 text-center"><span class="text-muted fw-light">فاتورة/</span> إضافة</h4>

        <div class="row justify-content-center mb-4">
            <form style="height: 100%; max-width: 800px;" action="{{ route('dashboard.invoices.store') }}" method="post"
                class="bg-light p-4 rounded shadow-sm" data-bs-theme="light">
                @csrf

                <div class="border border-warning rounded mb-4 p-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <label class="form-label text-dark fw-bold m-0">رقم الفاتورة:</label>
                        <p id="invoiceNumber" class="form-label fw-bold m-0" style="color: black;">{{ $invoiceNumber }}</p>
                        <input type="hidden" name="invoice_number" value="{{ $invoiceNumber }}" />
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <label class="form-label text-dark fw-bold m-0">تاريخ الطلب:</label>
                        <p id="orderDate" class="form-label fw-bold m-0" style="color: black;">{{ \Carbon\Carbon::now()->format('Y/m/d') }}</p>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Name -->
                    <div class="col-12">
                        <label for="name" class="form-label text-dark fw-bold">اسمك الكريم*</label>
                        <input type="text" placeholder="الاسم الثلاثي" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" />
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="col-12">
                        <label for="email" class="form-label text-dark fw-bold">البريد الالكتروني*</label>
                        <input type="email" autocomplete="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="col-12">
                        <label for="phone" class="form-label text-dark fw-bold">هاتف التواصل*</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="رقم سعودى" value="{{ old('phone') }}" />
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Service -->
                    <div class="col-12">
                        <label for="service" class="form-label text-dark fw-bold">الخدمة*</label>
                        <textarea class="form-control @error('service') is-invalid @enderror" id="service" name="service" dir="rtl" placeholder="أدخل الخدمة هنا">{{ old('service') }}</textarea>
                        @error('service')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Total expenses -->
                    <div class="col-12 col-md-6">
                        <label for="expenses" class="form-label text-dark fw-bold">اجمالى المصاريف*</label>
                        <input type="number" class="form-control @error('expenses') is-invalid @enderror" id="expenses" name="expenses" value="{{ old('expenses') }}" />
                        @error('expenses')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Total Amount -->
                    <div class="col-12 col-md-6">
                        <label for="amount" class="form-label text-dark fw-bold">اجمالى المبلغ*</label>
                        <input type="number" class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount" value="{{ old('amount') }}" />
                        @error('amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-dark px-5 py-2">
                        ادفع الان
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection

@section('css')
    <style>
        label {
            display: flex;
            justify-content: flex-end;
        }

        .form-control {
            border-radius: 0.375rem;
            box-shadow: none;
        }

        button {
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #555;
        }
    </style>
@endsection

@section('js')
    <script>
        CKEDITOR.replace('service', {
            contentsLangDirection: 'rtl',  // Set text direction to right-to-left
            language: 'ar'  // Optionally, set the language to Arabic
        });
    </script>
@endsection
