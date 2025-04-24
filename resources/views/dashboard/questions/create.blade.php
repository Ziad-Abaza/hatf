@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row custom-rtl">
        <div class="col-xl">
            <div class="card my-7 mx-auto" style="max-width: 800px">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">إضافة سؤال جديد</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.questions.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <!-- السؤال -->
                            <div class="col-md-12 col-12 mb-3">
                                <label class="form-label" for="title">السؤال</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i
                                            class="fas fa-question"></i></span>
                                    <input type="text" name="title" id="title"
                                        class="custom-input form-control text-start @error('title') is-invalid @enderror"
                                        value="{{ old('title') }}" placeholder="أدخل السؤال" required />
                                </div>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- الإجابة -->
                            <div class="col-md-12 col-12 mb-3">
                                <label for="description" class="form-label">الإجابة</label>
                                <textarea name="description" id="description"
                                    class="custom-input form-control @error('description') is-invalid @enderror"
                                    rows="3" placeholder="أضف الإجابة" required>{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- اختيار الخدمة -->
                            <div class="col-md-12 col-12 mb-3">
                                <label class="form-label" for="service_id">الخدمة</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i
                                            class="fas fa-list-alt"></i></span>
                                    <select name="service_id" id="service_id"
                                        class="custom-input form-select text-start @error('service_id') is-invalid @enderror"
                                        required>
                                        <option value="" selected disabled>اختر خدمة</option>
                                        @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('service_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <!-- زر الإضافة -->
                        <button type="submit" class="btn btn-primary mt-4">
                            <span class="material-symbols-rounded fs-6 me-1">add</span> إضافة
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
