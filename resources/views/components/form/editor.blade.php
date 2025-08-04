@props(['name', 'label' => '', 'required' => false, 'placeholder' => 'Type here...', 'value' => ''])

@php
    $fieldId = 'quill_' . Str::slug($name . '_' . uniqid());
    $inputValue = old($name, $value);
@endphp

<div class="mb-3">
    @if ($label)
        <label for="{{ $fieldId }}" class="form-label">
            {{ $label }}
            @if ($required)
                <sup class="text-danger">*</sup>
            @endif
        </label>
    @endif

    <div x-data x-init="const quill = new Quill($refs['{{ $fieldId }}'], {
        theme: 'snow',
        placeholder: '{{ $placeholder }}',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike'],
                [{ header: [1, 2, 3, false] }],
                [{ list: 'ordered' }, { list: 'bullet' }],
                ['link', 'image'],
                ['clean']
            ]
        }
    });
    
    quill.root.innerHTML = @js($inputValue);
    
    quill.on('text-change', () => {
        $refs.input.value = quill.root.innerHTML;
    });">
        <div x-ref="{{ $fieldId }}" class="form-control" style="min-height: 200px;"></div>
        <input type="hidden" name="{{ $name }}" x-ref="input" {{ $required ? 'required' : '' }} />
    </div>

    @error($name)
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>
