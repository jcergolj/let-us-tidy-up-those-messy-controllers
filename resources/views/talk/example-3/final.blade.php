@extends('layouts.talk-app')

@section('content')
    <x-title>
        Is it better now?
    </x-title>

    <x-body>
        <x-subtitle>User Controller after refactor</x-subtitle>
        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-3/UserControllerSolution.php"
        />

        <x-subtitle>Let's discuss new code</x-subtitle>
        <x-ul>
            <li>mental burdon for keeping everything inside controller is greater</li>
            <li>the number of if statements is getting out of hand</li>
            <li>as we can see more nested the code is harder is to understand it</li>
            <li>easier to unit test</li>
        </x-ul>
    </x-body>
@endsection
