@props(['name', 'label' => '', 'required' => false, 'value' => 1, 'checked' => false])

@php
    $isChecked = old($name, $checked) ? 'checked' : '';
@endphp

<div class="form-check mb-3">
    <input type="checkbox" name="{{ $name }}" value="{{ $value }}"
        class="form-check-input @error($name) is-invalid @enderror" id="{{ $name }}" {{ $isChecked }}
        {{ $required ? 'required' : '' }}>

    <label class="form-check-label" for="{{ $name }}">
        {{ $label }}
        @if ($required)
            <sup class="text-danger">*</sup>
        @endif
    </label>

    @error($name)
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>
