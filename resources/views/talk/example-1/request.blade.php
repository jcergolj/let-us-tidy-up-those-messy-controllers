@extends('layouts.talk-app')

@section('content')
    <x-title>
        Move logic to form request class
    </x-title>

    <x-body>
        <x-subtitle>StoreUserRequest</x-subtitle>
        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-1/StoreUserRequest.php"
        />

        <x-subtitle>UserController</x-subtitle>
        <x-code-from-file
            dataLine="12,15"
            language="php" file="resources/views/talk/_code-snippets/example-1/UserControllerSolution.php"
        />
    </x-body>
@endsection
