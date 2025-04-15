@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> مدونات</h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.blogs.create') }}" class="btn btn-primary" style="color: #fff">
                    انشاء مدونة
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
                            <th>الرقم</th>
                            <th>العنوان (عربي)</th>
                            <th>الصورة</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ $blog->id }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ $blog->title_ar }}</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                            <img src="{{ asset('storage/images/' . $blog->img) }}" alt="Avatar"
                                                class="rounded-circle" />
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
                                           
                                            <a class="dropdown-item" href="{{ route('dashboard.blogs.edit',$blog->id) }}">
                                                <i class="ti ti-pencil me-1"></i>
                                                 Edit
                                                </a>


                                            <form action="{{ route('dashboard.blogs.destroy', $blog->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="dropdown-item"
                                                    onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">
                                                    <i class="ti ti-trash me-1"></i> Delete
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
                    {{ $blogs->links() }}

                </div>


            </div>
        </div>

        <!--/ Hoverable Table rows -->

    </div>
@endsection
