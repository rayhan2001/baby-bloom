@props(['name', 'label' => '', 'required' => false, 'accept' => 'image/*', 'multiple' => false])

@php
    $multipleAttr = $multiple ? 'multiple' : '';
    $inputName = $multiple ? $name . '[]' : $name;
@endphp

<div class="mb-3">
    @if ($label)
        <label class="form-label">
            {{ $label }}
            @if ($required)
                <sup class="text-danger">*</sup>
            @endif
        </label>
    @endif

    <input type="file" name="{{ $inputName }}" class="form-control @error($name) is-invalid @enderror"
        accept="{{ $accept }}" {{ $required ? 'required' : '' }} {{ $multipleAttr }}>

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
