@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <div class="row custom-rtl">
        <div class="col-xl">
            <div class="card my-5 mx-auto col-lg-8">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">إنشاء سكشن جديدة</h5>
                </div>
                <div class="card-body">

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

                    <form action="{{ route('dashboard.service.sectshion.store', $service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">

                            <!-- العنوان -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="title">العنوان</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-heading"></i></span>
                                    <input type="text" name="title" id="title"
                                        class="custom-input form-control text-start @error('title') is-invalid @enderror"
                                        placeholder="أدخل عنوان السكشن" required />
                                </div>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- الصورة -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="image">الصورة</label>
                                <div class="input-group gap-2">
                                    <input type="file" name="image" id="image"
                                        class="custom-input form-control text-start @error('image') is-invalid @enderror" />
                                    <!-- معاينة الصورة الجديدة -->
                                    <div class="mt-2">
                                        <img id="imagePreview" src="" alt="صورة المعاينة"
                                            class="rounded-circle avatar-lg cursor-pointer"
                                            style="display: none; max-width: 100px;" />
                                    </div>
                                </div>
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <!-- زر الحفظ -->
                        <button type="submit" class="btn btn-primary mt-4">
                            <span class="material-symbols-rounded fs-6 me-1">save</span> حفظ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
