@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-5" dir="rtl">

    <!-- Form Card -->
    <div class="card shadow border-0 col-lg-8 mx-auto">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-start">تعديل باقة</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.packages.update', $package->id) }}" method="POST"
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

                    <!-- Image Upload -->
                    <div class="col-md-6">
                        <label for="image" class="form-label">الصورة</label>
                        <div class="input-group gap-2 d-flex">
                            <input type="file" name="image" id="image"
                                class="custom-input form-control text-start @error('image') is-invalid @enderror" />
                                @if ($package->image)
                                <div class="">
                                    <img src="{{ asset('storage/images/' . $package->image) }}" alt="Current Image"
                                        class="rounded-circle avatar-md cursor-pointer" data-bs-toggle="modal" data-bs-target="#imageModal"
                                        data-image="{{ asset('storage/images/' . $package->image) }}" />
                                </div>
                                @endif
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="col-md-6">
                        <label for="phone" class="form-label">رقم الهاتف</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-phone"></i></span>
                            <input type="text" name="number" id="phone"
                                class="custom-input form-control text-start @error('number') is-invalid @enderror"
                                placeholder="9665xxxxxxxx+" value="{{ old('number', $package->number) }}" required />
                            @error('number')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Order -->
                    <div class="col-md-6">
                        <label for="order" class="form-label">الترتيب</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i
                                    class="fas fa-sort-numeric-down"></i></span>
                            <input type="number" name="order" id="order"
                                class="custom-input form-control text-start @error('order') is-invalid @enderror"
                                placeholder="أدخل رقم الترتيب" value="{{ old('order', $package->order) }}" required />
                            @error('order')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Availability -->
                    <div class="col-md-6">
                        <label for="availability" class="form-label">الاتاحة</label>
                        <div class="input-group">
                            <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-check-circle"></i></span>
                            <select name="availability" id="availability"
                                class="custom-input form-control text-start @error('availability') is-invalid @enderror">
                                <option value="available" {{ old('availability', $package->availability) === 'available'
                                    ? 'selected' : '' }}>
                                    متاحة
                                </option>
                                <option value="soon" {{ old('availability', $package->availability) === 'soon' ?
                                    'selected' : '' }}>
                                    قريباً
                                </option>
                            </select>
                            @error('availability')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">
                            <span class="material-symbols-rounded fs-6 me-1">save</span> تحديث الباقة
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade custom-rtl" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
        aria-hidden="true">
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
</div>
@endsection
