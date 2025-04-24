@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y min-height-600">
    <!-- Basic Layout -->
    <div class="row custom-rtl">
        <div class="col-lg-8 m-auto">
            <div class="card my-7 mx-auto">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">تعديل عضو</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.our-team.update', $ourTeam->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <!-- Name -->
                            <div class="col-md-6 col-12 mb-3">
                                <label class="form-label" for="name">الاسم</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i
                                            class="material-symbols-rounded">person</i></span>
                                    <input type="text" name="name" id="name"
                                        class="custom-input form-control text-start @error('name') is-invalid @enderror"
                                        value="{{ old('name', $ourTeam->name) }}" placeholder="أدخل الاسم" />
                                </div>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Job Title -->
                            <div class="col-md-6 col-12 mb-3">
                                <label class="form-label" for="job">المسمى الوظيفي</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i
                                            class="material-symbols-rounded">work</i></span>
                                    <input type="text" name="job" id="job"
                                        class="custom-input form-control text-start @error('job') is-invalid @enderror"
                                        value="{{ old('job', $ourTeam->job) }}" placeholder="أدخل المسمى الوظيفي" />
                                </div>
                                @error('job')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image Upload with Preview -->
                            <div class="col-md-12 col-12 mb-3">
                                <label for="image" class="form-label"> الصورة </label>
                                <div class="input-group d-flex gap-2">
                                    <input type="file" name="image" id="image"
                                        class="custom-input form-control @error('image') is-invalid @enderror"
                                        accept="image/*" onchange="previewImage(event)" />
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="mt-0">
                                    @if ($ourTeam->image)
                                    <img src="{{ asset('storage/images/' . $ourTeam->image) }}" alt="Current Image"
                                        class="rounded-circle avatar-md cursor-pointer" data-bs-toggle="modal" data-bs-target="#imageModal"
                                        data-image="{{ asset('storage/images/' . $ourTeam->image) }}" />
                                    @else
                                    <p>لا توجد صورة حالية.</p>
                                    @endif
                                </div>
                                </div>
                            </div>

                        </div>

                        <!-- زر التعديل -->
                        <button type="submit" class="btn btn-primary mt-4">
                            <i class="material-symbols-rounded fs-6 me-1">save</i> حفظ التعديلات
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
