@extends('layouts.talk-app')

@section('content')
    <x-title>
        Is it better now?
    </x-title>

    <x-body>
        <x-subtitle>User Controller after refactor</x-subtitle>
        <x-code-from-file
            language="php" file="resources/views/talk/_code-snippets/example-1/UserControllerFinalSolution.php"
        />

        <x-subtitle>Let's discuss new code</x-subtitle>
        <x-ul>
            <li>not the best example to refactor</li>
            <li>mental footprint: keep everything inside controller vs multiple class approach</li>
            <li>easier to test</li>
            <li>we have options &#128077;</li>
        </x-ul>
    </x-body>
@endsection
