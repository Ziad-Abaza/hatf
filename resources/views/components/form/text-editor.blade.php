@props([
'name',
'label' => '',
'value' => '',
'required' => false,
'id' => null
])

@php
$id = $id ?? $name;
@endphp

<div class="mb-3">
    @if($label)
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif
    <textarea id="{{ $id }}" name="{{ $name }}" class="form-control text-editor @error($name) is-invalid @enderror"
        rows="10">{{ old($name, $value) }}</textarea>

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

@once
@push('styles')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style>
    .ql-editor {
        min-height: 200px;
        direction: rtl;
        text-align: right;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll('.text-editor').forEach(function(textarea) {
                    const quillContainer = document.createElement('div');
                    quillContainer.style.minHeight = "200px";
                    textarea.style.display = "none";
                    textarea.parentNode.insertBefore(quillContainer, textarea);

                    const quill = new Quill(quillContainer, {
                        theme: 'snow',
                        placeholder: 'اكتب محتوى المقال هنا...',
                        modules: {
                            toolbar: [
                                [{ 'header': [1, 2, 3, false] }],
                                ['bold', 'italic', 'underline', 'strike'],
                                [{'list': 'ordered'}, {'list': 'bullet'}],
                                ['link', 'image'],
                                ['clean']
                            ]
                        }
                    });

                    // Sync content with textarea
                    quill.on('text-change', function () {
                        textarea.value = quill.root.innerHTML;
                    });

                    // Load old content
                    quill.root.innerHTML = textarea.value;
                });
            });
</script>
@endpush
@endonce
