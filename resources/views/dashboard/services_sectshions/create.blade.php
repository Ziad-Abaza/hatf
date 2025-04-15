@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> سكشن/</span> انشاء</h4>
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
                            <form action="{{ route('dashboard.service.sectshion.store',$service->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">العنوان</label>
                                    <input type="text" name="title" class="form-control" required>
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



@section('js')
    <script>
        CKEDITOR.replace('descraption_ar', {
            contentsLangDirection: 'rtl', // Set text direction to right-to-left
            language: 'ar' // Optionally, set the language to Arabic
        });
    </script>
@endsection
