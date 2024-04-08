@extends('layouts.talk-app')

@section('content')
    <x-title>
        Weather DTO
    </x-title>

    <x-body>
        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-2/WeatherDTO.php"
        />
    </x-body>
@endsection
