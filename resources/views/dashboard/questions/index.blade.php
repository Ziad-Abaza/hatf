@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span>الاسئلة </h4>

        <div class="col-lg-4 pb-4">
            <div class="demo-inline-spacing">
                <a href="{{ route('dashboard.questions.create') }}" class="btn btn-primary" style="color: #fff">
                    انشاء الاسئلة 
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
                            <th>السؤال</th>
                            <th>الاجابة</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                        @foreach ($questions as $question)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{ Str::limit($question->title, 12, '...') }}</span>
                                </td>
                                <td>
                                    <span class="fw-medium">{{ Str::limit($question->description, 12, '...') }}</span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">

                                            <a class="dropdown-item"
                                                href="{{ route('dashboard.questions.edit', $question->id) }}">
                                                <i class="ti ti-pencil me-1"></i>
                                                تعديل
                                            </a>
                                            <form action="{{ route('dashboard.questions.destroy', $question->id) }}"
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
                    {{ $questions->links() }}

                </div>


            </div>
        </div>

        <!--/ Hoverable Table rows -->

    </div>
@endsection
