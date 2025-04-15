@extends('web.layout.main')

@section('content')
    <section class="gallary" id="gallary"
        style="background-image: url({{ asset('storage/images/' . $section->business_show) }})">
        <div class="py-3">
            <div class="container">
                <div class="gallary-header head-p">
                    <div class="main-title">
                        <p style="margin-top: 100px">دفع الخدمة</p>
                        <img src="{{ asset('front/assets/imgs/main-title-bg.svg') }}" height="8" width="160"
                            alt="" />
                    </div>

                    <h5 class="head-t text-center fw-bold mb-3 mt-4">
                        اكمل الدفع لتبدا رحلتك معنا
                    </h5>
                </div>
            </div>
            <div class="container row justify-content-center">
                <div class="col-12 col-md-8">
                    <form style="height: 100%" class="bg-light p-3 align-content-around rounded" data-bs-theme="light">
                        @csrf

                        <div
                            style="
                              border-style: solid;
                              border-color: #8e8e4e;
                              margin-bottom: 30px;
                              padding: 10px;
                            ">
                            <div class="mb-12 col-12 col-md-12 text-end"
                                style="
                                  display: flex;
                                  justify-content: space-between;
                                  margin-top: 20px;
                                ">
                                <div>
                                    <p class="form-label text-dark fw-bold">رقم الفاتورة</p>
                                </div>
                                <div>
                                    <p id="invoiceNumber" class="form-label fw-bold" style="color: black">
                                        {{ $invoice->invoice_number }}
                                    </p>
                                </div>
                            </div>

                            <div class="mb-12 col-12 col-md-12 text-end"
                                style="
                          display: flex;
                          justify-content: space-between;
                          margin-top: 20px;
                        ">
                                <div>
                                    <p class="form-label text-dark fw-bold">تاريخ الطلب</p>
                                </div>
                                <div>
                                    <p id="orderDate" class="form-label fw-bold" style="color: black">
                                        {{ $invoice->created_at->format('Y/m/d') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Name -->
                            <div class="mb-12 col-12 col-md-12 text-end">
                                <label for="name" class="form-label text-dark fw-bold">اسمك الكريم</label>
                                <input disabled type="text" placeholder="الاسم الثلاثي"
                                    class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                    value=" {{ $invoice->name }}" />
                            </div>

                            <!-- Email -->
                            <div class="mb-12 col-12 col-md-12 text-end">
                                <label for="email" class="form-label text-dark fw-bold">البريد الالكتروني</label>
                                <input disabled type="email" autocomplete="email"
                                    class="form-control font-m @error('email') is-invalid @enderror" id="email"
                                    name="email" value=" {{ $invoice->email }}" />
                            </div>

                            <!-- Phone -->
                            <div class="mb-12 col-12 col-md-12 text-end">
                                <label for="phone" class="form-label text-dark fw-bold">هاتف التواصل</label>
                                <input disabled type="tel"
                                    class="form-control font-m @error('phone') is-invalid @enderror" id="phone"
                                    name="phone" value="{{ $invoice->phone }}" />
                            </div>

                            <!-- Service -->
                            <div class="mb-12 col-12 col-md-12 text-end" style="color: black;">
                                <label for="service" class="form-label text-dark fw-bold">الخدمة</label>
                                <div id="service" class="form-label fw-bold border border-dark p-2"
                                    style="border-radius: 7px; background: #e9ecef;">
                                    {!! $invoice->service !!}
                                </div>
                            </div>

                            <!-- Total Amount -->
                            <div class="mb-12 col-12 col-md-12 text-end"
                                style="
                        display: flex;
                        justify-content: space-between;
                        margin-top: 50px;
                      ">
                                <div>
                                    <p class="form-label text-dark fw-bold">اجمالى المبلغ</p>
                                </div>
                                <div>
                                    <p id="totalAmount" class="form-label fw-bold" style="color: black">
                                        {{ $invoice->amount }} ريال
                                    </p>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div
                                class="mb-12 col-12 text-center d-flex flex-column flex-md-row justify-content-center align-items-center">
                                <a href="{{ $url }}" class="btn btn-dark"> ادفع الان </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
