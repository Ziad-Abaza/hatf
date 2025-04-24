@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">فاتورة/</span> تعديل</h4>

        <div class="row justify-content-center mb-4">

            <form style="height: 100%;" action="{{ route('dashboard.invoices.update', $invoice->id) }}" method="post"
                class="bg-light p-3 align-content-around rounded" data-bs-theme="light">
                @csrf
                @method('PUT')
                <div style="border-style: solid; border-color: #8e8e4e; margin-bottom: 30px; padding: 10px;">
                    <div class="mb-12 col-12 col-md-12 text-end"
                        style="display: flex; justify-content: space-between; margin-top: 20px;">
                        <div>
                            <p class="form-label text-dark fw-bold">رقم الفاتورة
                                <input type="number" name="invoice_number" value="{{ $invoice->invoice_number }}"
                                    style="display: none;" />
                            </p>
                        </div>
                        <div>
                            <p id="invoiceNumber" class="form-label fw-bold" style="color: black">
                                {{ $invoice->invoice_number }}
                            </p>
                        </div>
                    </div>

                    <div class="mb-12 col-12 col-md-12 text-end"
                        style="display: flex; justify-content: space-between; margin-top: 20px;">
                        <div>
                            <p class="form-label text-dark fw-bold">تاريخ الطلب</p>
                        </div>
                        <div>
                            <p id="orderDate" class="form-label fw-bold" style="color: black">
                                {{ \Carbon\Carbon::parse($invoice->created_at)->format('d/m/Y') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Name -->
                    <div class="mb-12 col-12 col-md-12 text-end">
                        <label for="name" class="form-label text-dark fw-bold">اسمك الكريم*</label>
                        <input type="text" placeholder="الاسم الثلاثي"
                            class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            value="{{ old('name', $invoice->name) }}" />
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-12 col-12 col-md-12 text-end">
                        <label for="email" class="form-label text-dark fw-bold">البريد الالكتروني*</label>
                        <input type="email" autocomplete="email"
                            class="form-control font-m @error('email') is-invalid @enderror" id="email" name="email"
                            value="{{ old('email', $invoice->email) }}" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="mb-12 col-12 col-md-12 text-end">
                        <label for="phone" class="form-label text-dark fw-bold">هاتف التواصل</label>
                        <input type="tel" class="form-control font-m @error('phone') is-invalid @enderror"
                            id="phone" name="phone" value="{{ old('phone', $invoice->phone) }}" />
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Service -->
                    <div class="mb-12 col-12 col-md-12 text-end">
                        <label for="service" class="form-label text-dark fw-bold">الخدمة*</label>
                        <textarea type="text" class="form-control font-m @error('service') is-invalid @enderror" id="service"
                            name="service">{{ old('service', $invoice->service) }}</textarea>
                        @error('service')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Total expenses -->
                    <div class="mb-12 col-12 col-md-12 text-end">
                        <label for="expenses" class="form-label text-dark fw-bold">اجمالى المصاريف</label>
                        <input type="expenses" class="form-control font-m @error('expenses') is-invalid @enderror"
                            id="expenses" name="expenses"  value="{{ old('expenses', $invoice->expenses) }}" />
                        @error('expenses')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Total Amount -->
                    <div class="mb-12 col-12 col-md-12 text-end">
                        <label for="amount" class="form-label text-dark fw-bold">اجمالى المبلغ</label>
                        <input type="number" class="form-control font-m @error('amount') is-invalid @enderror"
                            id="amount" name="amount" value="{{ old('amount', $invoice->amount) }}" />
                        @error('amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-12 col-12 col-md-12 text-end" style="display: flex; justify-content: center;">
                        <button type="submit" class="col-6 btn btn-dark">
                            حفظ التعديلات
                        </button>
                    </div>

                </div>
            </form>

        </div>

    </div>
@endsection

@section('js')
    <style>
        label {
            display: flex;
        }
    </style>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
            imagePreview.style.display = 'block';
        }

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                alert('تم نسخ الرابط');
            }).catch(err => {
                console.error('فشل النسخ: ', err);
            });
        }
    </script>
        <script>
        CKEDITOR.replace('service', {
            contentsLangDirection: 'rtl',  // Set text direction to right-to-left
            language: 'ar'  // Optionally, set the language to Arabic
        });
    </script>
@endsection
