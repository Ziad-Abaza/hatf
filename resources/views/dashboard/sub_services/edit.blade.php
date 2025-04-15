@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> خدمة فرعية/ تعديل</h4>
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
                            <h2 class="mb-4">Edit SubService</h2>
                            <form action="{{ route('dashboard.sub_services.update', $subService->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label">العنوان</label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ $subService->title }}" required>
                                </div>


                                <!-- description -->
                                <div class="mb-12 col-12 col-md-12 text-end">
                                    <label for="description" class="form-label text-dark fw-bold">المحتوى*</label>
                                    <textarea type="text" class="form-control font-m @error('description') is-invalid @enderror" id="description"
                                        name="description">{{ old('description', $subService->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">الخدمة</label>
                                    <select name="service_id" class="form-control" required>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}"
                                                @if ($subService->service_id == $service->id) selected @endif>
                                                {{ $service->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">الصورة</label>
                                    <input type="file" name="image" class="form-control">
                                    @if ($subService->getFirstMediaUrl('sub_services'))
                                        <img src="{{ $subService->getFirstMediaUrl('sub_services') }}" alt="Current Image"
                                            class="img-fluid mt-2" width="150">
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">تعديل</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <style>
        label {
            display: flex;
        }
    </style>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
            imagePreview.style.display = 'block';
        }

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                alert('تم نسخ الرابط');
            }).catch(err => {
                console.error('فشل النسخ: ', err);
            });
        }
    </script>
    <script>
        CKEDITOR.replace('description', {
            contentsLangDirection: 'rtl', // Set text direction to right-to-left
            language: 'ar' // Optionally, set the language to Arabic
        });
    </script>
@endsection
