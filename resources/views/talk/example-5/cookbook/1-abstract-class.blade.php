@extends('layouts.talk-app')

@section('content')
    <x-title>
        Laravel Cookbook for State Pattern
    </x-title>

    <x-body>
        <x-subtitle>Create abstract class with all transitions</x-subtitle>

        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-5/PostState.php"
        />
    </x-body>
@endsection
