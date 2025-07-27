@props(['name', 'label' => '', 'options' => [], 'selected' => '', 'placeholder' => '', 'required' => false])

<div class="mb-3">
    @if ($label)
        <label class="form-label">
            {{ $label }}
            @if ($required)
                <sup class="text-danger">*</sup>
            @endif
        </label>
    @endif

    <select name="{{ $name }}" class="form-select @error($name) is-invalid @enderror"
        {{ $required ? 'required' : '' }}>
        @if ($placeholder)
            <option value="" disabled {{ $selected === '' ? 'selected' : '' }}>
                {{ $placeholder }}
            </option>
        @endif

        @foreach ($options as $key => $text)
            <option value="{{ $key }}" {{ $selected == $key ? 'selected' : '' }}>
                {{ $text }}
            </option>
        @endforeach
    </select>

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
