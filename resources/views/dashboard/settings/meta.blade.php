@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-2" dir="rtl">
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> الإعدادات</span></h4>
    <!-- Form Card -->
    <div class="card shadow border-0 col-lg-8 mx-auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-start">تحديث الإعدادات</h5>
        </div>
        <div class="card-body">
            <form id="settings-form" method="POST" action="{{ route('dashboard.settings.update') }}">
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

                    <!-- Description -->
                    <div class="col-md-12">
                        <label for="descraption" class="form-label">الوصف الحالي</label>
                        <div class="input-group">
                            <textarea id="descraption" name="descraption"
                                class="custom-input form-control text-start @error('descraption') is-invalid @enderror"
                                rows="4" placeholder="أدخل الوصف">{{ $description }}</textarea>
                            @error('descraption')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Keywords -->
                    <div class="col-md-12">
                        <label for="keyWords" class="form-label">الكلمات المفتاحية</label>
                        <div class="input-group">
                            <textarea id="keyWords" name="keyWords"
                                class="custom-input form-control text-start @error('keyWords') is-invalid @enderror"
                                rows="4" placeholder="أدخل الكلمات المفتاحية">{{ $keyWords }}</textarea>
                            @error('keyWords')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

                <!-- Submit Button -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <span class="material-symbols-rounded fs-6 me-1">save</span> تحديث الإعدادات
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional: Success or Error Alert -->
    <div id="alert-container" class="mt-3"></div>
</div>
@endsection
