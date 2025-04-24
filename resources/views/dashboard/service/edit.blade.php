@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row custom-rtl">
        <div class="col-xl">
            <div class="card my-7 mx-auto" style="max-width: 800px">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">تعديل الخدمة</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.service.update', $service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- إضافة طريقة PUT -->

                        <div class="row">

                            <!-- اسم الخدمة -->
                            <div class="col-md-6 col-12 mb-3">
                                <label class="form-label" for="basic-default-name">إسم الخدمة</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-tag"></i></span>
                                    <input type="text" name="name"
                                        class="custom-input form-control text-start @error('name') is-invalid @enderror"
                                        value="{{ old('name', $service->name) }}" id="basic-default-name"
                                        placeholder="إسم الخدمة" />
                                </div>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- صورة الخدمة -->
                            <div class="col-md-6 col-12 mb-3">
                                <label for="formFile" class="form-label">صورة الخدمة</label>
                                <div class="input-group gap-2">
                                <input type="file" name="image"
                                    class="custom-input form-control @error('image') is-invalid @enderror"
                                    id="formFile" />
                                    <!-- عرض الصورة الحالية -->
                                    @if ($service->image)
                                    <div class="m-0">
                                        <img src="{{ asset('storage/images/' . $service->image) }}" alt="Current Service Image" width="85px" height="85px"
                                            class="rounded-5 avatar-md cursor-pointer" />
                                    </div>
                                    @endif
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>

                            <!-- وصف الخدمة -->
                            <div class="col-md-6 col-12 mb-3">
                                <label for="desc" class="form-label">وصف الخدمة</label>
                                <textarea name="desc"
                                    class="custom-input form-control @error('desc') is-invalid @enderror" id="desc"
                                    rows="3" placeholder="أضف وصفًا للخدمة">{{ old('desc', $service->desc) }}</textarea>
                                @error('desc')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- رقم الخدمة -->
                            <div class="col-md-6 col-12 mb-3">
                                <label for="formFile" class="form-label">رقم الخدمة</label>
                                <div class="input-group gap-2">
                                <input type="file" name="icon_number"
                                    class="custom-input form-control @error('icon_number') is-invalid @enderror"
                                    id="formFile" />
                                    <!-- عرض صورة رقم الخدمة الحالية -->
                                    @if ($service->icon_number)
                                    <div class="m-0">
                                        <img src="{{ asset('storage/images/' . $service->icon_number) }}" alt="Current Icon Number" width="85px"
                                            height="85px" class="rounded-5 avatar-md cursor-pointer" />
                                    </div>
                                    @endif
                                @error('icon_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        </div>

                        <!-- زر الحفظ -->
                        <button type="submit" class="btn btn-primary">
                            <span class="material-symbols-rounded fs-6 me-1">save</span> حفظ التعديلات
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
