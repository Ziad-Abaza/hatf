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
                        <form action="{{ route('dashboard.blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label" for="basic-default-title_ar">العنوان (عربي)</label>
                                    <input type="text" name="title_ar"
                                        class="form-control @error('title_ar') is-invalid @enderror" id="basic-default-title_ar"
                                        placeholder="العنوان (عربي)" value="{{ old('title_ar') }}" />
                                    @error('title_ar')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label" for="descraption_ar">المقال (عربي)</label>
                                    <textarea name="descraption_ar" class="form-control @error('descraption_ar') is-invalid @enderror" 
                                              id="descraption_ar" placeholder="المقال (عربي)">{{ old('descraption_ar') }}</textarea>
                                    @error('descraption_ar')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-image">الصورة</label>
                                <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" id="basic-default-img" />
                                @error('img')
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">إرسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('js')
    <script>
        CKEDITOR.replace('descraption_ar', {
            contentsLangDirection: 'rtl',  // Set text direction to right-to-left
            language: 'ar'  // Optionally, set the language to Arabic
        });
    </script>
@endsection
