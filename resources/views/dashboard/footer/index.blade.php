@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> الفوتر</h4>
        {{--
        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.header.create') }}" class="btn btn-primary" style="color: #fff">
                    Create FAQ
                </a>
            </div>
        </div> --}}

        <!-- Hoverable Table rows -->
        <div class="card">
            {{-- <h5 class="card-header">Hoverable rows</h5> --}}
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>ترتيب</th>
                            <th>الإيميل</th>
                            <th>الهاتف</th>
                            <th>منصة X</th>
                            <th>يوتيوب</th>
                            <th>فيس بوك</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        {{-- @foreach ($header as $head) --}}
                        <tr>
                            <td>
                                <span class="fw-medium">{{ $footer->id }}</span>
                            </td>
                            <td>
                                <span class="fw-medium">{{ $footer->email }}</span>
                            </td>
                            <td>
                                <span class="fw-medium">{{ $footer->phone }}</span>
                            </td>
                            <td>
                                <span class="fw-medium">{{ $footer->twitter }}</span>
                            </td>
                            <td>
                                <span class="fw-medium">{{ $footer->youtube }}</span>
                            </td>
                            <td>
                                <span class="fw-medium">{{ $footer->facebook }}</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('dashboard.footer.edit', $footer->id) }}"><i
                                                class="ti ti-pencil me-1"></i> تعديل</a>
                                        {{-- <a class="dropdown-item" href="{{ route('dashboard.faq.delete', $faq->id) }}"><i
                                                    class="ti ti-trash me-1"></i>
                                                Delete</a> --}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Hoverable Table rows -->

    </div>
@endsection
