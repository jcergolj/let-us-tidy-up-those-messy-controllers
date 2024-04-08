@extends('layouts.talk-app')

@section('content')
    <x-title>
        Pipeline Classes
    </x-title>

    <x-body>
        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-3/Pipeline.php"
        />
    </x-body>
@endsection
