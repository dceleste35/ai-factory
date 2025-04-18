@php
    $attributes = $unescapedForwardedAttributes ?? $attributes;
@endphp

@props([
    'variant' => 'outline',
])

@php
    $classes = Flux::classes('shrink-0')->add(
        match ($variant) {
            'outline' => '[:where(&)]:size-6',
            'solid' => '[:where(&)]:size-6',
            'mini' => '[:where(&)]:size-5',
            'micro' => '[:where(&)]:size-4',
        },
    );
@endphp

<svg
    data-flux-icon
    aria-hidden="true"
    {{ $attributes->class($classes) }}
    width="17"
    height="16"
    viewBox="0 0 17 16"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
>
    <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M16.18 8.1818C16.18 7.61453 16.1291 7.06908 16.0345 6.54544H8.5V9.63999H12.8055C12.62 10.64 12.0564 11.4873 11.2091 12.0545V14.0618H13.7945C15.3073 12.6691 16.18 10.6182 16.18 8.1818Z"
        fill="#4285F4"
    />
    <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M8.49992 16C10.6599 16 12.4708 15.2836 13.7945 14.0618L11.209 12.0545C10.4926 12.5345 9.57629 12.8182 8.49992 12.8182C6.41629 12.8182 4.65265 11.4109 4.02356 9.51999H1.35083V11.5927C2.66719 14.2073 5.37265 16 8.49992 16Z"
        fill="#34A853"
    />
    <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M4.02364 9.52001C3.86364 9.04001 3.77273 8.52729 3.77273 8.00001C3.77273 7.47274 3.86364 6.96001 4.02364 6.48001V4.40729H1.35091C0.809091 5.48729 0.5 6.70911 0.5 8.00001C0.5 9.29092 0.809091 10.5127 1.35091 11.5927L4.02364 9.52001Z"
        fill="#FBBC05"
    />
    <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M8.49992 3.18182C9.67447 3.18182 10.729 3.58545 11.5581 4.37818L13.8526 2.08364C12.4672 0.792727 10.6563 0 8.49992 0C5.37265 0 2.66719 1.79273 1.35083 4.40727L4.02356 6.48C4.65265 4.58909 6.41629 3.18182 8.49992 3.18182Z"
        fill="#EA4335"
    />
</svg>
