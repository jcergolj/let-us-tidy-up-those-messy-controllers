@props(['status'])

@if ($status)
    <div data-turbo-temporary {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif
