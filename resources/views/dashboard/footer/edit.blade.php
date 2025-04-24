@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
    <form action="{{ route('dashboard.footer.update', $footer->id) }}" method="POST" enctype="multipart/form-data"
        class="card shadow border-0 custom-rtl">
        @csrf
        @method('PUT')

        <div class="card-body">
            <!-- البريد الإلكتروني -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="basic-default-email" class="form-label">البريد الإلكتروني</label>
                    <div class="input-group">
                        <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-envelope"></i></span>
                        <input type="text" name="email" value="{{ old('email', $footer->email) }}"
                            id="basic-default-email"
                            class="custom-input form-control text-start @error('email') is-invalid @enderror"
                            placeholder="اكتب بريد المنصة" aria-label="john.doe"
                            aria-describedby="basic-default-email2" />
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-text">بإمكانك استخدام الحروف، الأرقام، والنقاط.</div>
                </div>

                <!-- رقم الهاتف -->
                <div class="col-md-6">
                    <label for="basic-default-phone" class="form-label">رقم الهاتف</label>
                    <div class="input-group">
                        <span class="input-group-text h-100 fs-6 px-3"><i class="fas fa-phone"></i></span>
                        <input type="tel" name="phone" value="{{ old('phone', $footer->phone) }}"
                            class="custom-input form-control text-start @error('phone') is-invalid @enderror"
                            id="basic-default-phone" placeholder="+966 5XXXXXXXX" maxlength="13" inputmode="numeric" />
                        @error('phone')
                        <div class="form-text">يجب أن يبدأ بـ +966</div>
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- الروابط الاجتماعية -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="basic-default-facebook" class="form-label">فيسبوك</label>
                    <div class="input-group">
                        <span class="input-group-text h-100 fs-6 px-3"><i class="fab fa-facebook"></i></span>
                        <input type="url" name="facebook"
                            class="custom-input form-control text-start @error('facebook') is-invalid @enderror"
                            value="{{ old('facebook', $footer->facebook) }}" id="basic-default-facebook"
                            placeholder="اكتب رابط فيسبوك" />
                        @error('facebook')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="basic-default-youtube" class="form-label">يوتيوب</label>
                    <div class="input-group">
                        <span class="input-group-text h-100 fs-6 px-3"><i class="fab fa-youtube"></i></span>
                        <input type="url" name="youtube"
                            class="custom-input form-control text-start @error('youtube') is-invalid @enderror"
                            value="{{ old('youtube', $footer->youtube) }}" id="basic-default-youtube"
                            placeholder="اكتب رابط يوتيوب" />
                        @error('youtube')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="basic-default-twitter" class="form-label">منصة X (تويتر)</label>
                    <div class="input-group">
                        <span class="input-group-text h-100 fs-6 px-3"><i class="fab fa-twitter"></i></span>
                        <input type="url" name="twitter"
                            class="custom-input form-control text-start @error('twitter') is-invalid @enderror"
                            value="{{ old('twitter', $footer->twitter) }}" id="basic-default-twitter"
                            placeholder="اكتب رابط منصة X" />
                        @error('twitter')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- زر الإرسال -->
                <div class="col-md-6 d-flex align-items-end text-center max-width-400 my-2 mx-auto">
                    <button type="submit" class="btn btn-primary m-0 btn-lg w-100 rounded-pill">
                        <span class="material-symbols-rounded fs-6 me-1">save</span> تحديث
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
