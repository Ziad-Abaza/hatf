@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y my-2" dir="rtl">
    <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> الفوتر</span></h4>
    <!-- Header -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">بيانات الفوتر</h5>
            <a href="{{ route('dashboard.footer.edit', $footer->id ?? 0) }}" class="btn btn-primary">
                <span class="material-symbols-rounded fs-6 me-1">edit</span> تعديل
            </a>
        </div>
    </div>

    <!-- Footer Data -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($footer)
                    <div class="row searchable-item">
                        <!-- البريد الإلكتروني -->
                        <div class="col-12 col-md-6 mb-3">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-4 text-end text-muted fw-bold">
                                    البريد الإلكتروني:
                                </div>
                                <div class="col-12 col-md-8">
                                    <span class="text-dark">{{ $footer->email }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- رقم الهاتف -->
                        <div class="col-12 col-md-6 mb-3">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-4 text-end text-muted fw-bold">
                                    رقم الهاتف:
                                </div>
                                <div class="col-12 col-md-8">
                                    <span class="text-dark">{{ $footer->phone }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- تويتر -->
                        <div class="col-12 col-md-6 mb-3">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-4 text-end text-muted fw-bold">
                                    منصة X (تويتر):
                                </div>
                                <div class="col-12 col-md-8">
                                    <a href="{{ $footer->twitter }}" target="_blank" class="text-primary">
                                        {{ $footer->twitter }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- يوتيوب -->
                        <div class="col-12 col-md-6 mb-3">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-4 text-end text-muted fw-bold">
                                    يوتيوب:
                                </div>
                                <div class="col-12 col-md-8">
                                    <a href="{{ $footer->youtube }}" target="_blank" class="text-danger">
                                        {{ $footer->youtube }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- فيسبوك -->
                        <div class="col-12 col-md-6 mb-3">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-4 text-end text-muted fw-bold">
                                    فيسبوك:
                                </div>
                                <div class="col-12 col-md-8">
                                    <a href="{{ $footer->facebook }}" target="_blank" class="text-info">
                                        {{ $footer->facebook }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="alert alert-warning text-center" role="alert">
                        لا توجد بيانات للفوتر. يمكنك إضافة البيانات الآن.
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
