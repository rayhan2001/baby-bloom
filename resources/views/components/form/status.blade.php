@props([
    'value',
    'data' => [],
])

@php
    $label = is_array($data) && array_key_exists($value, $data)
        ? $data[$value]
        : ucfirst($value);

    $badgeClasses = [
        'active' => 'bg-success',
        'inactive' => 'bg-secondary',
        'pending' => 'bg-warning',
        'rejected' => 'bg-danger',
        'draft' => 'bg-dark',
    ];

    $class = $badgeClasses[$value] ?? 'bg-info';
@endphp

<span class="badge {{ $class }}">
    {{ $label }}
</span>
