@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">الفوتر /</span> تعديل</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-12">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">تعديل الفوتر</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.footer.update', $footer->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">الإيميل</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="email" value="{{ old('email', $footer->email) }}"
                                            id="basic-default-email"
                                            class="form-control @error('email') is-invalid @enderror" placeholder="اكتب بريد المنصة"
                                            aria-label="john.doe" aria-describedby="basic-default-email2" />
                                        @error('email')
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-text">بإمكانك استخدام الحروف، الأرقام، والنقاط.
                                        الهاتف</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-phone">الهاتف</label>
                                    <input type="number" name="phone" value="{{ old('phone', $footer->phone) }}"
                                        class="form-control @error('phone') is-invalid @enderror" id="basic-default-phone"
                                        placeholder="0512345678" />
                                    @error('phone')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="basic-default-facebook">فيسبوك</label>
                                    <input type="url" name="facebook"
                                        class="form-control @error('facebook') is-invalid @enderror"
                                        value="{{ old('facebook', $footer->facebook) }}" id="basic-default-facebook"
                                        placeholder="اكتب رابط فيسبوك" />
                                    @error('facebook')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="basic-default-youtube">يوتيوب</label>
                                    <input type="url" name="youtube"
                                        class="form-control @error('youtube') is-invalid @enderror"
                                        value="{{ old('youtube', $footer->youtube) }}" id="basic-default-youtube"
                                        placeholder="اكتب رابط يوتيوب" />
                                    @error('youtube')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="basic-default-twitter">منصة X</label>
                                    <input type="url" name="twitter"
                                        class="form-control @error('twitter') is-invalid @enderror"
                                        value="{{ old('twitter', $footer->twitter) }}" id="basic-default-twitter"
                                        placeholder="اكتب رابط منصةاكس" />
                                    @error('twitter')
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
