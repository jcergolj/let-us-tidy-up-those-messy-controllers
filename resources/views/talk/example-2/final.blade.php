@extends('layouts.talk-app')

@section('content')
    <x-title>
        Is it better now?
    </x-title>

    <x-body>
        <x-subtitle>Weather Controller after refactor</x-subtitle>
        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-2/WeatherControllerSolution.php"
        />

        <x-subtitle>Let's discuss new code</x-subtitle>
        <x-ul>
            <li>better refactor example </li>
            <li>mental burdon for keeping everything inside controller is greater</li>
            <li>values object classes ensures that data are valid</li>
            <li>value objects place for additional logic</li>
            <li>DTOs -> remedy for undefined array key errors</li>
        </x-ul>
    </x-body>
@endsection
