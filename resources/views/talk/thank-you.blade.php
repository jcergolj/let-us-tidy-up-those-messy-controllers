@extends('layouts.talk-app')

@section('content-center')
    <x-title>
        Thank you
    </x-title>

    <x-body>
        <img src="{{ asset('images/jcergolj.me.uk.png') }}" loading="lazy" decoding="async" width="240" height="240" class="m-auto" />
        <x-link href="https://jcergolj.me.uk">jcergolj.me.uk</x-link>

         <x-medium-title class="mt-20">
            If you have any Laravel related questions, feel free to reach out to me
        </x-medium-title>
        <x-subtitle class="text-center">
            me@jcergolj.me.uk
        </x-subtitle>
    </x-body>
@endsection
