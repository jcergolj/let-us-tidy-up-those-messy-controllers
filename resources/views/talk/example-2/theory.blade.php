@extends('layouts.talk-app')

@section('content')
    <x-title>
        DTOs vs Value Objects
    </x-title>

    <x-body>
        <x-subtitle>DTOs</x-subtitle>
        <x-ul>
            <li>used for transferring data between layers of an application, such as between controllers and services, or between the application and external systems (e.g., API requests and responses).</li>
            <li>it replaces array (key are not predefined) with more structured objects (properties)</li>
            <li>good use case: Laravel HTTP Client returns data as array -> convert to DTO</li>
        </x-ul>

        <x-subtitle>Value Object</x-subtitle>
        <x-ul>
            <li>
                focuses on representing a specific value or concept and often contains behavior related to that value
            </li>
            <li>
                typically immutable; new value -> new instance
            </li>
            <li>examples: address, money, temperature, map coordinates</li>
        </x-ul>
    </x-body>
@endsection
