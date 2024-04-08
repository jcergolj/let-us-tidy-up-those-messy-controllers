@extends('layouts.talk-app')

@section('content')
    <x-title>
        Builder Pattern
    </x-title>

    <x-body>
        <x-p class="flex justify-center">
            The Builder pattern is useful when you need to create objects with many optional properties. <br/>
            Ideal for classes with many properties and not all of them are required.
        </x-p>
    </x-body>
@endsection
