@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> تعديل الباقة</h4>

        <div class="card mb-4">
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

                    <div class="mb-3">
                        <label for="image" class="form-label">الصورة</label>
                        <input type="file" name="image" class="form-control" id="image">
                        <img src="{{ asset('storage/images/' . $package->image) }}" alt="Package Image" width="100">
                    </div>

                    <div class="mb-3">
                        <label for="number" class="form-label">رقم الهاتف</label>
                        <input type="text" name="number" class="form-control" id="number"
                            value="{{ $package->number ?? '0530333218' }}">
                    </div>

                    <div class="mb-3">
                        <label for="order" class="form-label">الترتيب</label>
                        <input type="number" name="order" class="form-control" id="order"
                            value="{{ $package->order }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="availability" class="form-label">الاتاحة</label>
                        <select name="availability" class="form-control" id="availability">
                            <option value="available" {{ $package->availability == 'available' ? 'selected' : '' }}>متاحة</option>
                            <option value="soon" {{ $package->availability == 'soon' ? 'selected' : '' }}>قريبا</option>
                        </select>
                        @error('availability')
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    

                    <button type="submit" class="btn btn-primary">تحديث الباقة</button>
                </form>
            </div>
        </div>
    </div>
@endsection
