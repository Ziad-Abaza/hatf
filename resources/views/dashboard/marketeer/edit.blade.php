@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-5" dir="rtl">
    <!-- Form Card -->
    <div class="card shadow border-0 col-lg-8 mx-auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-start">تعديل بيانات المسوّق</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.marketeer.update', $marketeer->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

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
                        <label for="name" class="form-label">اسم المسوّق</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-user"></i></span>
                            <input type="text" name="name" id="name"
                                class="custom-input form-control text-start @error('name') is-invalid @enderror"
                                placeholder="أدخل اسم المسوّق" value="{{ old('name', $marketeer->name) }}" required />
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="col-md-6">
                        <label for="phone" class="form-label">رقم الهاتف</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-phone"></i></span>
                            <input type="text" name="phone" id="phone"
                                class="custom-input form-control text-start @error('phone') is-invalid @enderror"
                                placeholder="أدخل رقم الهاتف" value="{{ old('phone', $marketeer->phone) }}" required />
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Commission Rate -->
                <div class="col-md-6">
                    <label for="commission_rate" class="form-label">نسبة العمولة</label>
                    <div class="input-group">
                        <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-percent"></i></span>
                        <input type="number" name="commission_rate" id="commission_rate"
                            class="custom-input form-control text-start @error('commission_rate') is-invalid @enderror"
                            placeholder="أدخل نسبة العمولة" value="{{ old('commission_rate', $marketeer->commission_rate) }}" required />
                        @error('commission_rate')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                <!-- Submit Button -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <span class="material-symbols-rounded fs-6 me-1">save</span> تحديث بيانات المسوّق
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
