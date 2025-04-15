@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">المشرفون/</span> إضافة</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-12">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">إضافة مشرف</h5>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.admin.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">الإسم بالكامل</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="basic-default-fullname"
                                    placeholder="اكتب إسم المشرف بالكامل" />
                                @error('name')
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-email">الإيميل</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="email" id="basic-default-email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="example@gmail.com"
                                        aria-label="john.doe" aria-describedby="basic-default-email2" />
                                    @error('email')
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-text">بإمكانك استخدام الحروف، الأرقام، والنقاط.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">الهاتف</label>
                                <input type="number" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror" id="basic-default-phone"
                                    placeholder="0512345678" />
                                @error('phone')
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!--<div class="mb-3">-->
                            <!--    <label class="form-label" for="basic-default-password">الرقم السري</label>-->
                            <!--    <input type="password" name="password"-->
                            <!--        class="form-control @error('password') is-invalid @enderror" id="basic-default-password"-->
                            <!--        placeholder="" />-->
                            <!--    @error('password')-->
                            <!--        <div-->
                            <!--            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">-->
                            <!--            {{ $message }}-->
                            <!--        </div>-->
                            <!--    @enderror-->
                            <!--</div>-->

                            <button type="submit" class="btn btn-primary">إضافة</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
