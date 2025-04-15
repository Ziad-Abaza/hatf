@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> سكشن فرعية</h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.service.sectshion.create',$service->id) }}" class="btn btn-primary" style="color: #fff">
                    انشاء سكشن فرعية
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
                            <th>العنوان</th>
                            <th>الصورة</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @foreach ($subServices as $subService)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ Str::limit($subService->title, 12, '...') }}</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                            <img src="{{ $subService->getFirstMediaUrl('services_sectshions') ?: asset('default-image.jpg') }}"
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
                                                href="{{ route('dashboard.service.sectshion.edit', $subService->id) }}">
                                                <i class="ti ti-pencil me-1"></i>
                                                تعديلccc
                                            </a>
                                          <!--<form action="{{ route('dashboard.service.sectshion.destroy', $subService->id) }}"-->
                                          <!--      method="POST" style="display:inline;">-->
                                          <!--      @csrf-->
                                          <!--      @method('DELETE')-->
                                          <!--      <button type="submit" class="dropdown-item"-->
                                          <!--          onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">-->
                                          <!--          <i class="ti ti-trash me-1"></i> مسح-->
                                          <!--      </button>-->
                                          <!--  </form> -->
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>

                <div class="d-flex justify-content-center">
                    {{ $subServices->links() }}

                </div>


            </div>
        </div>

        <!--/ Hoverable Table rows -->

    </div>
@endsection
