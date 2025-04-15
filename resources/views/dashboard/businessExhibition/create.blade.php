@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y" dir="rtl">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">معرض الأعمال/</span> إضافة عمل</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-12">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-start"> إضافة عمل جديد </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.business.exhibition.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="basic-default-name">إسم العمل</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                        id="basic-default-name" placeholder="اكتب اسم واضح للعمل" />
                                    @error('name')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="formFile" class="form-label text-start">إضافة صوره العمل</label>
                                    <input type="file" name="image"
                                        class="form-control @error('image') is-invalid @enderror" id="formFile" />
                                    @error('image')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="desc" class="form-label">الوصف</label>
                                    <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" id="desc" rows="3">{{ old('desc') }}</textarea>
                                    @error('desc')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">إضافة العمل</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
