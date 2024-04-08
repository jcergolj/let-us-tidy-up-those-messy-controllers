<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if ($viewTransitions ?? false)
        <meta name="view-transition" content="same-origin" />
        @endif
        {{ $meta ?? '' }}

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ tailwindcss('css/app.css') }}">

        <!-- Scripts -->
        <x-importmap::tags />
    </head>
    <body class="antialiased">
        <x-progress-bar />

        <main class="min-h-screen flex flex-col justify-between bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @hasSection('content-center')
                <section class="flex-grow py-4 px-4 lg:px-10 flex flex-col justify-center items-center">
                    @yield('content-center')
                </section>
            @else
                <section class="flex-grow py-4 px-4 lg:px-10 mt-12">
                    @yield('content')
                </section>
            @endif

            <x-footer :next="$next ?? null" :previous="$previous ?? null" />
        </main>

        @yield('scripts')
    </body>
</html>
