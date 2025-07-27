@props([
    'type' => 'button',
    'label' => '',
])

<div class="d-grid">
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'btn']) }}>
        {{ $label }}
    </button>
</div>
