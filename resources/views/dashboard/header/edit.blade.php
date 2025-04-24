<!-- resources/views/dashboard/header/edit.blade.php -->

@extends('dashboard.layout.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-gradient-dark p-3">
                    <h6 class="text-white mb-0">Edit Header</h6>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('dashboard.header.update', $header->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="form-floating mb-3">
                            <input type="text" name="title" id="title" class="form-control border border-dark ps-2"
                                value="{{ old('title', $header->title) }}" required>
                            <label for="title" class="text-secondary">Title</label>
                        </div>

                        <!-- Description -->
                        <div class="form-floating mb-3">
                            <textarea name="desc" id="desc" class="form-control border border-dark ps-2" rows="3"
                                required>{{ old('desc', $header->desc) }}</textarea>
                            <label for="desc" class="text-secondary">Description</label>
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label text-secondary">Image</label>
                            <input type="file" name="image" id="image" class="form-control border border-dark">
                            @if ($header->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/images/' . $header->image) }}" alt="Current Image"
                                    class="img-thumbnail rounded-5 shadow" style="width: 150px; height: 150px;">
                            </div>
                            @else
                            <p class="text-muted mt-2">No image uploaded yet.</p>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
