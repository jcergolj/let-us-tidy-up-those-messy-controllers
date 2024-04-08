@extends('layouts.talk-app')

@section('content')
    <x-title>
        Coordinates DTO & Value Object
    </x-title>

    <x-body>
        <x-subtitle>DTO</x-subtitle>
        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-2/CoordinatesDTO.php"
        />

        <x-subtitle>Value Object</x-subtitle>
        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-2/CoordinatesValueObject.php"
        />
    </x-body>
@endsection
