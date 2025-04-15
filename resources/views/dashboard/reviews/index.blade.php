@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> مراجعات</h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.reviews.create') }}" class="btn btn-primary" style="color: #fff">
                    انشاء مراجعة
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


                <table class="table table-striped table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>الاسم</th>
                            <th>المسمى الوظيفي</th>
                            <th>المحتوى</th>
                            <th>التقييم</th>
                            <th>الخدمة</th>
                            <th>الصورة</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach ($reviews as $review)
                            <tr>
                                <!-- Name -->
                                <td>
                                    <span class="fw-bold text-primary">{{ Str::limit($review->name, 15, '...') }}</span>
                                </td>
                
                                <!-- Job Title -->
                                <td>
                                    <span class="fw-medium text-secondary">{{ Str::limit($review->job_title, 15, '...') }}</span>
                                </td>
                
                                <!-- Content -->
                                <td>
                                    <span class="text-muted">{{ Str::limit($review->content, 20, '...') }}</span>
                                </td>
                
                                <!-- Rating -->
                                <td>
                                    <span class="badge bg-warning text-dark p-2 fs-6">
                                        ⭐ {{ $review->rating }} / 5
                                    </span>
                                </td>
                
                                <!-- Service -->
                                <td>
                                    <span class="badge bg-info text-white p-2">
                                        {{ $review->service->name ?? 'الكل' }}
                                    </span>
                                </td>
                
                                <!-- Profile Image -->
                                <td>
                                    <img src="{{ $review->getFirstMediaUrl('reviews') ?: asset('default-image.jpg') }}"
                                         alt="Review Image" class="rounded-circle border border-secondary" width="50" height="50">
                                </td>
                
                                <!-- Actions -->
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-settings"></i> خيارات
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item text-primary"
                                                   href="{{ route('dashboard.reviews.edit', $review->id) }}">
                                                    <i class="ti ti-pencil me-1"></i> تعديل
                                                </a>
                                            </li>
                                            <li>
                                                <form action="{{ route('dashboard.reviews.destroy', $review->id) }}" method="POST"
                                                      onsubmit="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="ti ti-trash me-1"></i> مسح
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                

                <div class="d-flex justify-content-center">
                    {{ $reviews->links() }}

                </div>


            </div>
        </div>

        <!--/ Hoverable Table rows -->

    </div>
@endsection
