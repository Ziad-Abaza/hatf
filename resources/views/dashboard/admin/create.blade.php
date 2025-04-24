@extends('dashboard.layout.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <!-- عنوان الصفحة -->
            <div class="text-center mb-5">
                <h3 class="font-weight-bold">إضافة مشرف</h3>
                <p class="text-muted">املأ النموذج أدناه لإضافة مشرف إلى النظام</p>
            </div>

            <!-- نموذج إضافة مشرف -->
            <form action="{{ route('dashboard.admin.store') }}" method="POST"
                class="card shadow border-0 custom-rtl">
                @csrf

                <div class="card-body">
                    <!-- معلومات المشرف -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label">الاسم الكامل</label>
                            <div class="input-group">
                                <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-user"></i></span>
                                <input type="text" name="name" class="custom-input form-control text-start @error('name') is-invalid @enderror" id="basic-default-fullname"
                                    placeholder="اكتب إسم المشرف بالكامل" required/>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <div class="input-group">
                                <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-envelope"></i></span>
                                <input type="text" name="email" id="basic-default-email" class="custom-input form-control text-start @error('email') is-invalid @enderror"
                                    placeholder="example@gmail.com" aria-label="" aria-describedby="basic-default-email2" required>
                                @error('email')
                                <div class="form-text">بإمكانك استخدام الحروف، الأرقام، والنقاط.</div>
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- رقم الهاتف -->
                    <div class="row mb-4 gap-5 gap-lg-0">
                        <div class="col-md-6">
                            <label for="phone" class="form-label">رقم الهاتف</label>
                            <div class="input-group">
                                <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-phone"></i></span>
                                <input type="tel" name="phone" class="custom-input form-control text-start @error('phone') is-invalid @enderror"
                                    id="basic-default-phone" placeholder="+966 5XXXXXXXX" maxlength="13" inputmode="numeric"
                                    required />
                                @error('phone')
                                <div class="form-text">يجب أن يبدأ بـ 966</div>
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- زر الإرسال -->
                        <div class="col-md-6 d-flex align-items-end text-center">
                            <button type="submit" class="btn btn-primary m-0 btn-lg w-100 rounded-pill">إضافة</button>
                        </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
