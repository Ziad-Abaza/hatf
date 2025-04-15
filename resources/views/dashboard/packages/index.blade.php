@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> الباقات</h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.packages.create') }}" class="btn btn-primary" style="color: #fff">
                    انشاء باقة
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
                            <th>الصورة</th>
                            <th>رقم الهاتف</th>
                            <th>الترتيب</th>
                            <th>الاتاحة</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($package as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><img src="{{ asset('storage/images/' . $item->image) }}" alt="Package Image" width="50" /></td>
                                <td>{{ $item->number }}</td>
                                <td>{{ $item->order }}</td>
                                <td>{{ $item->availability == 'available' ? 'متاحة' : 'قريبا'}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('dashboard.packages.edit', $item->id) }}">
                                                <i class="ti ti-pencil me-1"></i> Edit
                                            </a>
                                            <form action="{{ route('dashboard.packages.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">
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
            </div>
        </div>
    </div>
@endsection
