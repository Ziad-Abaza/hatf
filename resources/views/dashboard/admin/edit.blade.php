@extends('dashboard.layout.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <!-- عنوان الصفحة -->
            <div class="text-center mb-5">
                <h3 class="font-weight-bold">تعديل بيانات المشرف</h3>
                <p class="text-muted">قم بتعديل بيانات المشرف أدناه.</p>
            </div>

            <!-- نموذج تعديل بيانات المشرف -->
            <form action="{{ route('dashboard.admin.update', $admin->id) }}" method="POST"
                class="card shadow border-0 custom-rtl">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <!-- معلومات المشرف -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="name" class="form-label">الاسم الكامل</label>
                            <div class="input-group">
                                <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-user"></i></span>
                                <input type="text" name="name" id="name"
                                    class="custom-input form-control text-start @error('name') is-invalid @enderror"
                                    placeholder="اكتب إسم المشرف بالكامل" value="{{ old('name', $admin->name) }}"
                                    required />
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <div class="input-group">
                                <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-envelope"></i></span>
                                <input type="email" name="email" id="email"
                                    class="custom-input form-control text-start @error('email') is-invalid @enderror"
                                    placeholder="example@gmail.com" value="{{ old('email', $admin->email) }}"
                                    required />
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
                                <input type="tel" name="phone" id="phone"
                                    class="custom-input form-control text-start @error('phone') is-invalid @enderror"
                                    placeholder="+966 5XXXXXXXX" maxlength="13"
                                    inputmode="numeric" value="{{ old('phone', $admin->phone) }}" required />
                                @error('phone')
                                <div class="form-text">يجب أن يبدأ بـ +966</div>
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- كلمة المرور -->
                        <div class="col-md-6">
                            <label for="password" class="form-label">كلمة المرور الجديدة</label>
                            <div class="input-group">
                                <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password" id="password"
                                    class="custom-input form-control text-start @error('password') is-invalid @enderror"
                                    placeholder="أدخل كلمة المرور الجديدة" />
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-text">اترك هذا الحقل فارغًا إذا لم ترغب في تغيير كلمة المرور.</div>
                        </div>
                    </div>

                    <!-- زر الإرسال -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow">
                            <i class="fas fa-save me-2"></i> حفظ التعديلات
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
