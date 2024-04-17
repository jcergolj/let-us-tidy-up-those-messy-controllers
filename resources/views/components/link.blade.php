@props(['href'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'underline text-blue-800 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500']) }}>{{ $slot }}</a>
