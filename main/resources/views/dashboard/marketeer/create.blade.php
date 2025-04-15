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
                        <form action="{{ route('dashboard.marketeer.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label" for="basic-default-name">إسم مسوق</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                        id="basic-default-name" placeholder="اكتب اسم واضح للمسوق" />
                                    @error('name')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label" for="basic-default-name">رقم المسوق</label>
                                    <input type="number" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                                        id="basic-default-name" placeholder="اكتب رقم واضح للمسوق" />
                                    @error('phone')
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
