@extends('dashboard.layout.main')

@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-2">
            <span class="text-muted fw-light">لوحة التحكم /</span> الاعدادات
        </h4>
        <div class="card">
            <div class="card-header">
                <h5>تحديث الإعدادات</h5>
            </div>
            <div class="card-body">
                <form id="settings-form" method="POST" action="{{ route('dashboard.settings.update') }}">
                    @csrf
                    @method('PUT')
                    <!-- Show Current Description -->
                    <div class="mb-3">
                        <label for="descraption" class="form-label">الوصف الحالي</label>
                        <textarea id="descraption" name="descraption" class="form-control" rows="4">{{ $description }}</textarea>
                    </div>


                    <!-- Show Current Description -->
                    <div class="mb-3">
                        <label for="keyWords" class="form-label">الكلمات المفتاحية</label>
                        <textarea id="descraption" name="keyWords" class="form-control" rows="4">{{ $keyWords }}</textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">تحديث</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional: Success or Error Alert -->
    <div id="alert-container" class="mt-3"></div>
@endsection


