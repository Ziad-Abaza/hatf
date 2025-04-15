@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> ميزة / تعديل</h4>
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
                            <h2 class="mb-4">تعديل ميزة</h2>
                            <form action="{{ route('dashboard.advantages.update', $advantage->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label">العنوان</label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ $advantage->title }}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">المحتوى</label>
                                    <textarea name="description" class="form-control" required>{{ $advantage->description }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">الخدمة</label>
                                    <select name="service_id" class="form-control" required>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}" 
                                                @if ($advantage->service_id == $service->id) selected @endif>
                                                {{ $service->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">الحالة</label>
                                    <select name="status" class="form-control">
                                        <option value="">اختر</option>
                                        <option value="you" @if ($advantage->status == "you") selected @endif>
                                            ميزة للعميل
                                        </option>
                                        <option value="our" @if ($advantage->status == "our") selected @endif>
                                            ميزة لنا
                                        </option>
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
