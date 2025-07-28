@props(['href', 'type' => 'primary', 'icon' => null])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn btn-' . $type]) }}>
    @if ($icon)
        <i class="{{ $icon }} me-1"></i>
    @endif
    {{ $slot }}
</a>
