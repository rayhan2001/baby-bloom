@props(['name', 'label' => '', 'options' => [], 'selected' => [], 'placeholder' => '', 'required' => false])

@php
    $fieldName = str_replace('[]', '', $name);
    $selectedValues = old($fieldName, $selected);
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

    <select name="{{ $name }}" multiple
        class="form-select multiple-select @error($fieldName) is-invalid @enderror" data-placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}>
        @foreach ($options as $key => $text)
            <option value="{{ $key }}" {{ in_array($key, $selectedValues ?? []) ? 'selected' : '' }}>
                {{ $text }}
            </option>
        @endforeach
    </select>

    @error($fieldName)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
