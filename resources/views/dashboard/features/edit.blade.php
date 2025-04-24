@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row custom-rtl">
        <div class="col-xl">
            <div class="card my-5 mx-auto col-lg-8">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">تعديل سمة</h5>
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

                    <form action="{{ route('dashboard.features.update', $feature->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row g-3">

                            <!-- العنوان -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="title">العنوان</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-heading"></i></span>
                                    <input type="text" name="title" id="title"
                                        class="custom-input form-control text-start @error('title') is-invalid @enderror"
                                        value="{{ old('title', $feature->title) }}" required />
                                </div>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- المحتوى -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="description">المحتوى</label>
                                <div class="input-group">
                                    <textarea name="description" id="description"
                                        class="custom-input form-control text-start @error('description') is-invalid @enderror"
                                        rows="3" required>{{ old('description', $feature->description) }}</textarea>
                                </div>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- اختيار الخدمة -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="service_id">الخدمة</label>
                                <div class="input-group">
                                    <span class="input-group-text h-100 fs-6 px-3"><i
                                            class="fas fa-list-alt"></i></span>
                                    <select name="service_id" id="service_id"
                                        class="custom-input form-select text-start @error('service_id') is-invalid @enderror"
                                        required>
                                        <option value="" disabled>اختر خدمة</option>
                                        @foreach ($services as $service)
                                        <option value="{{ $service->id }}" @if ($feature->service_id == $service->id)
                                            selected @endif>
                                            {{ $service->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('service_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- الصورة -->
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="image">الصورة</label>
                                <div class="input-group gap-2">
                                    <input type="file" name="image" id="image"
                                        class="custom-input form-control text-start @error('image') is-invalid @enderror" />
                                    <!-- عرض الصورة الحالية -->
                                    @if ($feature->getFirstMediaUrl('features'))
                                    <img src="{{ $feature->getFirstMediaUrl('features') }}" alt="Current Image"
                                        class="rounded-circle avatar-lg cursor-pointer" data-bs-toggle="modal"
                                        data-bs-target="#imageModal"
                                        data-image="{{ $feature->getFirstMediaUrl('features') }}" />
                                    @endif
                                </div>
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <!-- زر الحفظ -->
                        <button type="submit" class="btn btn-primary mt-4">
                            <span class="material-symbols-rounded fs-6 me-1">save</span> تعديل
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div class="modal fade custom-rtl" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header justify-content-between">
                <h5 class="modal-title" id="imageModalLabel">عرض الصورة</h5>
                <button type="button" class="btn btn-close m-0" data-bs-dismiss="modal" aria-label="Close">
                    <i class="material-symbols-rounded fs-4 text-dark ms-2">close</i>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="" alt="Large Image" class="img-fluid" id="modalImage" />
            </div>
        </div>
    </div>
</div>
@endsection

