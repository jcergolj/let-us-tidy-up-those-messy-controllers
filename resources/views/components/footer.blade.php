@props(['previous' => null, 'next' => null])

<footer class="py-4 px-4 lg:px-10 flex justify-between">
    @if ($previous !== null)
        <a
            tabindex="2"
            id="previous-button"
            class="underline text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            href="{{ $previous }}"
        >
            Previous
        </a>
    @else
        <div></div>
    @endif

    @if ($next !== null)
        <a
            tabindex="1"
            id="next-button"
            class="underline text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            href="{{ $next }}"
        >
            Next
        </a>
    @endif
</footer>
