@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">خلفيات الموقع/</span> تعديل</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-12">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">تعديل خلفيات الموقع</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.section.update', $section->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-6 mb-3">
                                    <label for="formFile-header" class="form-label">الرئسية</label>
                                    <input type="file" name="header"
                                        class="form-control @error('header') is-invalid @enderror" id="formFile-header" />
                                    @error('header')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="formFileabout" class="form-label">نعرفك علينا</label>
                                    <input type="file" name="about"
                                        class="form-control @error('about') is-invalid @enderror" id="formFileabout" />
                                    @error('about')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="formFileservices" class="form-label">خدمتنا</label>
                                    <input type="file" name="services"
                                        class="form-control @error('services') is-invalid @enderror" id="formFileservices" />
                                    @error('services')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="formFilebusiness_show" class="form-label">أعمالنا</label>
                                    <input type="file" name="business_show"
                                        class="form-control @error('business_show') is-invalid @enderror" id="formFilebusiness_show" />
                                    @error('business_show')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="formFilesuccess_partners" class="form-label">شركاء النجاح</label>
                                    <input type="file" name="success_partners"
                                        class="form-control @error('success_partners') is-invalid @enderror" id="formFilesuccess_partners" />
                                    @error('success_partners')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">تحديث</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
