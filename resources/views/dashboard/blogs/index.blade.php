@extends('dashboard.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Header -->
        <h4 class="py-2 text-end"><span class="text-muted fw-light">لوحة التحكم /</span> المدونة</span></h4>

    <!-- Button for Adding New Blog -->
    <div class="my-4 text-end">
        <a href="{{ route('dashboard.blogs.create') }}" class="btn btn-primary d-block d-lg-inline-block">
            <i class="ti ti-plus me-1"></i> إضافة مدونة جديدة
        </a>
    </div>

    <!-- Desktop Table -->
    <div class="card d-none d-md-block">
        {{-- Start paginate --}}
        <div class="d-flex justify-content-center my-4">
            <nav aria-label="Page navigation" class="pagination-container">
                <ul class="pagination pagination-sm m-0 p-0">
                    <!-- Previous Button -->
                    <li class="page-item {{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link rounded-start"
                            href="{{ $blogs->onFirstPage() ? '#' : $blogs->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->previousPageUrl() }}"
                            aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <!-- Page Numbers -->
                    @php
                    $currentPage = $blogs->currentPage();
                    $lastPage = $blogs->lastPage();
                    $start = max(1, $currentPage - 1);
                    $end = min($lastPage, $currentPage + 1);
                    @endphp

                    @if ($start > 1)
                    <li class="page-item d-none d-sm-block">
                        <a class="page-link"
                            href="{{ $blogs->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->url(1) }}">1</a>
                    </li>
                    @if ($start > 5)
                    <li class="page-item disabled d-none d-sm-block">
                        <span class="page-link">...</span>
                    </li>
                    @endif
                    @endif

                    @for ($i = $start; $i <= $end; $i++) <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                        <a class="page-link {{ $i == $currentPage ? 'bg-light border-dark-subtle' : '' }}"
                            href="{{ $blogs->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->url($i) }}">{{
                            $i }}</a>
                        </li>
                        @endfor

                        @if ($end < $lastPage) @if ($end < $lastPage - 1) <li class="page-item disabled d-none d-sm-block">
                            <span class="page-link">...</span>
                            </li>
                            @endif
                            <li class="page-item d-none d-sm-block">
                                <a class="page-link"
                                    href="{{ $blogs->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->url($lastPage) }}">{{
                                    $lastPage }}</a>
                            </li>
                            @endif

                            <!-- Next Button -->
                            <li class="page-item {{ $blogs->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link rounded-end"
                                    href="{{ $blogs->hasMorePages() ? $blogs->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->nextPageUrl() : '#' }}"
                                    aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                </ul>
            </nav>
        </div>
        {{-- End paginate --}}
        <div class="custom-scrollbar">
            <table class="table table-hover custom-rtl">
                <thead class="table-light sticky-header text-center">
                    <tr>
                        <th>ترتيب</th>
                        <th>عنوان المدونة</th>
                        <th>الوصف</th>
                        <th>صورة المدونة</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php $counter = 1; @endphp
                    @foreach ($blogs as $blog)
                    <tr class="searchable-item">
                        <td>{{ $counter++ }}</td>
                        <td>{{ $blog->title_ar }}</td>
                        <td>
                            <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                                data-bs-target="#descriptionModal" data-description="{{ $blog->descraption_ar }}">
                                {{ Str::limit($blog->descraption_ar, 30, '...') }}
                            </a>
                        </td>
                        <td>
                            <img src="{{ asset('storage/images/' . $blog->img) }}" alt="Blog Image"
                                class="rounded-circle avatar-sm cursor-pointer" data-bs-toggle="modal"
                                data-bs-target="#imageModal" data-image="{{ asset('storage/images/' . $blog->img) }}" />
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 hide-arrow" data-bs-toggle="dropdown">
                                    <span class="material-symbols-rounded fs-6">more_vert</span>
                                </button>
                                <div class="dropdown-menu text-end">
                                    <a class="dropdown-item" href="{{ route('dashboard.blogs.edit', $blog->id) }}">
                                        <span class="material-symbols-rounded text-primary fs-6 me-1">edit</span> تعديل
                                    </a>
                                    <form action="{{ route('dashboard.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item"
                                            onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">
                                            <span class="material-symbols-rounded text-danger fs-6 me-1">delete</span> Delete
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

    <!-- Mobile Cards -->
    <div class="d-block d-md-none">
        {{-- Start paginate --}}
        <div class="d-flex justify-content-center my-4">
            <nav aria-label="Page navigation" class="pagination-container">
                <ul class="pagination pagination-sm m-0 p-0">
                    <!-- Previous Button -->
                    <li class="page-item {{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link rounded-start"
                            href="{{ $blogs->onFirstPage() ? '#' : $blogs->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->previousPageUrl() }}"
                            aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <!-- Page Numbers -->
                    @php
                    $currentPage = $blogs->currentPage();
                    $lastPage = $blogs->lastPage();
                    $start = max(1, $currentPage - 1);
                    $end = min($lastPage, $currentPage + 1);
                    @endphp

                    @if ($start > 1)
                    <li class="page-item d-none d-sm-block">
                        <a class="page-link"
                            href="{{ $blogs->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->url(1) }}">1</a>
                    </li>
                    @if ($start > 5)
                    <li class="page-item disabled d-none d-sm-block">
                        <span class="page-link">...</span>
                    </li>
                    @endif
                    @endif

                    @for ($i = $start; $i <= $end; $i++) <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                        <a class="page-link {{ $i == $currentPage ? 'bg-light border-dark-subtle' : '' }}"
                            href="{{ $blogs->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->url($i) }}">{{
                            $i }}</a>
                        </li>
                        @endfor

                        @if ($end < $lastPage) @if ($end < $lastPage - 1) <li class="page-item disabled d-none d-sm-block">
                            <span class="page-link">...</span>
                            </li>
                            @endif
                            <li class="page-item d-none d-sm-block">
                                <a class="page-link"
                                    href="{{ $blogs->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->url($lastPage) }}">{{
                                    $lastPage }}</a>
                            </li>
                            @endif

                            <!-- Next Button -->
                            <li class="page-item {{ $blogs->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link rounded-end"
                                    href="{{ $blogs->hasMorePages() ? $blogs->appends(['start_date' => request('start_date'), 'end_date' => request('end_date')])->nextPageUrl() : '#' }}"
                                    aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                </ul>
            </nav>
        </div>
        {{-- End paginate --}}
        @php $counter = 1; @endphp
        @foreach ($blogs as $blog)
        <div class="card mb-3">
            <div class="card-body custom-rtl searchable-item">
                <div class="row g-2 mb-3">
                    <div class="col-12">
                        <h6 class="mb-1">#: {{ $counter++ }}</h6>
                        <h5 class="mb-1">{{ $blog->title_ar }}</h5>
                        <a href="#" class="description-preview show-full-description" data-bs-toggle="modal"
                            data-bs-target="#descriptionModal" data-description="{{ $blog->descraption_ar }}">
                            {{ Str::limit($blog->descraption_ar, 70, '...') }}
                        </a>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-12 text-center" style="height: fit-content;">
                        <img src="{{ asset('storage/images/' . $blog->img) }}" alt="Blog Image"
                            class="w-100 h-75 mx-auto cursor-pointer" data-bs-toggle="modal"
                            data-bs-target="#imageModal" data-image="{{ asset('storage/images/' . $blog->img) }}" />
                        <small class="d-block mt-1">صورة المدونة</small>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-start pt-2">
                    <a href="{{ route('dashboard.blogs.edit', $blog->id) }}"
                        class="btn btn-icon btn-sm btn-outline-primary">
                        <span class="material-symbols-rounded text-primary">edit</span>
                    </a>
                    <form action="{{ route('dashboard.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon btn-sm btn-outline-danger" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟');">
                            <span class="material-symbols-rounded text-danger">delete</span> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Description Modal -->
    <div class="modal fade custom-rtl" id="descriptionModal" tabindex="-1" aria-labelledby="descriptionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h5 class="modal-title" id="descriptionModalLabel">الوصف الكامل</h5>
                    <button type="button" class="btn btn-close m-0" data-bs-dismiss="modal" aria-label="Close">
                        <i class="material-symbols-rounded fs-4 text-dark ms-2">close</i>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="fullDescription"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade custom-rtl" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h5 class="modal-title" id="imageModalLabel">عرض الصورة</h5>
                    <button type="button" class="btn btn-close m-0" data-bs-dismiss="modal" aria-label="Close">
                        <i class="material-symbols-rounded fs-4 text-dark ms-2">close</i>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="" alt="Large Image" class="img-fluid" id="modalImage" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
