@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-5" dir="rtl">
    <!-- Form Card -->
    <div class="card shadow border-0 col-lg-8 mx-auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-start">إضافة عميل جديد</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.customer.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Display validation errors -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="row g-3">

                    <!-- Name -->
                    <div class="col-md-6">
                        <label for="name" class="form-label">اسم العميل</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-user"></i></span>
                            <input type="text" name="name" id="name"
                                class="custom-input form-control text-start @error('name') is-invalid @enderror"
                                placeholder="أدخل اسم العميل" value="{{ old('name') }}" required />
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <label for="email" class="form-label">بريد العميل</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" id="email"
                                class="custom-input form-control text-start @error('email') is-invalid @enderror"
                                placeholder="أدخل بريد العميل" value="{{ old('email') }}" required />
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="col-md-6">
                        <label for="phone" class="form-label">رقم الهاتف</label>
                        <div class="input-group">
                            <span class="input-group-text  h-100 fs-6 px-3"><i class="fas fa-phone"></i></span>
                            <input type="tel" name="phone" class="custom-input form-control text-start @error('phone') is-invalid @enderror"
                                id="basic-default-phone" placeholder="+966 5XXXXXXXX" maxlength="13" inputmode="numeric" required />
                            @error('phone')
                            <div class="form-text">يجب أن يبدأ بـ 966</div>
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Service -->
                    <div class="col-md-6">
                        <label for="service" class="form-label">الخدمة</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-cog"></i></span>
                            <select id="service" name="service" class="custom-input form-select text-start">
                                <option value="تصميم" {{ old('service')=='تصميم' ? 'selected' : '' }}>تصميم</option>
                                <option value="تسويق" {{ old('service')=='تسويق' ? 'selected' : '' }}>تسويق</option>
                                <option value="برمجة" {{ old('service')=='برمجة' ? 'selected' : '' }}>برمجة</option>
                                <option value="صوتي و مرئي" {{ old('service')=='صوتي و مرئي' ? 'selected' : '' }}>صوتي و
                                    مرئي</option>
                                <option value="أخرى" {{ old('service')=='أخرى' ? 'selected' : '' }}>أخرى</option>
                            </select>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="col-12">
                        <label for="desc" class="form-label">الوصف</label>
                        <div class="input-group">
                            <textarea name="desc" id="desc" rows="3"
                                class="custom-input form-control text-end @error('desc') is-invalid @enderror"
                                placeholder="اكتب وصفًا للخدمة">{{ old('desc') }}</textarea>
                                @error('desc')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- marketeer -->
                        <div class="col-md-12">
                            <label for="service" class="form-label">اختر المسوق</label>
                            <div class="input-group">
                                <select name="marketeer_id" required
                                    class="custom-input form-control text-end @error('marketeer_id') is-invalid @enderror">
                                    @foreach($marketeers as $marketeer)
                                    <option value="{{ $marketeer->id }}">{{ $marketeer->name }}</option>
                                    @endforeach
                                </select>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror      </div>
                            </div>
                </div>
                

                <!-- Submit Button -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <span class="material-symbols-rounded fs-6 me-1">add</span> إضافة العميل
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
