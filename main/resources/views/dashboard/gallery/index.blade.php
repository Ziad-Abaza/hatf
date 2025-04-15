@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">صورة/</span> إضافة</h4>

        <!-- Image Upload Form -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <form action="{{ route('dashboard.gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row" style="align-items: flex-end;">

                    <div class="col-md-9">
                        <label for="image" class="form-label">اختر صورة</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                        
                        @error('image')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">رفع الصورة</button>
                    </div>

                    </div>

                    
                    <div class="col-md-12">
                        <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 100%; height: auto;" />
                    </div>

                </form>
            </div>
        </div>

        <!-- Fetch All Images -->
        <h5 class="mb-3">معرض الصور</h5>
        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-4 mb-3">
                    <div class="card" style="height: 300px; width:300px">
                        <img src="{{ asset('storage/images/' . $image->path) }}" class="card-img-top" alt="{{ $image->path }}">
                        <div class="card-body text-center">
                            <div style="display: flex; justify-content: space-evenly;">
                            <form action="{{ route('dashboard.gallery.destroy', $image->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذه الصورة؟')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">حذف</button>
                            </form>
                            <button class="btn btn-secondary" onclick="copyToClipboard('{{ asset('storage/images/' . $image->path) }}')">نسخ الرابط</button>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection


@section('js')

<script>
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.src = URL.createObjectURL(event.target.files[0]);
        imagePreview.style.display = 'block';
    }

    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            alert('تم نسخ الرابط  ');
        }).catch(err => {
            console.error('فشل النسخ: ', err);
        });
    }
</script>

@endsection