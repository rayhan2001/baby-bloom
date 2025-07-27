@props(['name', 'label' => '', 'type' => 'text', 'required' => false, 'placeholder' => '', 'value' => null])

@php
    $inputValue = $value ?? old($name);
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

    <input type="{{ $type }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
        placeholder="{{ $placeholder }}" value="{{ $inputValue }}" {{ $required ? 'required' : '' }}>

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
