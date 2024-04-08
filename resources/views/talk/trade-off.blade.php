@extends('layouts.talk-app')

@section('content')
    <x-title>
        Trade-offs
    </x-title>

    <x-body>

        <x-subtitle>
            Fat Controllers
        </x-subtitle>
        <x-ul>
            <li>simplicity</li>
            <li>"faster development"</li>
            <li>immediate access</li>
            <li>cognitive overload</li>
        </x-ul>

        <x-subtitle>
            Skinny Controllers
        </x-subtitle>
        <x-ul>
            <li>separation of concerns</li>
            <li>maintainability</li>
            <li>flexibility</li>
            <li>testability</li>
        </x-ul>

        <x-subtitle>
            Fat Models, Skinny Controllers
        </x-subtitle>
        <x-p>
             promotes a clear separation of concerns and helps maintain a clean and maintainable architecture
        </x-p>
    </x-body>
@endsection
