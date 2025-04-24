@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row custom-rtl">
        <div class="col-xl">
            <div class="card my-7 mx-auto" style="max-width: 800px">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">إضافة خدمة جديدة</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <!-- اسم الخدمة -->
                            <div class="col-md-6 col-12 mb-3">
                                <label class="form-label" for="basic-default-name">إسم الخدمة</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-tag"></i></span>
                                    <input type="text" name="name"
                                        class="custom-input form-control text-start @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" id="basic-default-name" placeholder="إسم الخدمة" />
                                </div>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- صورة الخدمة -->
                            <div class="col-md-6 col-12 mb-3">
                                <label for="formFile" class="form-label">صورة الخدمة</label>
                                <div class="input-group">
                                    <input type="file" name="image"
                                        class="custom-input form-control text-start @error('image') is-invalid @enderror"
                                        id="formFile" />
                                </div>
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- وصف الخدمة -->
                            <div class="col-md-6 col-12 mb-3">
                                <label for="desc" class="form-label">وصف الخدمة</label>
                                <div class="input-group">
                                    <textarea name="desc"
                                        class="custom-input form-control text-start @error('desc') is-invalid @enderror"
                                        id="desc" rows="3" placeholder="أضف وصفًا للخدمة">{{ old('desc') }}</textarea>
                                </div>
                                @error('desc')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- رقم الخدمة -->
                            <div class="col-md-6 col-12 mb-3">
                                <label for="icon_number" class="form-label">رقم الخدمة</label>
                                <div class="input-group">
                                    <input type="file" name="icon_number"
                                        class="custom-input form-control text-start @error('icon_number') is-invalid @enderror"
                                        id="icon_number" />
                                </div>
                                @error('icon_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <!-- زر الإضافة -->
                        <button type="submit" class="btn btn-primary">
                            <span class="material-symbols-rounded fs-6 me-1">add</span> إضافة
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
