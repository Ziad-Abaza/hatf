@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> بانر / تعديل</h4>
        <div class="row">
            <div class="col-xl">
                <div class="card mb-12">
                    <div class="card-header d-flex justify-content-between align-items-center"></div>

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
                            <h2 class="mb-4">تعديل بانر</h2>
                            <form action="{{ route('dashboard.service_banners.update', $serviceBaner->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label">العنوان الاول</label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ $serviceBaner->title }}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">العنوان الثانى</label>
                                    <input type="text" name="second_title" class="form-control"
                                        value="{{ $serviceBaner->second_title }}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">المحتوى</label>
                                    <textarea name="description" class="form-control" required>{{ $serviceBaner->description }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">الصورة</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">الخدمة</label>
                                    <select name="service_id" class="form-control" required>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}" 
                                                @if ($serviceBaner->service_id == $service->id) selected @endif>
                                                {{ $service->name }}
                                            </option>
                                        @endforeach
                                    </select>
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
    <script>
        CKEDITOR.replace('description', { // Use 'description' if it's the correct field name
            contentsLangDirection: 'rtl', // Set text direction to right-to-left
            language: 'ar' // Optionally, set the language to Arabic
        });
    </script>
@endsection
