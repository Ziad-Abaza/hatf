@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> مدونات/</span> انشاء</h4>
        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-12">
                    <div class="card-header d-flex justify-content-between align-items-center">
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

                        <div class="container">
                            <h2 class="mb-4">Create SubService</h2>
                            <form action="{{ route('dashboard.sub_services.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">العنوان</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>



                                <!-- Service -->
                                <div class="col-12">
                                    <label for="description" class="form-label text-dark fw-bold">المحتوى*</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                        dir="rtl" placeholder="أدخل الخدمة هنا">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">الخدمة</label>
                                    <select name="service_id" class="form-control" required>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">الصورة</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">حفظ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('css')
    <style>
        label {
            display: flex;
            justify-content: flex-end;
        }

        .form-control {
            border-radius: 0.375rem;
            box-shadow: none;
        }

        button {
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #555;
        }
    </style>
@endsection

@section('js')
    <script>
        CKEDITOR.replace('description', {
            contentsLangDirection: 'rtl',  // Set text direction to right-to-left
            language: 'ar'  // Optionally, set the language to Arabic
        });
    </script>
@endsection
