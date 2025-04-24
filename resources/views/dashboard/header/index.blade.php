<!-- resources/views/dashboard/header/index.blade.php -->

@extends('dashboard.layout.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Header Information</h6>
                </div>
                <div class="card-body p-3">
                    @if ($header)
                    <div class="row">
                        <div class="col-md-12 mb-4 searchable-item">
                            <div
                                class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                <img src="{{ asset('storage/images/' . $header->image) }}" alt="{{ $header->title }}"
                                    class="w-10 me-3 mb-0" style="max-width: 100px;">
                                <div>
                                    <h6 class="mb-0 text-sm">{{ $header->title }}</h6>
                                    <p class="text-xs text-secondary">{{ $header->desc }}</p>
                                </div>
                                <div class="ms-auto">
                                    <a href="{{ route('dashboard.header.edit', $header->id) }}"
                                        class="btn btn-link text-dark px-3 mb-0">
                                        <i class="material-symbols-rounded text-sm me-2">edit</i>Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="alert alert-info text-center">
                        No header information available.
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
