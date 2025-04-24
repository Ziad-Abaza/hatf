@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y" dir="rtl">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">لوحة التحكم/</span> إضافة مسوق</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-12">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-start"> إضافة عمل جديد </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.customer.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label" for="basic-default-name">إسم العميل</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                        id="basic-default-name" placeholder="اكتب اسم واضح للعميل" />
                                    @error('name')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="basic-default-name">يريد العميل</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" id="basic-default-name"
                                        placeholder="اكتب بريد واضح للعميل" />
                                    @error('email')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="basic-default-name">رقم العميل</label>
                                    <input type="number" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}" id="basic-default-name"
                                        placeholder="اكتب رقم واضح للمسوق" />
                                    @error('phone')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="select2Basic" class="form-label">الخدمة</label>
                                    <select id="select2Basic" name="service" class="select2 form-select form-select-lg"
                                        data-allow-clear="true">
                                        <option value="تصميم" selected>تصميم</option>
                                        <option value="تسويق">تسويق</option>
                                        <option value="برمجة">برمجة</option>
                                        <option value="صوتي و مرئي">صوتي و مرئي</option>
                                        <option value="أخرى">أخرى</option>
                                    </select>
                                </div>

                                <div class="col-12 mb-3">
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

                            <button type="submit" class="btn btn-primary">إضافة المسوق</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
