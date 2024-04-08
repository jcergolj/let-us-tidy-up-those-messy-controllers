@extends('layouts.talk-app')

@section('content')
    <x-title>
        Example 1: Utilise Form Request and Model classes
    </x-title>

    <x-body>
        <x-p>Move request params validation and manipulation to dedicated form request class.</x-p>

        <x-code-from-file
            dataLine="11, 13-18,22-25"
            language="php" file="resources/views/talk/_code-snippets/example-1/UserController.php"
        />
    </x-body>
@endsection
