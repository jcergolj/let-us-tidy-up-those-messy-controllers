@extends('layouts.talk-app')

@section('content')
    <x-title>
        Utilise Model Attributes
    </x-title>

    <x-body>
        <x-p>
            Accessors, mutators, and attribute casting allow you to transform Eloquent attribute values when you retrieve or set them on model instances.
            <br/>
            <x-link href="https://laravel.com/docs/11.x/eloquent-mutators#attribute-casting">Eloquent: Mutators & Casting</x-link>
        </x-p>
        <x-subtitle>User  Model</x-subtitle>
        <x-code-from-file
            dataLine="15, 20-25"
            language="php" file="resources/views/talk/_code-snippets/example-1/User.php"
        />
    </x-body>
@endsection
