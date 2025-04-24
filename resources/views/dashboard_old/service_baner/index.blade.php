@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span>بانر </h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.service_banners.create') }}" class="btn btn-primary" style="color: #fff">
                    انشاء بانر 
                </a>
            </div>
        </div>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                <table class="table table-hover">

                    <thead>
                        <tr>
                            <th>العنوان الاول</th>
                            <th>العنوان الثانى</th>
                            <th>صورة</th>
                            <th>المحتوى</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @foreach ($serviceBaners as $serviceBaner)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ Str::limit($serviceBaner->title, 12, '...') }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ Str::limit($serviceBaner->second_title, 12, '...') }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ Str::limit($serviceBaner->description, 12, '...') }}</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                            <img src="{{ $serviceBaner->getFirstMediaUrl('services_baner') ?: asset('default-image.jpg') }}"
                                                alt="Service Image" class="rounded-circle" width="50" height="50">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">

                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.service_banners.edit', $serviceBaner->id) }}">
                                                <i class="ti ti-pencil me-1"></i>
                                                تعديل
                                            </a>
                                            <form action="{{ route('dashboard.service_banners.destroy', $serviceBaner->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"
                                                    onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">
                                                    <i class="ti ti-trash me-1"></i> مسح
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>

                <div class="d-flex justify-content-center">
                    {{ $serviceBaners->links() }}

                </div>


            </div>
        </div>

        <!--/ Hoverable Table rows -->

    </div>
@endsection
