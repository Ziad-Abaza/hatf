@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2"><span class="text-muted fw-light">لوحة التحكم /</span> تعديل مراجعة</h4>
        <div class="row">
            <div class="col-xl">
                <div class="card mb-12">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h2 class="mb-4">تعديل المراجعة</h2>
                        <form action="{{ route('dashboard.reviews.update', $review->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label">الاسم</label>
                                <input type="text" name="name"
                                       class="form-control @error('name') is-invalid @enderror" required
                                       value="{{ old('name', $review->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Job Title -->
                            <div class="mb-3">
                                <label class="form-label">المسمى الوظيفي</label>
                                <input type="text" name="job_title"
                                       class="form-control @error('job_title') is-invalid @enderror"
                                       value="{{ old('job_title', $review->job_title) }}">
                                @error('job_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Content -->
                            <div class="mb-3">
                                <label class="form-label">المحتوى</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $review->content) }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Service -->
                            <div class="mb-3">
                                <label class="form-label">الخدمة</label>
                                <select name="service_id" class="form-control @error('service_id') is-invalid @enderror">
                                    @foreach ($services as $service)
                                    <option value="">الكل</option>

                                        <option value="{{ $service->id }}" {{ old('service_id', $review->service_id) == $service->id ? 'selected' : '' }}>
                                            {{ $service->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('service_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Rating -->
                            <div class="mb-3">
                                <label class="form-label">التقييم</label>
                                <select name="rating" class="form-control @error('rating') is-invalid @enderror" required>
                                    <option value="">اختر التقييم</option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ old('rating', $review->rating) == $i ? 'selected' : '' }}>
                                            ⭐ {{ $i }} / 5
                                        </option>
                                    @endfor
                                </select>
                                @error('rating')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image Upload with Preview -->
                            <div class="mb-3">
                                <label class="form-label">الصورة</label>
                                <input type="file" name="image"
                                       class="form-control @error('image') is-invalid @enderror" accept="image/*"
                                       onchange="previewImage(event)">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="mt-2">
                                    <img id="imagePreview"
                                         src="{{ $review->getFirstMediaUrl('reviews') ?? '' }}"
                                         alt="صورة المعاينة" class="img-thumbnail"
                                         style="max-width: 150px; {{ $review->getFirstMediaUrl('reviews') ? '' : 'display: none;' }}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">تحديث التقييم</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function () {
                const img = document.getElementById("imagePreview");
                img.src = reader.result;
                img.style.display = "block";
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection
