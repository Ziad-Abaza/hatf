@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> سكشن / تعديل</h4>
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
                            <form action="{{ route('dashboard.service.sectshion.update', $serviceSectshion->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label">العنوان</label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ $serviceSectshion->title }}" required>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">الصورة</label>
                                    <input type="file" name="image" class="form-control">
                                    @if ($serviceSectshion->getFirstMediaUrl('sub_services'))
                                        <img src="{{ $serviceSectshion->getFirstMediaUrl('sub_services') }}" alt="Current Image"
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
    <script>
        CKEDITOR.replace('descraption_ar', {
            contentsLangDirection: 'rtl', // Set text direction to right-to-left
            language: 'ar' // Optionally, set the language to Arabic
        });
    </script>
@endsection
